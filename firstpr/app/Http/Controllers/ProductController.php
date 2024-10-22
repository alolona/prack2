<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index()
{
$products = [
["name" => "Orange", "cost" => 50000000, "amount" => 27],
["name" => "Banana", "cost" => 120000000, "amount" => 17],
["name" => "Bread", "cost" => 70000000, "amount" => 0],
];

return view('products', compact('products')); //Метод возвращает представление (view) с именем products. Функция compact('products') создает ассоциативный массив, где ключ — это строка 'products', а значение — массив $products. Это позволяет передать данные о продуктах в представление.//
}
}
