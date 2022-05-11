<!DOCTYPE html>
<html lang="en">
<head>

<title>Home Page | Vodi - Responsive Website Template</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="shortcut icon" href="https://demo2.madrasthemes.com/vodi-html/favicon.ico">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../assets/vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" href="../../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
<link rel="stylesheet" href="../../assets/vendor/dzsparallaxer/dzsparallaxer.css">
<link rel="stylesheet" href="../../assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="../../assets/vendor/aos/dist/aos.css">
<link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="../../assets/vendor/fancybox/dist/jquery.fancybox.css">

<link rel="stylesheet" href="../../assets/css/theme.css">
</head>
<body>













<script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
<script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/vendor/hs-header/dist/hs-header.min.js"></script>
<script src="../../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
<script src="../../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
<script src="../../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
<script src="../../assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
<script src="../../assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
<script src="../../assets/vendor/hs-counter/dist/hs-counter.min.js"></script>
<script src="../../assets/vendor/appear.js"></script>
<script src="../../assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="../../assets/vendor/aos/dist/aos.js"></script>
<script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="../../assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

<script src="../../assets/js/hs.core.js"></script>
<script src="../../assets/js/hs.validation.js"></script>
<script src="../../assets/js/hs.cubeportfolio.js"></script>
<script src="../../assets/js/hs.slick-carousel.js"></script>
<script src="../../assets/js/hs.fancybox.js"></script>

<script>
        $(document).on('ready', function () {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();

            // initialization of fancybox
            $('.js-fancybox').each(function () {
              var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of form validation
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of show animations
            $('.js-animation-link').each(function () {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of counter
            $('.js-counter').each(function() {
                var counter = new HSCounter($(this)).init();
            });

            // initialization of sticky block
            var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));

            // initialization of cubeportfolio
            $('.cbp').each(function () {
                var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                    layoutMode: 'grid',
                    filters: '#filterControls',
                    displayTypeSpeed: 0
                });
            });

            $('.cbp').on('initComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('filterComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('pluginResize.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();
            });

            // animated scroll to cbp container
            $('#cbpStickyFilter').on('click', '.cbp-filter-item', function (e) {
                $('html, body').stop().animate({
                    scrollTop: $('#demoExamplesSection').offset().top
                }, 200);
            });

            // initialization of go to
            $('.js-go-to').each(function () {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

<script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../../assets/vendor/polifills.js"><\/script>');
    </script>
</body>