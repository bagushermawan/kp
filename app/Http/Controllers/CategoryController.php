<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_kategori = \App\Category::paginate(3);
        $count=\App\Category::count();
        return view("category.index", ["daftar_kategori" => $daftar_kategori], compact('count'));
        
    }

    public function create()
    {
        return view('category.create');
        
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        

        $category = new Category();
        $category->name = $request->name;

    	if(!$category->save()){
            Session::flash('gagal','Yamaap, Category gagal disimpan!!');
            return redirect()->route('category');
        }

        Session::flash('sukses','Yeahh, Category berhasil disimpan!');
        return redirect()->route('category');

        return back()->withErrors(['name.required', 'Namdde is required']);

    }    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('sukses','Category berhasil dihapus!');
        return redirect()->route('category');
    }
}
