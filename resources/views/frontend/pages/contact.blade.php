@extends('frontend.app')
@section('content')
    <!--/breadcrumbs -->
    <div class="w3l-breadcrumbs">
        <nav id="breadcrumbs" class="breadcrumbs">
            <div class="container page-wrapper">
                <a href="{{asset('/home')}}">Home</a> » <span class="breadcrumb_last" aria-current="page">Contact</span>
            </div>
        </nav>
    </div>
    <!--//breadcrumbs -->

    <!-- contact1 -->
    <section class="w3l-contact-1">
        <div class="contacts-9 py-5">
            <div class="container py-lg-4">
                <div class="headerhny-title text-center">
                    <h4 class="sub-title text-center">Contact us</h4>
                    <h3 class="hny-title mb-0">Leave a Message</h3>
                    <p class="hny-title mb-lg-5 mb-4">If you have a question regarding our services, feel free to contact us using the form below.</p>
                </div>
                <div class="contact-view mt-lg-5 mt-4">
                    <div class="conhny-form-section">
                        <form action="mailto:manhquynh3107@gmail.com" method="post" enctype="text/plain">
                            <div class="form-grids">
                                <div class="form-input">
                                    <input type="text" name="w3lName" id="w3lName" placeholder="Enter your name *" required="" />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lSubject" id="w3lSubject" placeholder="Enter subject " required />
                                </div>
                                <div class="form-input">
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Enter your email *"
                                           required />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Enter your Phone Number *"
                                           required />
                                </div>
                            </div>
                            <div class="form-input mt-4">
							<textarea name="w3lMessage" id="w3lMessage" placeholder="Type your query here"
                                      required=""></textarea>
                            </div>
                            <div class="submithny text-right mt-4">
                                <button class="btn read-button">Submit Message</button>
                            </div>
                        </form>
                    </div>

                    <div class="d-grid contact-addres-inf mt-5 pt-lg-4">
                        <div class="contact-info-left d-grid">
                            <div class="contact-info">
                                <div class="icon">
                                    <span class="fa fa-location-arrow" aria-hidden="true"></span>
                                </div>
                                <div class="contact-details">
                                    <h4>Address:</h4>
                                    <p>Bac Son District Pho Yen Town Thai Nguyen City Viet Nam</p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                                <div class="contact-details">
                                    <h4>Phone:</h4>
                                    <p><a href="tel:0988 517 205">0988 517 205</a></p>
                                    <p><a href="tel:0988 517 205">0988 517 205</a></p>
                                </div>
                            </div>
                            <div class="contact-info">
                                <div class="icon">
                                    <span class="fa fa-envelope-open-o" aria-hidden="true"></span>
                                </div>
                                <div class="contact-details">
                                    <h4>Mail:</h4>
                                    <p><a href="mailto:manhquynh3107@gmail.com" class="email">manhquynh3107@gmail.com</a></p>
                                    <p><a href="mailto:manhquynh3107@gmail.com" class="email">manhquynh3107@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7426.870609269533!2d105.77375462485116!3d21.451429928733866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134e0210e5d17c5%3A0x4cbf3813b3b78e8c!2zQuG6r2MgU8ahbiwgUGjhu5UgWcOqbiwgVGjDoWkgTmd1ecOqbiwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1606811212042!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </section>
    <!-- /contact1 -->


    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <!-- Template JavaScript -->
    <!--/theme-change-->
    <script src="{{asset('assets/js/theme-change.js')}}"></script>
    <!-- //theme-change-->
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
