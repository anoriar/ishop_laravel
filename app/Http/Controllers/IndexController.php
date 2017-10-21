<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

use App\Http\Requests;
use App\Product;
use App\Category;

class IndexController extends Controller
{
    public function index(){
        
        $lastProducts = Product::select('id', 'name', 'price', 'preview',
                'is_new', 'is_recommended') -> paginate(Config::get('constants.pagination'));
        $categories = Category::select('id', 'name') -> get();
        return view('index', ['lastProducts' => $lastProducts, 'categories' => $categories]);
    }
}
