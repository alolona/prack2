<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Получение всех продуктов из базы данных
        return view('index', compact('products'));
    }
}
