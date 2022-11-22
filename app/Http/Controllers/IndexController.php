<?php

namespace App\Http\Controllers;

use App\Models\Backgrounds;
use App\Models\Product;
use App\Models\Contents;
use App\Models\TypeProduct;
use App\Models\Abouts;

class IndexController extends Controller
{
    public function index()
    {
        $backgrounds = Backgrounds::all();
        $product = Product::limit(3)->get();
        $typeproduct = TypeProduct::all();

        return view('promotepage.home',compact('backgrounds','product','typeproduct'));
    }

    public function about()
    {


        return view('promotepage.about');
    }
    public function menu()
    {
        $product = Product::all();

        return view('promotepage.menu',compact('product'));
    }
    public function contract()
    {


        return view('promotepage.contract');
    }
    public function info()
    {


        return view('promotepage.info');
    }
    
}