<script src="assets/js/aos.js"></script>

<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>

<script src="assets/js/odometer.min.js"></script>

<script src="assets/js/gsap.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/isotope.pkgd.min.js"></script>

<script src="assets/js/imagesloaded.pkgd.min.js"></script>

<script src="venobox/venobox.js"></script>

<script src="venobox/venobox.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.scrollUp.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/appear.js"></script>

<script src="assets/js/jquery.barfiller.js"></script>

<script src="assets/js/swiper.min.js"></script>

<script src="assets/js/theme.js"></script>

<script src="assets/js/my.js"></script>

<script>

    document.getElementById('checkin').addEventListener('focus', function (event) {
        event.target.type = 'date';
    });

    document.getElementById('checkin').addEventListener('blur', function (event) {
        if (!event.target.value) {
            event.target.type = 'text';
            event.target.placeholder = 'Check In';
        }
    });

    document.getElementById('checkout').addEventListener('focus', function (event) {
        event.target.type = 'date';
    });

    document.getElementById('checkout').addEventListener('blur', function (event) {
        if (!event.target.value) {
            event.target.type = 'text';
            event.target.placeholder = 'Check Out';
        }
    });

</script>