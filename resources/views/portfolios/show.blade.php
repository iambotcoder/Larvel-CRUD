@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            {{-- <h2> User Portfolios </h2> --}}
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('portfolios.index') }}">Back</a>
        </div>
    </div>
</div>
<div class="container">
    <h1>User Portfolio Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User Name: {{$portfolio->name}}</h5>
            <p class="card-text">Email: {{$portfolio->email}}</p>
            <p class="card-text">Bio: {{$portfolio->bio}}</p>
            <p class="card-text">Education:</p>
            <ul>
                <li>{{$education['institution_name'][0]}}</li> 
                <li>{{$education['degree_course'][0]}}</li>
            </ul>
            <ul>
                <li>{{$education['institution_name'][1]}}</li> 
                <li>{{$education['degree_course'][1]}}</li>
            </ul>
            <p class="card-text">Work Experience:</p>
            <ul>
                <li>{{$work_experience['organization_name'][0]}}</li> 
                <li>{{$work_experience['post_role'][0]}}</li>
                <li>{{$work_experience['years_experience'][0]}}</li>
            </ul>
            <ul>
                <li>{{$work_experience['organization_name'][1]}}</li> 
                <li>{{$work_experience['post_role'][1]}}</li>
                <li>{{$work_experience['years_experience'][1]}}</li>
            </ul>
        </div>
    </div>
</div>
@endsection
