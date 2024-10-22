<style>
    .products-grid {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .product-card {
        border: 1px solid #ddd;
        padding: 20px;
        width: 200px;
        border-radius: 5px;
    }

    .product-card h2 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .product-card p {
        margin: 5px 0;
    }

</style>
<div class="product-card">
    <h2>{{ $name }}</h2>
    <p>Цена: {{ number_format($cost, 0, ',', ' ') }} руб</p> <!--форматируется-->
    <p>Количество: {{ $amount > 0 ? $amount : 'Нет в наличии' }}</p> <!--тернарный оператор для проверки значения переменной $amount-->
</div>
