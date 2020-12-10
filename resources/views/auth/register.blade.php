@extends('frontend.app')
@section('content')
    <!-- Custom Theme files -->
    <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all"></link>
    <!-- //Custom Theme files -->
    <br>
    <body>
    <br><br><br>
    <!-- main -->

    <div data-vide-bg="{{asset('assets/video/jurassicworld-biggame_h1080p.mp4')}}">
        <div class="main-w3layouts center-container">
            <h1></h1>
            <div class="main-agileinfo">
                <div class="agileits-top">
                    <form method="post">
                        @csrf
                        <h1>Sign Up</h1>
                        @if (session('error'))
                            <div class="alert alert-warning" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        <input class="text" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Username">
                        <input class="text email" type="email" name="email"  required="" placeholder="Email">
                        <i class="fa fa-lock"></i>
                        <input class="text" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                        <input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required autocomplete="new-password">
                        <div class="wthree-text">
                            <label class="anim">
                                <input type="checkbox" class="checkbox" required="">
                                <span>I Agree To The Terms & Conditions</span>
                            </label>
                            <div class="clear"> </div>
                        </div>
                        <input type="submit" value="Sign Up">
                        @if( auth()->check() )
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                            </li>
                        @endif
                        <p>Back to <a href="{{route('login')}}">Sign In</a></p>
                    </form>
                </div>
            </div>
            <!-- copyright -->
            <div class="w3copyright-agile">
                <h2> <a href="{{route('home')}}" target="_blank">Back</a></h2>
            </div>
            <!-- //copyright -->
        </div>
    </div>
    <!-- //main -->
    <!-- js -->
    <script type="text/javascript" src="{{asset('/assets/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('/assets/js/jquery.vide.min.js')}}"></script>
    <!-- //js -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--/theme-change-->
    <script src="{{'assets/js/theme-change.js'}}"></script>
    <!-- //theme-change-->
    <script src="{{'assets/js/owl.carousel.js'}}"></script>
    <!-- script for banner slider-->
    </body>
@endsection


<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
