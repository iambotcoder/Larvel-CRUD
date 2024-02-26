@extends('portfolios.layout')
@section('content')

    
    


<div class="container">
    <div class="form-container">
        {{-- <h2 class="form-title">User Portfolio Form</h2> --}}
        <form id="portfolioForm" action="{{ route('portfolios.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">nickName</label>
                    <input type="email" class="form-control" id="nickName" name="nickName" placeholder="Enter your NickName" required>
                </div>
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <textarea class="form-control" id="bio" name="bio" rows="5" placeholder="Enter a Bio" required></textarea>
            </div>
            <!-- Static education fields -->
<h3>Education</h3>
<div class="form-row mb-2">
    <div class="col">
        <input type="text" class="form-control" placeholder="Institution Name" name="institution_name_1" required>
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Degree/Course Details" name="degree_course_1" required>
    </div>
</div>
<div class="form-row mb-2">
    <div class="col">
        <input type="text" class="form-control" placeholder="Institution Name" name="institution_name_2" required>
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Degree/Course Details" name="degree_course_2" required>
    </div>
</div>

<!-- Static work experience fields -->
<h3>Professional Work Experience</h3>
<div class="form-row mb-2">
    <div class="col">
        <input type="text" class="form-control" placeholder="Organization Name" name="organization_name_1" required>
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Post/Role" name="post_role_1" required>
    </div>
    <div class="col">
        <input type="number" class="form-control" placeholder="Years of Experience" name="years_experience_1" required>
    </div>
</div>
<div class="form-row mb-2">
    <div class="col">
        <input type="text" class="form-control" placeholder="Organization Name" name="organization_name_2" required>
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Post/Role" name="post_role_2" required>
    </div>
    <div class="col">
        <input type="number" class="form-control" placeholder="Years of Experience" name="years_experience_2" required>
    </div>
</div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS (optional, only needed if you use Bootstrap JS components) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




@endsection