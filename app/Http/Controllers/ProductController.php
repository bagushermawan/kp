<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories=Category::all();
        $daftar_product = Product::paginate(5);
        $count = Product::count();
        // dd($daftar_product->categories->name);

        return view("product.index", ["daftar_product" => $daftar_product], compact('count'));
    }
    public function create()
    {
    	$category = Category::all();

        return view('product.create', [
        	'category' => $category,
        ]);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required',
            // 'category_id' => 'required',

        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        if($request->file('image')){
            $image_path = $request->file('image')->store('product_images', 'public');
            $product->image = $image_path;
            // dd($image_path);
        }
        

    	if(!$product->save()){
            Session::flash('gagal','Yamaap, Product gagal disimpan!!');
            return redirect()->route('product.create');
        }

        $product = Product::findorFail($product->id);
        $product->categories()->attach($request->get('product_id'));
        $product->categories()->attach($request->get('category_id'));

        // dd($product->id);

        Session::flash('sukses','Yeahh, Product berhasil disimpan!');
        return redirect()->route('product');

        return back()->withErrors(['name.required', 'Name is required'],['category.requied','Pilih setidaknya 1 category']);
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $product = Product::find($id);
        if(!$product){
            return abort(404);
        }
        return view('product.edit')->with('product', $product)->with('product', $product);

    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');

        $new_cover = $request->file('image');
        if($new_cover){
        if($product->image && file_exists(storage_path('storage/app/public/' . $product->image))){\Storage::delete('public/'. $product->image);
        }
        $new_cover_path = $new_cover->store('product_images', 'public');
        $product->image = $new_cover_path;
        }

        $product->save();
        $product->categories()->sync($request->get('category_id'));
        Session::flash('sukses','Product berhasil di update!');
        return redirect()->route('product');


    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('delete','Product berhasil dihapus!');
        return redirect()->route('product');
    }
    public function search(Request $request)
    {
        
        $search=$request->get('q');
        $daftar_product=DB::table('products')->where('title', 'like', '%'.$search.'%')->paginate(3);
        $count= Product::count();  
        
        return view('product.index', ['daftar_product'=>$daftar_product],['categories'=>$categories]);
    }
}
