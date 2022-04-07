<!-- JS here -->

<script src="{{ asset('webassests/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('webassests/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{ asset('webassests/assets/js/popper.min.js')}}"></script>
<script src="{{ asset('webassests/assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('webassests/assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('webassests/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('webassests/assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('webassests/assets/js/wow.min.js')}}"></script>
<script src="{{ asset('webassests/assets/js/animated.headline.js')}}"></script>
<script src="{{ asset('webassests/assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Nice-select, sticky -->
<script src="{{ asset('webassests/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{ asset('webassests/assets/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('webassests/assets/js/jquery.counterup.min.js')}}"></script>

<!-- contact js -->
<script src="{{ asset('webassests/assets/js/contact.js')}}"></script>
<script src="{{ asset('webassests/assets/js/jquery.form.js')}}"></script>
<script src="{{ asset('webassests/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{ asset('webassests/assets/js/mail-script.js')}}"></script>
<script src="{{ asset('webassests/assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('webassests/assets/js/plugins.js')}}"></script>
<script src="{{ asset('webassests/assets/js/main.js')}}"></script>

<script src="{{ asset('webassests/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('webassests/assets/js/custom.js')}}"></script>

<style>
    main .slider-area .bottom-shape {
        background-image: url("{{ asset('webassests/images/shape-1.png')}}");
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute;
        bottom: 0 !important;
        left: 0;
        width: 100%;
        height: 80px;
        z-index: 1;
    }
</style>
<script>
    $(document).ready(function () {

        $("#owl-demo").owlCarousel({
            navigation: true,
            autoplay: true,
            items: 1,
            loop: true,
            nav: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
        });

    });
</script>

@yield('scripts')

</body>

</html>
