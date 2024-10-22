<?php
namespace App\View\Components;

use Illuminate\View\Component;

class ProductCard extends Component
{
public $name;
public $cost;
public $amount;

public function __construct($name, $cost, $amount)//Это конструктор класса, который вызывается при создании экземпляра компонента. Он принимает три параметра: $name, $cost и $amount.//
{
$this->name = $name;
$this->cost = $cost;
$this->amount = $amount;
}

public function render()//Объявляется метод render, который отвечает за отображение компонента.//
{
return view('components.product-card');//Внутри метода render возвращается представление (view) с именем components.product-card. Это представление будет использоваться для рендеринга HTML-кода компонента//
}
}
