<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Session;

class ShopController extends Controller
{
    public function index()
    {
        $produks = Product::all();
        // dd($produks);
        return view("layouts.frontend-master", ["produks" => $produks]);

    }
}
