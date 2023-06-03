<!DOCTYPE html>
<html>
<head>
    <title>Product App - Web Programmming Class</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    @php

    @endphp

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

<h1>All the products</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Price</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($products as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->product_name }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->description }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- edit this product (uses the edit method found at GET /products/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('products/' . $selected_product->id . '/compilation/' . $value->id) }}">Select this Product</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>