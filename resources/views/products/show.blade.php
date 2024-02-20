@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Add New Product </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}">back</a>
        </div>
    </div>
</div>
<div class="container">
    <h1>Product Details</h1>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Product Name: {{$product->name}}</h5>
        <p class="card-text">Product ID: {{$product->id}}</p>
        <p class="card-text">Description: {{$product->detail}}</p>
      </div>
    </div>
  </div>
@endsection