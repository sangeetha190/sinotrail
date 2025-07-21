<script src="{{ asset('user/assets/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery-migrate-3.4.1.min.js') }}"></script>
<script src="{{ asset('user/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user/assets/js/tether.min.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.easing.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery-waypoints.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery-validate.js') }}"></script>
<script src="{{ asset('user/assets/js/numinate.min.js') }}"></script>
<script src="{{ asset('user/assets/js/slick.js') }}"></script>
<script src="{{ asset('user/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('user/assets/js/price_range_script.js') }}"></script>
<script src="{{ asset('user/assets/js/easyzoom.js') }}"></script>
<script src="{{ asset('user/assets/js/main.js') }}"></script>
<script src="{{ asset('user/assets/js/loader.js') }}"></script>
<!-- Swiper JS -->

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
</script>
<!----scroll-animation------>
<script>
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
</script>
<!----scroll-animation------>
