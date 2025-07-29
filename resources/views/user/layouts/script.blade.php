{{-- script Starts --}}


<!-- Link of JS files -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/swiper.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/aos.js') }}"></script>
<script src="{{ asset('user/assets/js/fslightbox.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 1000,
        easing: 'ease-in-out',
    });
</script>

<script>
    var myCarousel = new bootstrap.Carousel('#heroCarousel', {
        interval: false,
        wrap: false
    })
</script>






















{{-- =============================================================================================== --}}
{{-- <!-- jquery-->
<script src="{{ asset('user/assets/js/jquery-2.2.4.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('user/assets/js/plugins.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('user/assets/js/popper.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
<!-- Counterup Js -->
<script src="{{ asset('user/assets/js/jquery.counterup.min.js') }}"></script>
<!-- WOW JS -->
<script src="{{ asset('user/assets/js/wow.min.js') }}"></script>
<!-- Waypoints Js -->
<script src="{{ asset('user/assets/js/waypoints.min.js') }}"></script>
<!-- Parallaxie Js -->
<script src="{{ asset('user/assets/js/parallaxie.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ asset('user/assets/vendor/slider/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('user/assets/vendor/slider/home.js') }}"></script>
<!-- Owl Carousel Js -->
<script src="{{ asset('user/assets/vendor/OwlCarousel/owl.carousel.min.js') }}"></script>
<!-- Meanmenu Js -->
<script src="{{ asset('user/assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- Magnific Popup Js -->
<script src="{{ asset('user/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- Isotope Js -->
<script src="{{ asset('user/assets/js/isotope.pkgd.min.js') }}"></script>
<!-- Smoothscroll Js -->
<script src="{{ asset('user/assets/js/smoothscroll.min.js') }}"></script>
<!-- Custom Js -->
<script src="{{ asset('user/assets/js/main.js') }}"></script> --}}
{{-- script Ends --}}



<!-- AOS JS -->
{{-- <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Animation duration
        once: true, // Whether animation should happen only once
    });
</script>



<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                slideChangeTransitionStart: function() {
                    // Reset animation by removing any applied classes
                    document.querySelectorAll(".swiper-slide img").forEach((img) => {
                        img.style.animationName = "none";
                        img.offsetHeight; // Trigger reflow to reset animation
                        img.style.animationName = "fadeIn";
                    });

                    // Hide slide content for transition effect
                    document.querySelectorAll(".slide-content").forEach((content) => {
                        content.style.opacity = "0";
                        content.style.visibility = "hidden";
                    });
                },
                slideChangeTransitionEnd: function() {
                    // Show content once the slide change is complete
                    const activeContent = document.querySelector(
                        ".swiper-slide-active .slide-content");
                    if (activeContent) {
                        activeContent.style.opacity = "1";
                        activeContent.style.visibility = "visible";
                    }
                },
            }
        });
    });
</script> --}}
<!----scroll-animation------>
{{-- <script>
    window.addEventListener("scroll", function() {
        const header = document.querySelector(".site-header-menu-inner");

        if (window.scrollY > 0) {
            if (!header.classList.contains("fixed")) {
                header.classList.add("fixed");
            }
        } else {
            header.classList.remove("fixed");
        }
    });
</script> --}}
<!----scroll-animation------>
