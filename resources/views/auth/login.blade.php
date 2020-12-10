@extends('frontend.app')
@section('content')
    <!-- Custom Theme files -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all"></link>
    <br><br><br>
    <body>
    <br><br><br>
    <!-- main -->

    <div data-vide-bg="{{asset('/assets/video/aquaman-trailer-3_h720p.mp4')}}">
        <div class="main-w3layouts center-container">
            <h1></h1>
            <div class="main-agileinfo">
                <div class="agileits-top">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h1>Sign In</h1>
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <input class="text email" placeholder="Email" type="email" name="email" :value="old('email')"
                               required autofocus>
                        <input class="text" placeholder="Password" type="password" name="password" required
                               autocomplete="current-password">
                        <div class="wthree-text">
                            <label class="anim"></label>
                            <div class="clear"></div>
                        </div>
                        <input type="submit" value="Sign In">
                        <div class="wthree-text">
                            <label class="anim">
                           <span>@if (Route::has('password.request'))
                                   <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                      href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                               @endif
                            </span>
                            </label>
                        </div>
                        <label class="anim">

                        </label>
                        <label class="anim">

                        </label>
                        <p> If you hadn't account Please press into <a href="{{route('register')}}">Sign Up</a></p>
                    </form>
                </div>
            </div>
            <!-- copyright -->
            <div class="w3copyright-agile">
                <h2><a href="{{route('home')}}" target="_blank">Back</a></h2>
            </div>
            <!-- //copyright -->
        </div>
    </div>
    <!-- //main -->
    <!-- js -->
    <script type="text/javascript" src="{{asset('/assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.vide.min.js')}}"></script>
    <!-- //js -->
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--/theme-change-->
    <script src="{{'assets/js/theme-change.js'}}"></script>
    <!-- //theme-change-->
    <script src="{{'assets/js/owl.carousel.js'}}"></script>
    <!-- script for banner slider-->
    </body>
@endsection

