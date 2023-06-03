<!DOCTYPE html>
<html>
<head>
    <title>Product App - Web Programming Class</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    @php
    use Collective\Html\FormFacade as Form;
    use Collective\Html\HtmlFacade as Html;
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

<h1>Edit {{ $product->product_name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($product, array('route' => array('products.update', $product->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('product_name', 'Name') }}
        {{ Form::text('product_name', old('product_name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('price', 'Price') }}
        {{ Form::text('price', old('price'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::text('description', old('description'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Edit the product!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>