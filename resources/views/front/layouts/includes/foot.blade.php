    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="/assets/js/plugins/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/plugins/isotope.pkg.min.js"></script>
    <script src="/assets/js/plugins/jquery.slick.min.js"></script>
    <script src="/assets/js/plugins/jquery.counter.min.js"></script>
    <script src="/assets/js/plugins/lightgallery.min.js"></script>
    <script src="/assets/js/plugins/wow.min.js"></script>
    <script src="/assets/js/plugins/gsap.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/BigPicture.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        var acc = document.getElementsByClassName("cs-accordian_head");
        // var panel = document.getElementsByClassName("cs-accordian_body");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>

    <script>
        // Open the Modal
        function openModal() {
            document.getElementById("galery-myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            document.getElementById("galery-myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("galery-mySlides");
            var dots = document.getElementsByClassName("galery-demo");
            var captionText = document.getElementById("galery-caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <script>
        var acc = document.getElementsByClassName("faq-accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("faq-active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    <script>
        ;
        (function() {
            // other stuff
            function setClickHandler(id, fn) {
                document.getElementById(id).onclick = fn
            }

            setClickHandler('video_container', function(e) {
                var className = e.target.className
                if (~className.indexOf('htmlvid')) {
                    BigPicture({
                        el: e.target,
                        vidSrc: e.target.getAttribute('vidSrc'),
                    })
                } else if (~className.indexOf('vimeo')) {
                    BigPicture({
                        el: e.target,
                        vimeoSrc: e.target.getAttribute('vimeoSrc'),
                    })
                } else if (~className.indexOf('twin-peaks')) {
                    BigPicture({
                        el: e.target,
                        ytSrc: e.target.getAttribute('ytSrc'),
                        dimensions: [1226, 900],
                    })
                } else if (~className.indexOf('youtube')) {
                    BigPicture({
                        el: e.target,
                        ytSrc: e.target.getAttribute('ytSrc'),
                    })
                }
            })

        })()
    </script>
