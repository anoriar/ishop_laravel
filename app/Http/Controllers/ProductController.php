<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Category;

class ProductController extends Controller {

    public function index() {
        $lastProducts = Product::select('id', 'name', 'price', 'preview', 'is_new', 'is_recommended')->get();
        $categories = Category::select('id', 'name')->get();
        return view('product.index', ['lastProducts' => $lastProducts, 'categories' => $categories]);
    }

    public function showCategory($id) {
        //$lastProducts = Product::select('id', 'name', 'price', 'preview', 'is_new', 'is_recommended')->where('category_id', $id)->get();
        $category = Category::find($id);
        $lastProducts = $category->products()->get(); 
        $categories = Category::select('id', 'name')->get();
        return view('product.category', ['lastProducts' => $lastProducts, 'categories' => $categories]);
    }

    public function showDetails($id) {
        $product = Product::select('id', 'name', 'price', 'count', 'preview', 'description', 'is_new', 'is_recommended')->where('id', $id)->first();
        $categories = Category::select('id', 'name')->get();
        return view('product.details', ['product' => $product, 'categories' => $categories]);
    }

}
