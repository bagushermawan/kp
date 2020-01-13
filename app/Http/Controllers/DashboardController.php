<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request)
    {
        $daftar_product = Product::all();
        $daftar_kategori = \App\Category::all();
        return view('admin.dashboard.index', ["daftar_kategori" => $daftar_kategori], ["daftar_product" => $daftar_product]);
    }
}
