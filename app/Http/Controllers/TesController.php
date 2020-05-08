<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index()
    {
        // $routeArray = app('request')->route()->getAction();
        // $controllerAction = class_basename($routeArray['controller']);
        // list($controller, $action) = explode('@', $controllerAction);


        // // print_r($controller);
        // // exit;

        // dd($controller);
        return view("layouts.frontend-master");

        // return $next($request); 
    }
}
