<!DOCTYPE html>
<html>
<head>
    <title>Product App - Web Programming Class</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<style>
    ion-icon[name="arrow-down-outline"] {
        color: green
    }

    ion-icon[name="arrow-up-outline"] {
        color: red
    }
</style>

<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Product App</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('products') }}">View All Products</a></li>
        <li><a href="{{ URL::to('products/create') }}">Create a Product</a>
    </ul>
</nav>

<h1>Comparing {{ $first_product->product_name }} with {{ $second_product->product_name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $first_product->product_name }}</h2>
        <p>
            @if($first_product->price > $second_product->price)
            <strong>Price:</strong> {{ $first_product->price }} <ion-icon name="arrow-up-outline"></ion-icon> <br>
            @elseif($first_product->price < $second_product->price)
            <strong>Price:</strong> {{ $first_product->price }} <ion-icon name="arrow-down-outline"></ion-icon></ion-icon> <br>
            @else
            <strong>Price:</strong> {{ $first_product->price }} <br>
            @endif
            <strong>Description:</strong> {{ $first_product->description }}
        </p>
    </div>

    <div class="jumbotron text-center">
        <h2>{{ $second_product->product_name }}</h2>
        <p>
            @if($first_product->price > $second_product->price)
            <strong>Price:</strong> {{ $second_product->price }} <ion-icon name="arrow-down-outline"></ion-icon> <br>
            @elseif($first_product->price < $second_product->price)
            <strong>Price:</strong> {{ $second_product->price }} <ion-icon name="arrow-up-outline"></ion-icon></ion-icon> <br>
            @else
            <strong>Price:</strong> {{ $second_product->price }} <br>
            @endif
            <strong>Description:</strong> {{ $second_product->description }}
        </p>
    </div>

</div>
</body>
</html>