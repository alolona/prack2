<style>
    .products-grid {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .product-card {
        border: 2px solid #00008B;
        padding: 20px;
        width: 200px;
        
        box-shadow: 2px 2px 4px rgba(61, 105, 16, 0.5);
    }

    .product-card h2 {
        font-size: 24px;
        margin-bottom: 12px;
        color: #00008B;
    }

    .product-card p {
        margin: 5px 0;
    }

</style>
<div class="product-card">
    <h2>{{ $name }}</h2>
    <p>Цена: {{ number_format($cost, 0, ',', ' ') }} руб</p>
    <p>Количество: {{ $amount > 0 ? $amount : 'Нет в наличии' }}</p> <!--тернарный оператор для проверки значения переменной-->
</div>
