<!DOCTYPE html>
<html>
<head>
    <title>Product App - Web Programming Class</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
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

<h1>Showing {{ $product->product_name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $product->product_name }}</h2>
        <p>
            <strong>Price:</strong> {{ $product->price }}<br>
            <strong>Description:</strong> {{ $product->description }}
        </p>
        
        <!-- edit this product (uses the edit method found at GET /products/{id}/edit -->
        <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $product->id . '/compare') }}">Compare this Product</a>
    </div>

</div>
</body>
</html>