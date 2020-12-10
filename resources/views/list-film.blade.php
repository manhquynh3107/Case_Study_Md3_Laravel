@extends('frontend.app')
@section('content')

    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <div class="w3l-title-grids">
                        <div class="headerhny-left">
                            <h3 class="hny-title">Interested Movies</h3>
                        </div>
                        <div class="headerhny-right text-lg-right">
                            <h4><a class="show-title" href="{{asset('/kind')}}">Show all</a></h4>
                        </div>
                    </div>
                </div>
                <div class="w3l-populohny-grids">
                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#small-dialog1" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m7.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog1" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/eQTej6l2QUI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
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
                        <div class="box16 mb-0">
                            <a href="#small-dialog2" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m3.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sko6xJOTUqo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">Fast And Furious</h3>
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
                            <a href="#small-dialog3" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m4.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog3" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/b8IRP-M-KP4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">The Legend Of The White Snake</h3>
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
                            <a href="#small-dialog4" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m5.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog4" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Y6XdqogO6eI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
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

                    <div class="item vhny-grid">
                        <div class="box16 mb-0">
                            <a href="#small-dialog" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m1.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/B4Sa7kP4WkE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">The Monkey King</h3>
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
                            <a href="#small-dialog5" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m2.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog5" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/QEDf3G6FHNc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">Doremon Long Story</h3>
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
                            <a href="#small-dialog6" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m6.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog6" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vjlEKmqytHA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">Unleash</h3>
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
                            <a href="#small-dialog11" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m9.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog11" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/J4LMTbF8x_A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
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
                            <a href="#small-dialog10" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m11.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog10" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/RbfjUjRdeLc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">The Battle Of Hades</h3>
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
                            <a href="#small-dialog9" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m10.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog9" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ehVB3PG4QcY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">Black Arena</h3>
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
                            <a href="#small-dialog8" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m12.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog8" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pj7otQ8YiRo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">Super Warrior</h3>
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
                            <a href="#small-dialog7" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('/assets/images/m8.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog7" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TRqhqqdd14Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
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


        </div>
    </section>
    <!--grids-sec1-->
    <section class="w3l-grids">
        <div class="grids-main py-4">
            <div class="container py-lg-4">
                <div class="headerhny-title">
                    <h3 class="hny-title">Top Movies</h3>
                </div>
                <div class="owl-four owl-carousel owl-theme">
                    <div class="item vhny-grid">
                        <div class="box16">
                            <a href="#small-dialog14" class="popup-with-zoom-anim play-view1">
                                <figure>
                                    <img class="img-fluid" src="{{asset('assets/images/one piece.jpg')}}" alt="">
                                </figure>
                                <div id="small-dialog14" class="zoom-anim-dialog mfp-hide">
                                    <iframe width="811" height="480" src="https://www.youtube.com/embed/PVdy7H2GsIg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="box-content">
                                    <h3 class="title">One Piece</h3>
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
                                    <img class="img-fluid" src="{{asset('/assets/images/shazam.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Shazam</h3>
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
                                    <img class="img-fluid" src="{{asset('assets/images/destroy_battle.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Destroy Battle</h3>
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
                                    <img class="img-fluid" src="{{asset('/assets/images/crocodile_death.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Crocodile Death</h3>
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
                                    <img class="img-fluid" src="{{asset('assets/images/blood_shot.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Blood Shot</h3>
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
                                    <img class="img-fluid" src="{{asset('/assets/images/terminator.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Terminator</h3>
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
                                    <img class="img-fluid" src="{{asset('assets/images/star_war.jpg')}}" alt="">
                                </figure>
                                <div class="box-content">
                                    <h3 class="title">Star War</h3>
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
                                    <img class="img-fluid" src="{{asset('/assets/images/')}}" alt="">
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <!--/theme-change-->
    <script src="{{asset('assets/js/theme-change.js')}}"></script>
    <!-- //theme-change-->
    <script src="{{asset('assets/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('assets/js/easyResponsiveTabs.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
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
