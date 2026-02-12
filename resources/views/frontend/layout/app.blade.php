@include('frontend.inc.header')

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>

    
    @include('frontend.inc.navbar')
    
    @yield('content')



    @include('frontend.inc.footer')


    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/jquery.min.js" defer></script>
    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/bootstrap.bundle.min.js"></script>
    @if(\Route::current()->getName() != 'home')<script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/fancybox.min.js"></script> @endif
    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/cursor-trail.min.js"></script>
    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/jquery.meanmenu.min.js"></script>
    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo url(''); ?>/public/frontend/assets/js/scrollmenu.js"></script>
    <script>

        $(".banner-carousel ").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: false,
            smartSpeed: 1000,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1,
                },
                1000: {
                    items: 1,
                },
            },
        });


        $('.indian-slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 4000,
            video: true,
            autoplayHoverPause: true, // Stops autoplay
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });

        $('.course-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 4000,
            autoplayHoverPause: true, // Stops autoplay
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2.5,
                },
                1000: {
                    items: 3.5,
                },
            },
        });


        $('.career-opertunity-slide ').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayTimeout: 4000,
            autoplayHoverPause: true, // Stops autoplay
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });


        $('.row-slider1').owlCarousel({
            center:true,
            loop: true,
            margin: 20,
            nav: false,
             autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 6000,
            autoplaySpeed: 6000,
            autoplayHoverPause: true,
            video: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },

        });

        $('.row-slider2').owlCarousel({
                center:true,
            loop: true,
            margin: 20,
            nav: false,
            rtl:true,
               autoplay: true,
            slideTransition: 'linear',
            autoplayTimeout: 6000,
            autoplaySpeed: 6000,
            autoplayHoverPause: true,
            video: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },

        });



        $('.testi-slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
            autoplayHoverPause: true, // Stops autoplay
            autoplayTimeout: 4000,
            video: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 4,
                },
            },

        });
        


        // Load the YouTube API
        let tag = document.createElement("script");
        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // Array to store YouTube player instances
        let players = [];

        function onYouTubeIframeAPIReady() {
            // Initialize YouTube players for each iframe
            $(".youtube-video").each(function (index) {
                players[index] = new YT.Player(this, {
                    events: {
                        onStateChange: onPlayerStateChange, // Set the state change event listener
                    },
                });
            });
        }

        // Function to handle video play/pause events
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                // Stop Owl Carousel autoplay
                $(".owl-carousel").trigger("stop.owl.autoplay");

                // Pause all other videos
                players.forEach((player) => {
                    if (player !== event.target) {
                        player.pauseVideo();
                    }
                });
            } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
                // Resume Owl Carousel autoplay when all videos are paused
                let isAnyPlaying = players.some((player) => player.getPlayerState() === YT.PlayerState.PLAYING);
                if (!isAnyPlaying) {
                    $(".owl-carousel").trigger("play.owl.autoplay");
                }
            }
        }



        $(".owl-prev").html('<i class="fa-solid fa-angle-left"></i>');
        $(".owl-next").html('<i class="fa-solid fa-angle-right"></i>');

        $(".banner-carousel .owl-prev").html('<i class="bi bi-chevron-left"></i>');
        $(".banner-carousel .owl-next").html('<i class="bi bi-chevron-right"></i>');

    </script>


    <script>
        $(document).ready(function () {
            var scroll_pos = 0;
            $(document).scroll(function () {
                scroll_pos = $(this).scrollTop();
                if (scroll_pos >= 50) {
                    $('.main-fixed-header').addClass("fixed");
                } else {
                    $('.main-fixed-header').removeClass("fixed");
                }
            });
        });
    </script>

    <script>
        $('.mean-menulist').meanmenu({
            meanMenuContainer: '.mobile-menu',

        });
    </script>


    <script>
        function visible(partial) {
            var $t = partial,
                $w = jQuery(window),
                viewTop = $w.scrollTop(),
                viewBottom = viewTop + $w.height(),
                _top = $t.offset().top,
                _bottom = _top + $t.height(),
                compareTop = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;

            return compareBottom <= viewBottom && compareTop >= viewTop && $t.is(":visible");
        }

        $(window).scroll(function () {
            if (visible($(".count"))) {
                if ($(".count").hasClass("counter-loaded")) return;
                $(".count").addClass("counter-loaded");

                $(".count").each(function () {
                    var $this = $(this);
                    jQuery({ Counter: 0 }).animate(
                        { Counter: $this.text() },
                        {
                            duration: 3000,
                            easing: "swing",
                            step: function () {
                                $this.text(Math.ceil(this.Counter));
                            },
                        }
                    );
                });
            }
        });
    </script>


    <script>
        $('.show-form').on('click', function () {
            $('.form-resol').toggleClass('clicked');
        });
    </script>


    <script>
        wow = new WOW(
            {
                boxClass: 'wow',      // default
                animateClass: 'animated', // default
                offset: 0,          // default
                mobile: true,       // default
                live: false        // default
            }
        )
        wow.init();
    </script>

    <script>

        var words = ['FASTER', 'BETTER', 'BIGGER'],
            part,
            i = 0,
            offset = 0,
            len = words.length,
            forwards = true,
            skip_count = 0,
            skip_delay = 15,
            speed = 90;
        var wordflick = function () {
            setInterval(function () {
                if (forwards) {
                    if (offset >= words[i].length) {
                        ++skip_count;
                        if (skip_count == skip_delay) {
                            forwards = false;
                            skip_count = 0;
                        }
                    }
                }
                else {
                    if (offset == 0) {
                        forwards = true;
                        i++;
                        offset = 0;
                        if (i >= len) {
                            i = 0;
                        }
                    }
                }
                part = words[i].substr(0, offset);
                if (skip_count == 0) {
                    if (forwards) {
                        offset++;
                    }
                    else {
                        offset--;
                    }
                }
                $('.word').text(part);
            }, speed);
        };

        $(document).ready(function () {
            wordflick();
        });

    </script>
    
    <!-- Bootstrap and JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
    myModal.show();
  });
</script>

<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>


</body>

</html>