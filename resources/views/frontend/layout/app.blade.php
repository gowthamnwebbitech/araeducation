@include('frontend.inc.header')

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-chevron-up"></i></button>

    @include('frontend.inc.navbar')
    
    @yield('content')

    @include('frontend.inc.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?php echo url(''); ?>/public/frontend/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo url(''); ?>/public/frontend/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo url(''); ?>/public/frontend/assets/js/fancybox.min.js"></script>
    <script src="<?php echo url(''); ?>/public/frontend/assets/js/wow.min.js"></script>
    <script src="<?php echo url(''); ?>/public/frontend/assets/js/cursor-trail.min.js"></script>
    <script src="<?php echo url(''); ?>/public/frontend/assets/js/jquery.meanmenu.min.js"></script>
    <script src="<?php echo url(''); ?>/public/frontend/assets/js/custom.js"></script>
    <script src="<?php echo url(''); ?>/public/frontend/assets/js/scrollmenu.js"></script>

    <script>
        $(document).ready(function () {
            // Check if OwlCarousel is loaded correctly to prevent errors
            if ($.isFunction($.fn.owlCarousel)) {
                
                $(".banner-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: false,
                    autoplay: false,
                    smartSpeed: 1000,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 1 },
                        1000: { items: 1 }
                    }
                });

                $('.indian-slider').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayTimeout: 4000,
                    video: true,
                    autoplayHoverPause: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 3 }
                    }
                });

                $('.course-carousel').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: true,
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2.5 },
                        1000: { items: 3.5 }
                    }
                });

                $('.career-opertunity-slide').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 3 }
                    }
                });

                $('.row-slider1').owlCarousel({
                    center: true,
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
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 3 }
                    }
                });

                $('.row-slider2').owlCarousel({
                    center: true,
                    loop: true,
                    margin: 20,
                    nav: false,
                    rtl: true,
                    autoplay: true,
                    slideTransition: 'linear',
                    autoplayTimeout: 6000,
                    autoplaySpeed: 6000,
                    autoplayHoverPause: true,
                    video: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 3 }
                    }
                });

                $('.testi-slider').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    autoplay: true,
                    smartSpeed: 1000,
                    autoplayHoverPause: true,
                    autoplayTimeout: 4000,
                    video: true,
                    responsive: {
                        0: { items: 1 },
                        600: { items: 2 },
                        1000: { items: 4 }
                    }
                });

                // Update navigation icons
                $(".owl-prev").html('<i class="fa-solid fa-angle-left"></i>');
                $(".owl-next").html('<i class="fa-solid fa-angle-right"></i>');
                $(".banner-carousel .owl-prev").html('<i class="bi bi-chevron-left"></i>');
                $(".banner-carousel .owl-next").html('<i class="bi bi-chevron-right"></i>');
            }

            // Wordflick execution
            wordflick();
        });

        // --- YouTube API ---
        let tag = document.createElement("script");
        tag.src = "https://www.youtube.com/iframe_api";
        let firstScriptTag = document.getElementsByTagName("script")[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        let players = [];
        function onYouTubeIframeAPIReady() {
            $(".youtube-video").each(function (index) {
                players[index] = new YT.Player(this, {
                    events: { onStateChange: onPlayerStateChange },
                });
            });
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                $(".owl-carousel").trigger("stop.owl.autoplay");
                players.forEach((player) => { if (player !== event.target) player.pauseVideo(); });
            } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
                let isAnyPlaying = players.some((p) => p.getPlayerState() === YT.PlayerState.PLAYING);
                if (!isAnyPlaying) $(".owl-carousel").trigger("play.owl.autoplay");
            }
        }

        // --- Layout UI Scripts ---
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 50) {
                $('.main-fixed-header').addClass("fixed");
            } else {
                $('.main-fixed-header').removeClass("fixed");
            }
        });

        $('.mean-menulist').meanmenu({ meanMenuContainer: '.mobile-menu' });

        function visible(partial) {
            var $t = partial, $w = $(window), viewTop = $w.scrollTop(), viewBottom = viewTop + $w.height(),
                _top = $t.offset().top, _bottom = _top + $t.height(),
                compareTop = partial === true ? _bottom : _top,
                compareBottom = partial === true ? _top : _bottom;
            return compareBottom <= viewBottom && compareTop >= viewTop && $t.is(":visible");
        }

        $(window).scroll(function () {
            if ($(".count").length && visible($(".count"))) {
                if ($(".count").hasClass("counter-loaded")) return;
                $(".count").addClass("counter-loaded").each(function () {
                    var $this = $(this);
                    $({ Counter: 0 }).animate({ Counter: $this.text() }, {
                        duration: 3000, easing: "swing",
                        step: function () { $this.text(Math.ceil(this.Counter)); }
                    });
                });
            }
        });

        $('.show-form').on('click', function () { $('.form-resol').toggleClass('clicked'); });

        var wow = new WOW({ boxClass: 'wow', animateClass: 'animated', offset: 0, mobile: true, live: false });
        wow.init();

        // --- Wordflick Effect ---
        var words = ['FASTER', 'BETTER', 'BIGGER'], i = 0, offset = 0, forwards = true, skip_count = 0, skip_delay = 15, speed = 90;
        var wordflick = function () {
            setInterval(function () {
                if (forwards) {
                    if (offset >= words[i].length) { ++skip_count; if (skip_count == skip_delay) { forwards = false; skip_count = 0; } }
                } else {
                    if (offset == 0) { forwards = true; i++; offset = 0; if (i >= words.length) i = 0; }
                }
                var part = words[i].substr(0, offset);
                if (skip_count == 0) { if (forwards) offset++; else offset--; }
                $('.word').text(part);
            }, speed);
        };

        // --- Bootstrap Components ---
        document.addEventListener("DOMContentLoaded", function() {
            var modalEl = document.getElementById('imageModal');
            if(modalEl) {
                var myModal = new bootstrap.Modal(modalEl);
                myModal.show();
            }
            
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));
        });
    </script>
</body>
</html>