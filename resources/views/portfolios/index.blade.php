@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            {{-- <h2>Laravel 8 CRUD Example</h2> --}}
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('portfolios.create') }}"> Create New Portfolio</a>
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
        <th>Email</th>
        <th>Bio</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($portfolios as $portfolio)
    
    <tr>
        <td>{{ $portfolio->id }}</td>
        <td>{{ $portfolio->name }}</td>
        <td>{{ $portfolio->email }}</td>
        <td>{{ $portfolio->bio }}</td>
        <td>
            <form action="{{ route('portfolios.destroy',$portfolio->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('portfolios.show',$portfolio->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('portfolios.edit',$portfolio->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="background: rgb(168, 4, 4)">Delete</button>
            </form>
        </td>
    </tr>
    
    @endforeach

</table>
{{-- {{ $portfolios->links() }} --}}

@endsection
