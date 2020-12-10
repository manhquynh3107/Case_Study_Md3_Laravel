@extends('frontend.app')
@section('content')
    <!-- main-slider -->
    <section class="w3l-main-slider position-relative" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2">
                            <div class="banner-info">
                                <h3>Latest Movie Trailers</h3>
                                <p>Tận hưởng cảm giác thú vị cùng những thức phim.<span class="over-para">Bạn sẽ đồng hành cùng chúng tôi chứ?</span>
                                </p>
                                <a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/358205676" allow="autoplay; fullscreen"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2">
                            <div class="banner-info">
                                <h3>Latest Online Movies</h3>
                                <p>Trailer 2<span class="over-para"> Consequuntur hic odio
									voluptatem tenetur consequatur.</span></p>
                                <a href="#small-dialog2" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/395376850" allow="autoplay; fullscreen"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2">
                            <div class="banner-info">
                                <h3>Latest Movie Trailers</h3>
                                <p>Trailer 3.<span class="over-para"> Consequuntur hic odio
									voluptatem tenetur consequatur.</span></p>
                                <a href="#small-dialog3" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/484744060" allow="autoplay; fullscreen"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top3 bg bg2">
                            <div class="banner-info">
                                <h3>Latest Online Movies</h3>
                                <p>Trailer 4.<span class="over-para"> ...</span></p>
                                <a href="#small-dialog4" class="popup-with-zoom-anim play-view1">
									<span class="video-play-icon">
										<span class="fa fa-play"></span>
									</span>
                                    <h6>Watch Trailer</h6>
                                </a>
                                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                                <div id="small-dialog4" class="zoom-anim-dialog mfp-hide">
                                    <iframe src="https://player.vimeo.com/video/323491174" allow="autoplay; fullscreen"
                                            allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner-slider-->
    <!-- main-slider -->
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Popular Movies</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="{{asset('/kind')}}">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="{{asset('/kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/m7.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Larva Cartoon</h3>
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
                            <a href="{{asset('/kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/m3.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Fast and Furious</h3>
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
                            <a href="{{asset('/kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/m4.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">White Snake</h3>
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
                            <a href="{{asset('/kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/m5.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">HummingBird</h3>
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
    <!--grids-sec2-->
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Coming Soon</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="{{route('kind')}}">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="owl-three owl-carousel owl-theme">
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="{{asset('/kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/n1.jpg')}}" alt="">
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
                        <h3><a class="title-gd" href="{{asset('/kind')}}">No Time to Die</a></h3>
                        <p>Comment</p>
                        <div class="button-center text-center mt-4">
                            <a href="{{asset('/kind')}}" class="btn watch-button">Watch now</a>
                        </div>

                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="{{asset('/kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/n2.jpg')}}" alt="">
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
                        <h3><a class="title-gd" href="{{route('kind')}}">Mulan</a></h3>
                        <p>Comment</p>
                        <div class="button-center text-center mt-4">
                            <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="{{route('kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/n3.jpg')}}" alt="">
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
                        <h3><a class="title-gd" href="{{route('kind')}}">Free Guy</a></h3>
                        <p>Comment</p>
                        <div class="button-center text-center mt-4">
                            <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="{{route('kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/n4.jpg')}}" alt="">
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
                        <h3><a class="title-gd" href="{{route('kind')}}">My Spy</a></h3>
                        <p>Comment</p>
                        <div class="button-center text-center mt-4">
                            <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                        </div>

                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="{{route('kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/n5.jpg')}}" alt="">
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
                        <h3><a class="title-gd" href="{{route('kind')}}">Scoob</a></h3>
                        <p>Comment</p>
                        <div class="button-center text-center mt-4">
                            <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                        </div>
                    </div>
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="{{route('kind')}}">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/n6.jpg')}}" alt="">
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
                        <h3><a class="title-gd" href="{{route('kind')}}">Downhill</a></h3>
                        <p>Comment</p>
                        <div class="button-center text-center mt-4">
                            <a href="{{route('kind')}}" class="btn watch-button">Watch now</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--grids-sec2-->
    <!--mid-slider -->
    <section class="w3l-mid-slider position-relative">
        <div class="companies20-content">
            <div class="owl-mid owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info mid-view bg bg2">
                            <div class="container">
                                <div class="mid-info">
                                    <span class="sub-text">Comedy</span>
                                    <h3>Jumanji: The Next Level</h3>
                                    <p>2019 ‧ Comedy/Action ‧ 2h 3m</p>
                                    <a class="watch" href="{{route('comingSoon')}}"><span class="fa fa-play"
                                                                                    aria-hidden="true"></span>
                                        Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info mid-view mid-top1 bg bg2">
                            <div class="container">
                                <div class="mid-info">
                                    <span class="sub-text">Adventure</span>
                                    <h3>Dolittle</h3>
                                    <p>2020 ‧ Family/Adventure ‧ 1h 41m</p>
                                    <a class="watch" href="{{route('comingSoon')}}"><span class="fa fa-play"
                                                                                    aria-hidden="true"></span>
                                        Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info mid-view mid-top2 bg bg2">
                            <div class="container">
                                <div class="mid-info">
                                    <span class="sub-text">Action</span>
                                    <h3>Bad Boys for Life</h3>
                                    <p>2020 ‧ Comedy/Action ‧ 2h 4m</p>
                                    <a class="watch" href="{{route('comingSoon')}}"><span class="fa fa-play"
                                                                                          aria-hidden="true"></span>
                                        Watch Trailer</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <!-- //mid-slider-->
    <!--/tabs-->
    <section class="w3l-albums py-5" id="projects">
        <div class="container py-lg-4">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <!--Horizontal Tab-->
                    <div id="parentHorizontalTab">
                        <ul class="resp-tabs-list hor_1">
                            <li>Recent Movies</li>
                            <li>Popular Movies</li>
                            <li>Trend Movies</li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container hor_1">
                            <div class="albums-content">
                                <div class="row">
                                    <!--/set1-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}">

                                                    <img src="{{asset('assets/images/m6.jpg')}}" class="img-fluid"
                                                         alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Unleash</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m5.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">HummingBird</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m4.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">White Snake</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--//set1-->
                                    <!--/set1-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m1.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Monkey King</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m2.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Doremon
                                                    Cartoon</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m3.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Fast and
                                                    Furious</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--//set1-->
                                    <!--/set1-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/n1.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">No Time to Die</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/n2.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Mulan</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/n3.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Free Guy</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--//set1-->
                                </div>
                            </div>
                            <div class="albums-content">
                                <div class="row">
                                    <!--/set1-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m1.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>China</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Monkey King</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m2.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Doremon
                                                    Cartoon</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m3.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Fast and
                                                    Furious</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--//set1-->
                                    <!--/set2-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m7.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Larva 2</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m8.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Toy Story 4</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m9.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Shark Hunter</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--//set2-->
                                </div>
                            </div>
                            <div class="albums-content">
                                <div class="row">
                                    <!--/set3-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m7.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Frozen 2</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m8.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Toy Story 4</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{asset('assets/images/m9.jpg')}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Joker</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--//set3-->
                                    <!--/set3-->
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img src="{{'assets/images/m10.jpg'}}"
                                                                                 class="img-fluid"
                                                                                 alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">Alita</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img
                                                        src="{{asset('assets/images/m11.jpg')}}" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">The Lego</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 new-relise-gd mt-lg-0 mt-0">
                                        <div class="slider-info">
                                            <div class="img-circle">
                                                <a href="{{route('kind')}}"><img
                                                        src="{{asset('assets/images/m12.jpg')}}" class="img-fluid"
                                                        alt="author image">
                                                    <div class="overlay-icon">

                                                        <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="message">
                                                <p>English</p>
                                                <a class="author-book-title" href="{{route('kind')}}">The Hustle</a>
                                                <h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

													</span>

                                                    <span class="post fa fa-heart text-right"></span>
                                                </h4>
                                            </div>
                                        </div>

                                    </div>
                                    <!--//set3-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //tabs-->


    <!-- responsive tabs -->
    <script src="{{'assets/js/jquery-1.9.1.min.js'}}"></script>
    <script src="{{asset('assets/js/easyResponsiveTabs.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            //Horizontal Tab
            $('#parentHorizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //responsive tabs -->

    <!--/theme-change-->
    <script src="{{'assets/js/theme-change.js'}}"></script>
    <!-- //theme-change-->
    <script src="{{'assets/js/owl.carousel.js'}}"></script>
    <!-- script for banner slider-->
    <script>
        $(document).ready(function () {
            $('.owl-one').owlCarousel({
                stagePadding: 280,
                loop: true,
                margin: 20,
                nav: true,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        stagePadding: 40,
                        nav: false
                    },
                    480: {
                        items: 1,
                        stagePadding: 60,
                        nav: true
                    },
                    667: {
                        items: 1,
                        stagePadding: 80,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <script>
        $(document).ready(function () {
            $('.owl-three').owlCarousel({
                loop: true,
                margin: 20,
                nav: false,
                responsiveClass: true,
                autoplay: true,
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
                        items: 5,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //script -->
    <!-- /mid-script -->
    <script>
        $(document).ready(function () {
            $('.owl-mid').owlCarousel({
                loop: true,
                margin: 0,
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
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
    </script>
    <!-- //mid-script -->

    <!-- script for owlcarousel -->
    <!-- Template JavaScript -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!--//-->
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
