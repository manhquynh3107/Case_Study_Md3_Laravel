@extends('admin.page_admin')
@section('body')
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Reset Password</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form action="{{route('')}}" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email" required="">
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-3 px-4">Reset Password</button>
                </form>
                <h1 class="paragraph-agileits-w3layouts mt-4">
                    <a href="{{route('signIn')}}">Back to Login</a>
                </h1>
            </div>

@endsection
