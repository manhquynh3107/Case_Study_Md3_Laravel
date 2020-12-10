@extends('frontend.app')
    @section('content')

        <!--/breadcrumbs -->
        <div class="w3l-breadcrumbs">
            <nav id="breadcrumbs" class="breadcrumbs">
                <div class="container page-wrapper">
                    <a href="{{route('home')}}">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
                </div>
            </nav>
        </div>
        <!--//breadcrumbs -->

        <!-- /about-->
        <div class="w3l-ab-grids py-5">
            <div class="container py-lg-4">
                <div class="row ab-grids-sec align-items-center">
                    <div class="col-lg-6 ab-right">
                        <img class="img-fluid" src="{{asset('/assets/images/banner1.jpg')}}">
                    </div>
                    <div class="col-lg-6 ab-left pl-lg-4 mt-lg-0 mt-5">
                        <h3 class="hny-title">QnS</h3>
                        <p class="mt-3">Have fun with Us.</p>
                        <div class="ready-more mt-4">
                            @if(\Illuminate\Support\Facades\Route::has('login'))
                                @if(\Illuminate\Support\Facades\Auth::user())
                                    <a href="{{route('home')}}"></a>
                                    <a href="{{route('logout')}}"></a>
                                    @endif
                                @if(\Illuminate\Support\Facades\Auth::admin())

                                    @endif
                                @endif
                            <a href="{{route('login')}}" class="btn read-button">Sign In <span class="fa fa-angle-double-right ml-2" aria-hidden="true"></span></a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    <h1>Log Out</h1>
                                    {{ csrf_field() }}
                                </form>
                        </div>
                    </div>
                </div>

                <div class="w3l-counter-stats-info text-center">
                    <div class="stats_left">
                        <div class="counter_grid">
                            <div class="icon_info">
                                <p class="counter">2323</p>
                                <h4>Movies</h4>

                            </div>
                        </div>
                    </div>
                    <div class="stats_left">
                        <div class="counter_grid">
                            <div class="icon_info">
                                <p class="counter">4545</p>
                                <h4>Shows</h4>

                            </div>
                        </div>
                    </div>
                    <div class="stats_left">
                        <div class="counter_grid">
                            <div class="icon_info">
                                <p class="counter">6767</p>
                                <h4>Members</h4>

                            </div>
                        </div>
                    </div>
                    <div class="stats_left">
                        <div class="counter_grid">
                            <div class="icon_info">
                                <p class="counter">96969696</p>
                                <h4>Time of Use</h4>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //about-->
        <!--grids-sec1-->
        <section class="w3l-team" id="team">
            <div class="grids-main py-5">
                <div class="container py-lg-4">
                    <div class="headerhny-title">
                        <h3 class="hny-title">Our Actors</h3>
                    </div>
                    <div class="owl-team owl-carousel owl-theme">
                        <div class="item vhny-grid">
                            <div class="d-grid team-info">
                                <div class="column position-relative">
                                    <a href="#url"><img src="{{asset('assets/images/a1.jpg')}}" alt="a1 img" class="img-fluid rounded team-image" /></a>
                                </div>
                                <div class="column text-center">
                                    <h3 class="name-pos"><a href="#url">QnS</a></h3>

                                    <div class="social">
                                        <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                        <a href="#twitter" class="twitter"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                                        <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#url"><img src="{{asset('/assets/images/a3.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                    </div>
                                    <div class="column text-center">
                                        <h3 class="name-pos"><a href="#url">QnS</a></h3>

                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#url"><img src="{{asset('/assets/images/a3.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                    </div>
                                    <div class="column text-center">
                                        <h3 class="name-pos"><a href="#url">QnS</a></h3>

                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#url"><img src="{{asset('/assets/images/a3.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                    </div>
                                    <div class="column text-center">
                                        <h3 class="name-pos"><a href="#url">QnS</a></h3>

                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#url"><img src="{{asset('/assets/images/a3.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                    </div>
                                    <div class="column text-center">
                                        <h3 class="name-pos"><a href="#url">QnS</a></h3>
                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <div class="d-grid team-info">
                                    <div class="column position-relative">
                                        <a href="#url"><img src="{{asset('/assets/images/a3.jpg')}}" alt="" class="img-fluid rounded team-image" /></a>
                                    </div>
                                    <div class="column text-center">
                                        <h3 class="name-pos"><a href="#url">Chris QnS</a></h3>

                                        <div class="social">
                                            <a href="#facebook" class="facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                            <a href="#twitter" class="twitter"><span class="fa fa-youtube" aria-hidden="true"></span></a>
                                            <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </section>
        <!--//grids-sec1-->
        <!--/testimonials-->
        <section class="w3l-clients" id="clients">
            <!-- /grids -->
            <div class="cusrtomer-layout py-5">
                <div class="container py-lg-4">
                    <div class="headerhny-title">
                        <h3 class="hny-title">They Said What Us?</h3>
                    </div>
                    <!-- /grids -->
                    <div class="testimonial-width">
                        <div class="owl-clients owl-carousel owl-theme mb-lg-5">
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q>Interested ! Gut Chop. Amazing</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="{{asset('/assets/images/a3.jpg.jpg')}}" class="img-fluid" alt="/">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Johnson smith</h3>
                                                <p class="indentity">Washington</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q>Gut Chopppppp!.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="{{asset('/assets/images/a1.jpg')}}" class="img-fluid" alt="/">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Alexander leo</h3>
                                                <p class="indentity">Washington</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q>good job! Amazing.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="{{asset('assets/images/a4.jpg')}}" class="img-fluid" alt="/">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Roy Linderson</h3>
                                                <p class="indentity">Washington</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q>Very Funny! Good.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="{{asset('/assets/images/a1.jpg.jpg')}}" class="img-fluid" alt="/">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Mike Thyson</h3>
                                                <p class="indentity">Washington</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q>Happy !.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="{{asset('/assets/images/a4.jpg.jpg')}}" class="img-fluid" alt="/">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Laura gill</h3>
                                                <p class="indentity">Washington</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-content">
                                    <div class="testimonial">
                                        <blockquote>
                                            <q>Good luck!.</q>
                                        </blockquote>
                                        <div class="testi-des">
                                            <div class="test-img"><img src="{{asset('/assets/images/a1.jpg.jpg')}}" class="img-fluid" alt="/">
                                            </div>
                                            <div class="peopl align-self">
                                                <h3>Smith Johnson</h3>
                                                <p class="indentity">Washington</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /grids -->
            </div>
            <!-- //grids -->
        </section>
        <!--//testimonials-->
        <!--grids-sec2-->
        <section class="w3l-grids">
            <div class="grids-main py-5">
                <div class="container py-lg-4">
                    <div class="headerhny-title">
                        <div class="w3l-title-grids">
                            <div class="headerhny-left">
                                <h3 class="hny-title">New Releases</h3>
                            </div>
                            <div class="headerhny-right text-lg-right">
                                <h4><a class="show-title" href="{{route('showListFilm')}}">Show all</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="owl-three owl-carousel owl-theme">
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('kind')}}">
                                    <figure>
                                        <img class="img-fluid" src="{{asset('/assets/images/m12.jpg')}}" alt="">
                                    </figure>
                                    <div class="box-content">
                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

											</span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd" href="{{route('kind')}}">The Super Warrior</a></h3>
                            <p>3000$</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                            </div>

                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('kind')}}">
                                    <figure>
                                        <img class="img-fluid" src="{{asset('/assets/images/m11.jpg')}}" alt="">
                                    </figure>
                                    <div class="box-content">

                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

											</span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd" href="{{route('kind')}}">Battle of Hades</a></h3>
                            <p>2987$</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                            </div>
                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('kind')}}">
                                    <figure>
                                        <img class="img-fluid" src="{{asset('/assets/images/m9.jpg')}}" alt="">
                                    </figure>
                                    <div class="box-content">

                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

											</span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd" href="{{route('kind')}}">Shark Hunter </a></h3>
                            <p>23452$</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                            </div>
                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('kind')}}">
                                    <figure>
                                        <img class="img-fluid" src="{{asset('/assets/images/m8.jpg')}}" alt="">
                                    </figure>
                                    <div class="box-content">

                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

											</span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd" href="{{route('kind')}}">Toy story 4</a></h3>
                            <p>2344$</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                            </div>

                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('kind')}}">
                                    <figure>
                                        <img class="img-fluid" src="{{asset('/assets/images/m1.jpg')}}" alt="">
                                    </figure>
                                    <div class="box-content">

                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

											</span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd" href="{{route('kind')}}">Monkey King</a></h3>
                            <p>42043$</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                            </div>
                        </div>
                        <div class="item vhny-grid">
                            <div class="box16">
                                <a href="{{route('kind')}}">
                                    <figure>
                                        <img class="img-fluid" src="{{asset('/assets/images/m2.jpg')}}" alt="">
                                    </figure>
                                    <div class="box-content">

                                        <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

											</span>

                                            <span class="post fa fa-heart text-right"></span>
                                        </h4>
                                    </div>
                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                            <h3> <a class="title-gd" href="{{route('kind')}}">Doremon Cartoon</a></h3>
                            <p>283476$</p>
                            <div class="button-center text-center mt-4">
                                <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--grids-sec2-->


        <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
        <!-- stats -->
        <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countup.js')}}"></script>
        <script>
            $('.counter').countUp();
        </script>
        <!-- //stats -->
        <!--/theme-change-->
        <script src="{{asset('assets/js/theme-change.js')}}"></script>
        <!-- //theme-change-->
        <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
        <!-- script for banner slider-->
        <script>
            $(document).ready(function () {
                $('.owl-team').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    responsiveClass: true,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items:2,
                            nav: false
                        },
                        480: {
                            items: 2,
                            nav: true
                        },
                        667: {
                            items: 3,
                            nav: true
                        },
                        1000: {
                            items:4,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <script>
            $(document).ready(function () {
                $('.owl-three').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    responsiveClass: true,
                    autoplay:true,
                    autoplayTimeout: 5000,
                    autoplaySpeed: 1000,
                    autoplayHoverPause: false,
                    responsive: {
                        0: {
                            items: 2,
                            nav: false
                        },
                        480: {
                            items: 2,
                            nav: true
                        },
                        667: {
                            items: 3,
                            nav: true
                        },
                        1000: {
                            items: 6,
                            nav: true
                        }
                    }
                })
            })
        </script>
        <!-- //script -->
        <!-- for tesimonials carousel slider -->
        <script>
            $(document).ready(function () {
                $(".owl-clients").owlCarousel({
                    loop: true,
                    margin:40,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items:1,
                            nav: true
                        },
                        736: {
                            items: 2,
                            nav: false
                        },
                        1000: {
                            items:3,
                            nav: true,
                            loop: false
                        }
                    }
                })
            })
        </script>
        <!-- //script -->
        <!-- script for owlcarousel -->
        <!-- disable body scroll which navbar is in active -->
        <script>
            $(function () {
                $('.navbar-toggler').click(function () {
                    $('body').toggleClass('noscroll');
                })
            });
        </script>
        <!-- disable body scroll which navbar is in active -->
    @endsection
