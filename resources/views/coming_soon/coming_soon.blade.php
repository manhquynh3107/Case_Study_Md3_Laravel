
<!DOCTYPE html>
<html>
<head>
    <title>Quỳnh Nghệ Sĩ</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="quynhnghesi" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="{{asset('assets/css/css_comingSoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/css_comingSoon/bigvideo.css')}}"><!-- Video-CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/css_comingSoon/jquery.countdown.css')}}"></link>	<!-- Countdown-CSS -->
    <link  href="{{asset('assets/css/css_comingSoon/font-awesome.css')}}" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
    <!-- css files -->
    <link href="//fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext" rel="stylesheet">
    <!-- js -->
    <!-- //js -->
</head>

<body>

<!-- main -->
<!-- BigVideo Dependencies -->
<script src="{{asset('assets/js/js_comingSoon/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/js_comingSoon/video.js')}}"></script>
<!-- BigVideo -->
<script src="{{asset('assets/js/js_comingSoon/bigvideo.js')}}"></script>
<!-- Demo -->

<div class="center-container">

    <div class="w3ls_banner_info">
        <div class="toggle-btn">
            <label><input type="checkbox" checked="" id="video-toggle"> Video Play</label>
        </div>
        <div class="clear"></div>
        <h1>Movie Is Coming Soon</h1>
        <p>BE READY, WE ARE LAUNCHING SOON.</p>

        <!--timer-->
        <div class="examples">
            <div class="simply-countdown-losange" id="simply-countdown-losange"></div>
            <div class="clear"></div>
        </div>
        <!--//timer-->
        <ul class="top-links-w3">
            <li><a href="https://www.facebook.com/quynhnghesi002"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCXzhS2cCgB9TtF68ss8t8Og?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://myaccount.google.com/profile"><i class="fa fa-google-plus"></i></a></li>
        </ul>
        <div class="newsletter-agile">
            <p>Send us Your Mail, we'll make sure You Never Miss a Thing!</p>
            <form action="#" method="post">
                <input type="email" name="email" size="30" required="" placeholder="Please fill your email">
                <input type="submit" value="Subscribe">
                <div class="clear"></div>
            </form>
        </div>

        <div class="newsletter-agile">
            Back to <a href="{{route('home')}}">Home</a>
        </div>


        <!--footer-->
        <div class="footer-w3">
            <p>Mọi Thắc Mắc Vui Lòng Liên Hệ <a href="https://www.facebook.com/quynhnghesi002/">Quỳnh Nghệ Sĩ</a></p>
        </div>
        <!--//footer-->

    </div>
</div>
<!-- //main -->


<!--scripts-->
<!-- Countdown-Timer-JavaScript -->
<script src="{{asset('assets/js/js_comingSoon/simplyCountdown.js')}}"></script>
<script>
    var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    // inline example
    simplyCountdown('.simply-countdown-inline', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        inline: true
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
<!-- //Countdown-Timer-JavaScript -->
<!--//scripts-->

<script>
    var BV;
    $(function() {

        // initialize BigVideo
        BV = new $.BigVideo();
        BV.init();
        BV.show('{{asset('assets/video/axl-trailer-1_h720p.mp4')}}',{ambient:true});

        // Playlist button click starts video
        $('.playlist-btn').on('click', function(e) {
            e.preventDefault();
            BV.show($(this).attr('href'));
        })

        // Video Play/Pause toggle
        $('#video-toggle').on('click', function(e) {
            if (this.checked)   BV.getPlayer().play();
            else                BV.getPlayer().pause();
        })

        // set up navigation
        $('.nav-link').on('click',function(e){
            e.preventDefault();
            scrollToSection($(this).attr('href'));
        })

        function scrollToSection(id) {
            $('body,html').animate({scrollTop: $(id).offset().top - 50}, 400);
        }
    });
</script>
</body>
</html>
