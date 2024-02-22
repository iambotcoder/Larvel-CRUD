@extends('products.layout')
<div class="row">
    <div class="col-lg-12">

    </div>
</div>
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            {{-- <h2>Laravel 8 CRUD Example</h2> --}}
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Details</th>
        <th>User Name</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($products as $product)
    @can('view',$product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>{{ $product->user->name}}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="background: rgb(168, 4, 4)">Delete</button>
            </form>
        </td>
    </tr>
    @endcan
    @endforeach

</table>
{{-- {{ $products->links() }} --}}


@endsection