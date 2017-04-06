<!DOCTYPE html>
<html lang="en-US">
<head>
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <title>Howard Laing - about</title>
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.6.1/css/font-awesome.min.css">
        <link type="text/css" rel="stylesheet" href="lightGallery-master/dist/css/lightgallery.css" />
        <link rel="stylesheet" href="/slider/slideshow/dist/css/unslider.css">
        <link rel="stylesheet" href="/slider/slideshow/dist/css/unslider-dots.css">
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="hovercss/css/hover-min.css">
        <link rel="stylesheet" href="animate/animate.min.css">
        <link rel="stylesheet" href="style.css">
		<link rel="shortcut icon" href="http://livefromjamaica.com/Jodi/images/favicon-16.ico">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");
        });
	   </script>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <header>
            <div class="row">
                <div class="col_4">
                    <a href="index.html"><img class="logo" src="images/logo.png"></a>
                    <img class="menu-icon" src="images/menu_icon.png">
                </div>
                <div class="col_8">
                    <nav id="main-menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div id="hero-div" class="wrapper flexGRID">
            <div class="col_12 hero hdr2">    
        <!------------ABOUT------------------->
                <section id="about">
                    <h4 class="widget-title">About</h4>
                    <div class="row">
                        <div class="col_6">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                        <div class="col_6 last img2">
                            <img style="padding-top: 10%;" class="images" src="images/logo.png">
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <footer>
        <div class="row"> 
            <div class="col_4">
    
            </div>
            
            <div class="col_4 last">
                <ul class="social-icons">
                    <li><a href="" class="social-icon" target="_blank" title="Facebook"> <i class="fa fa-facebook"></i></a></li>
                    <li><a href="" class="social-icon" target="_blank" title="Twitter"> <i class="fa fa-twitter"></i></a></li>
                    <li><a href="" class="social-icon" target="_blank" title="Instagram"> <i class="fa fa-instagram"></i></a></li>
                    <li><a href="" class="social-icon" target="_blank" title="Google plus"> <i class="fa fa-google-plus"></i></a></li>
                    <li><a href="" class="social-icon" target="_blank" title="Pinterest"> <i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div> 
            <div class="col_4 last">
                <ul>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;default@gmail.com</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;555-0011-0101</li>
                </ul>
            </div>
        </div>  
        <div class="col_12 copyright">
            <p>&copy;Howard Laing 2016. All rights reserved.</p>    
        </div>    
      </footer>
    <!------- Load jQuery--------->
        <script src="main-js/jquery-2.2.3.js"></script>
    <!-------Gallery JS------------> 
        <script src="lightGallery-master/dist/js/lightgallery.js"></script>
        <script src="lightGallery-master/dist/js/lg-thumbnail.min.js"></script>
        <script src="lightGallery-master/dist/js/lg-fullscreen.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#lightgallery").lightGallery(); 
            });
        </script>
        <!-----HEADER COLOR CHANGE-->
        <script>
            $(window).scroll(function() {
            if ($(this).scrollTop() > 10){  
                $('header').addClass("scroll");
              }
              else{
                $('header').removeClass("scroll");
              }
            });
        </script>
        <!------MENU TOGGLE------->
        <script>
            $(document).ready(function(){
                $('.menu-icon').on('click', function(){
                    $('#main-menu ul').slideToggle();
                });             
            });
        </script>
        <!---ACTIVE LINK----->
        <script>
            jQuery(document).ready(function($){
          // Get current path and find target link
          var path = window.location.pathname.split("/").pop();

          // Account for home page with empty path
          if ( path == '' ) {
            path = 'index.html';
          }
      
          var target = $('nav li a[href="'+path+'"]');
          // Add active class to target link
          target.addClass('active');
        });
        </script>
        <!-------ANIMATED COUNTER---------->
        <script>
            $(document).ready(function(){
               $('.count').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 20000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }); 
            });
        </script>
        <!------WHAT WE DO ANIMATION----------------->    
        <script>
            var animateName= "animated fadeInUp";
            var animateEnd= "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
            $(document).ready(function(){
               $('#').addClass(animateName).one(animateEnd, function(){
                        $('#').removeClass(animateName); 
               });
                });                
        </script>
        <script>
           tiles = $("#what-we-do #services").fadeTo(0, 0);

            $(window).scroll(function(d,h) {
                tiles.each(function(i) {
                    a = $(this).offset().top + $(this).height();
                    b = $(window).scrollTop() + $(window).height();
                    if (a < b) $(this).addClass('animated fadeInUp');
                });
            });
        </script>
        <!-----BACK TO TOP-------->
        <script>
            $(document).ready(function() {
                var offset=250, // At what pixels show Back to Top Button
                scrollDuration=300; // Duration of scrolling to top
                    $(window).scroll(function() {
                    if ($(this).scrollTop() > offset) {
                            $('.top').fadeIn(500); // Time(in Milliseconds) of appearing of the Button when scrolling down.
                            } else {
                    $('.top').fadeOut(500); // Time(in Milliseconds) of disappearing of Button when scrolling up.
                    }
                });

            // Smooth animation when scrolling
            $('.top').click(function(event) {
            event.preventDefault();
                    $('html, body').animate({
                    scrollTop: 0}, scrollDuration);
                        })
            });
        </script>
    </body>
<div class="se-pre-con"></div>
</html>