<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () {
        return view("index");
    }
    
    public function about () {
        $name = "Tedis";
        $names = [
            "Tedis",
            "Michael",
            "David",
            "Jessica"
            ];
        return view("about", [
            "name" => $name,
            "names" => $names
        ]);
    }
    
}