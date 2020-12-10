@extends('frontend.app')
@section('content')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="{{asset('/home')}}">Home</a> » <span class="breadcrumb_last" aria-current="page">Kind</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->

    <!--/genre -->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-4">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <h3 class="hny-title">Popular Movies</h3>
                </div>
                <div class="owl-four owl-carousel owl-theme">
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/banner1.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Rocketman</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="box16 mt-4">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/banner2.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Frozen 2</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/banner3.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Doctor Sleep</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="box16 mt-4">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/banner4.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Toy story 4</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/banner1.jpg')}}" alt="">

                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Rocketman</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                        <div class="box16 mt-4">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/banner2.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Frozen 2</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//grids-sec1-->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Latest Movies</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="{{asset('/kind')}}">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m7.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Frozen 2</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m3.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Knives Out</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m4.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Little Women</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m5.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Jumanji</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>

                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m1.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Rocketman</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m2.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Doctor Sleep</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m6.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Long Shot</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m9.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Joker</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m11.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">The Lego</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m10.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Alita</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m12.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Hustle</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m8.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Toy Story 4</h3>
                                    <h4> <span class="post"><span class="fa fa-clock-o"> </span> 1 Hr 4min

										</span>

                                        <span class="post fa fa-heart text-right"></span>
                                    </h4>
                                </div>
                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="button-center text-center mt-3">
                <a href="{{route('showListFilm')}}" class="btn view-button">View all <span class="fa fa-angle-double-right ml-2"
                                                                   aria-hidden="true"></span></a>
            </div>

        </div>
    </section>
    <!--//grids-sec1-->


    <!--grids-sec2-->
    <section class="w3l-grids">
        <div class="grids-main py-4">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <h3 class="hny-title">Must to watch</h3>
                </div>
                <div class="owl-two owl-carousel owl-theme">
                    <div class="item">
                        <div class="two-gridshny-grids">
                            <div class="two-gridshny-left">
                                <div class="box16 mb-4">
                                    <a href="#">
                                        <figure>
                                            <img class="img-fluid" src="{{asset('/assets/images/1.jpg')}}" alt="">
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
                            </div>
                            <div class="two-gridshny-right">
                                <h3> <a class="title-gd mt-0" href="#">That’s what I want to show you
                                        how to do here.</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="two-gridshny-grids">
                            <div class="two-gridshny-left">
                                <div class="box16 mb-4">
                                    <a href="#">
                                        <figure>
                                            <img class="img-fluid" src="{{asset('/assets/images/2.jpg')}}" alt="">
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
                            </div>
                            <div class="two-gridshny-right">
                                <h3> <a class="title-gd mt-0" href="#">That’s what I want to show you
                                        how to do here.</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="two-gridshny-grids">
                            <div class="two-gridshny-left">
                                <div class="box16 mb-4">
                                    <a href="#">
                                        <figure>
                                            <img class="img-fluid" src="{{asset('/assets/images/3.jpg')}}" alt="">
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
                            </div>
                            <div class="two-gridshny-right">
                                <h3> <a class="title-gd mt-0" href="#">That’s what I want to show you
                                        how to do here.</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="two-gridshny-grids">
                            <div class="two-gridshny-left">
                                <div class="box16 mb-4">
                                    <a href="#">
                                        <figure>
                                            <img class="img-fluid" src="{{asset('/assets/images/4.jpg')}}" alt="">
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
                            </div>
                            <div class="two-gridshny-right">
                                <h3> <a class="title-gd mt-0" href="#">That’s what I want to show you
                                        how to do here.</a></h3>

                            </div>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="two-gridshny-grids">
                            <div class="two-gridshny-left">
                                <div class="box16 mb-4">
                                    <a href="#">
                                        <figure>
                                            <img class="img-fluid" src="{{asset('/assets/images/5.jpg')}}" alt="">
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
                            </div>
                            <div class="two-gridshny-right">
                                <h3> <a class="title-gd mt-0" href="#">That’s what I want to show you
                                        how to do here.</a></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--grids-sec2-->
    <!--//genre -->

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <!--/theme-change-->
    <script src="{{asset('assets/js/theme-change.js')}}"></script>
    <!-- //theme-change-->
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('.owl-four').owlCarousel({
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
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 2,
                        nav: true
                    },
                    667: {
                        items: 2,
                        nav: true
                    },
                    1000: {
                        items: 2,
                        nav: true
                    }
                }
            })
        })
    </script>
    <script>
        $(document).ready(function () {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 40,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 2,
                        nav: true
                    },
                    667: {
                        items: 2,
                        margin: 20,
                        nav: true
                    },
                    1000: {
                        items: 3,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
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
