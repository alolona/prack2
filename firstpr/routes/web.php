<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
//Эта строка определяет маршрут для HTTP GET-запросов по адресу /products. Когда пользователь обращается к этому URL, будет вызван метод index класса ProductController. //
