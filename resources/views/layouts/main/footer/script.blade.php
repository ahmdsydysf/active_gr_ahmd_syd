
	<!-- JS here -->

	<script src="{{ asset('js/main/vendor/modernizr-3.5.0.min.js')}}"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="{{ asset('js/main/vendor/jquery-1.12.4.min.js')}}"></script>
	<script src="{{ asset('js/main/popper.min.js')}}"></script>
	<script src="{{ asset('js/main/bootstrap.min.js')}}"></script>
	<!-- Jquery Mobile Menu -->
	<script src="{{ asset('js/main/jquery.slicknav.min.js')}}"></script>

	<!-- Jquery Slick , Owl-Carousel Plugins -->
	<script src="{{ asset('js/main/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('js/main/slick.min.js')}}"></script>
	<!-- One Page, Animated-HeadLin -->
	<script src="{{ asset('js/main/wow.min.js')}}"></script>
	<script src="{{ asset('js/main/animated.headline.js')}}"></script>
	<script src="{{ asset('js/main/jquery.magnific-popup.js')}}"></script>

	<!-- Nice-select, sticky -->
	<script src="{{ asset('js/main/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('js/main/jquery.sticky.js')}}"></script>

	<!-- counter , waypoint -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="{{ asset('js/main/jquery.counterup.min.js')}}"></script>

	<!-- contact js -->
	<script src="{{ asset('js/main/contact.js')}}"></script>
	<script src="{{ asset('js/main/jquery.form.js')}}"></script>
	<script src="{{ asset('js/main/jquery.validate.min.js')}}"></script>
	<script src="{{ asset('js/main/mail-script.js')}}"></script>
	<script src="{{ asset('js/main/jquery.ajaxchimp.min.js')}}"></script>

	<!-- Jquery Plugins, main Jquery -->
	<script src="{{ asset('js/main/plugins.js')}}"></script>
	<script src="{{ asset('js/main/main.js')}}"></script>

	<script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
	<script src="{{ asset('js/main/custom.js')}}"></script>

	<style>
		main .slider-area .bottom-shape {
			background-image: url("images/shape-1.png");
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

    @yield('custom_script')

</body>

</html>
