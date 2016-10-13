<!DOCTYPE HTML>
<html>
    <head>
        <title>Prueba CreazionesSoftware | Home :: w3layouts</title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
         <!-- Custom Theme files -->
        <link href="{{ asset('css/styles.css') }}" rel='stylesheet' type='text/css' />
         <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

         <!---- start-smoth-scrolling---->

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
         <!---- start-smoth-scrolling---->
        <!----webfonts--->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic,700italic|Oswald:400,300' rel='stylesheet' type='text/css'>
        <!---//webfonts--->
        <!----start-top-nav-script---->
        <script>
            $(function() {
                var pull        = $('#pull');
                    menu        = $('nav ul');
                    menuHeight  = menu.height();
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
                $(window).resize(function(){
                    var w = $(window).width();
                    if(w > 320 && menu.is(':hidden')) {
                        menu.removeAttr('style');
                    }
                });
            });
        </script>
        <!----//End-top-nav-script---->
        <script type="text/javascript" src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
        <script type="text/javascript">
            $(function() {

                var filterList = {

                    init : function() {

                        // MixItUp plugin
                        // http://mixitup.io
                        $('#portfoliolist').mixitup({
                            targetSelector : '.portfolio',
                            filterSelector : '.filter',
                            effects : ['fade'],
                            easing : 'snap',
                            // call the hover effect
                            onMixEnd : filterList.hoverEffect()
                        });

                    },

                    hoverEffect : function() {

                        // Simple parallax effect
                        $('#portfoliolist .portfolio').hover(function() {
                            $(this).find('.label').stop().animate({
                                bottom : 0
                            }, 200, 'easeOutQuad');
                            $(this).find('img').stop().animate({
                                top : -30
                            }, 500, 'easeOutQuad');
                        }, function() {
                            $(this).find('.label').stop().animate({
                                bottom : -40
                            }, 200, 'easeInQuad');
                            $(this).find('img').stop().animate({
                                top : 0
                            }, 300, 'easeOutQuad');
                        });

                    }
                };

                // Run the show!
                filterList.init();

            });
        </script>
    </head>
    <body>

            <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
             <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                  // Slideshow 4
                  $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                      $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                      $('.events').append("<li>after event fired.</li>");
                    }
                  });

                });
              </script>
            <!----//End-slider-script---->
            <!-- Slideshow 4 -->
                <div  id="top" class="callbacks_container">
                  <ul class="rslides" id="slider4">
                    <li>
                       <img src="images/bg.jpg" alt="">
                      <div class="caption">
                        <div class="slide-text-info">
                            <h1>Ing Johan Salazar</h1>
                            <label>Prueba desarrollo software<br>laravel 5.2</label>
                            <div class="learn-button">
                               <a class="slide-btn" href="{{ url('/login') }}">Entrar</a>
                               <a class="slide-btn" href="{{ url('/register') }}">Registrar</a>
                            </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <img src="images/bg.jpg" alt="">
                      <div class="caption">
                        <div class="slide-text-info">
                            <h1>Creazion Software</h1>
                            <label>Empresa desarrollo de software<br></label>
                            <div class="learn-button">
                                <a class="slide-btn" href="{{ url('/login') }}">Entrar</a>
                               <a class="slide-btn" href="{{ url('/register') }}">Registrar</a>

                            </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
