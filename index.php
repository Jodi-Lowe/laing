<?php include  'header.php' ?>

      <div class="_wrapper _hero-div">
            <div class="_hero">
              <div class="_image">
                  <img src="assets/images/background-home.jpg">
              </div>
                <h1>Howard Laing - <span style="color: #28B78D;">Graphic designer</span></h1>
                <p><input onClick="window.location.href='index.php'" type="button" class="button-primary button" value="view Portfolio"></p>
            </div>
        </div>
        <footer>
        <div class="_wrap">
          <div class="_row">
              <div class="_col-33">

              </div>

              <div class="_col-33">
                  <ul class="social-icons">
                      <li><a href="" class="social-icon" target="_blank" title="Facebook"> <i class="fa fa-facebook"></i></a></li>
                      <li><a href="" class="social-icon" target="_blank" title="Twitter"> <i class="fa fa-twitter"></i></a></li>
                      <li><a href="" class="social-icon" target="_blank" title="Instagram"> <i class="fa fa-instagram"></i></a></li>
                      <li><a href="" class="social-icon" target="_blank" title="Google plus"> <i class="fa fa-google-plus"></i></a></li>
                      <li><a href="" class="social-icon" target="_blank" title="Pinterest"> <i class="fa fa-pinterest"></i></a></li>
                  </ul>
              </div>
              <div class="_col-33">
                  <ul>
                      <li><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;default@gmail.com</li>
                      <li><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;555-0011-0101</li>
                  </ul>
              </div>
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
