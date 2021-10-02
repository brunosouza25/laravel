<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
            
        $search = request('search');
        $id = request('id');
        return view('products.products', ['search' => $search, 'id' => $id]);
    }
}
