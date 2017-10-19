<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\Category;

class IndexController extends Controller
{
    public function index(){
        
        $lastProducts = Product::select('id', 'name', 'price', 'preview',
                'is_new', 'is_recommended') -> get();
        $categories = Category::select('id', 'name') -> get();
        return view('index', ['lastProducts' => $lastProducts, 'categories' => $categories]);
    }
}
