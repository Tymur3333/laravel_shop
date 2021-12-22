<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
//        $products = Product::where('id', 5)->first();
//        dd($products);
        foreach ($products as $product) {
            echo 'Title: '.$product->title;
            echo "<br>";
            echo 'Price: '.$product->price;
            echo "<br>";
            echo "-------------------------";
            echo "<br>";
        }
//        return view('home.index');
    }
}
