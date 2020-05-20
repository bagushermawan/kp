<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Category;

class TesController extends Controller
{
    public function index()
    {
        // $routeArray = app('request')->route()->getAction();
        // $controllerAction = class_basename($routeArray['controller']);
        // list($controller, $action) = explode('@', $controllerAction);


        // // print_r($controller);
        // // exit;

        // $produks = Product::all();
        $user = User::all();
        dd($user);
        // return view("layouts.frontend-master");

        // return $next($request); 
    }
}
