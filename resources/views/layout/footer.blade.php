<footer class="footer">
                    <div class="footer-logo">
                        <img src="assest/logos/logo-blue.png" alt="KlientBoost Logo">
                    </div>

                    <div class="footer-container">
                        <div class="footer-column">
                            <h4>AGENCY</h4>
                            <ul>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="">Results</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Careers <span style="color: red;">HIRING</span></a></li>
                                <li><a href="#">Partner Program</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>PAID ADVERTISING</h4>
                            <ul>
                                <li><a href="pay-per-click-services.html">PPC Agency</a></li>
                                <li><a href="seo-services.html">Facebook Ads Agency</a></li>
                                <li><a href="seo-services.html">Google Ads Agency</a></li>
                                <li><a href="seo-services.html">SEM Agency</a></li>
                                <li><a href="pay-per-click-services.html">PPC Management</a></li>
                                <li><a href="seo-services.html">LinkedIn Ads Agency</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>SEO</h4>
                            <ul>
                                <li><a href="">Content Marketing Agency</a></li>
                                <li><a href="seo-services.html">SEO Agency</a></li>
                                <li><a href="#">Link Building Services</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>CONVERSION</h4>
                            <ul>
                                <li><a href="#">Conversion Rate Optimization</a></li>
                                <li><a href="#">Landing Page Agency</a></li>
                                <li><a href="#">Landing Page Design</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>EMAIL MARKETING</h4>
                            <ul>
                                <li><a href="#">Email Marketing Agency</a></li>
                            </ul>
                        </div>
                    </div>

                    <hr>

                    <div class="footer-contact">
                        <div class="contact-card">
                            <img src="assest/2023-uk-badge.svg" alt="California">
                            <p><strong>UK</strong></p>
                            <p>128 Cannon Workshops Cannon Drive, London, United Kingdom, E14 4AS</p>
                            <!-- <p>(949) 220-1195</p> -->
                        </div>
                        <div class="contact-card">
                            <img src="assest/funnel-img/IND/USA.png" alt="North Carolina">
                            <p><strong>USA</strong></p>
                            <p>PO Box, 732024, Ormond Beach, FL32173</p>
                            <!-- <p>(919) 642-4121</p> -->
                        </div>
                        <div class="contact-card">
                            <img src="assest/funnel-img/IND/IND.png" alt="United Kingdom">
                            <p><strong>India</strong></p>
                            <p>Second Floor, 7-A, Gobind Nagar Rd, Above Jain Builders, Gobind Nagar, Ambala Cantt,
                                Haryana 133001</p>
                            <!-- <p>+44 20 3695 7895</p> -->
                        </div>
                    </div>
                </footer>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.155.0/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/automat/controlkit.js@master/bin/controlKit.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/sheryjs/dist/Shery.js"></script> -->
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        // Add sticky class to headernew after scrolling past the banner
        window.addEventListener("scroll", function () {
            const header = document.getElementById("main-header");
            const bannerHeight = document.querySelector(".banner").offsetHeight;

            if (window.scrollY >= bannerHeight) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        });

    </script>
    <script>
        document.querySelector(".menu-toggle").addEventListener("click", function () {
            document.querySelector(".nav-menu").classList.toggle("active");
        });
    </script>
    <script>
        function animateValue(id, start, end, duration, suffix = '') {
            let obj = document.getElementById(id);
            let range = end - start;
            let startTime = null;

            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                let progress = Math.min((timestamp - startTime) / duration, 1);
                obj.textContent = Math.floor(progress * range + start) + suffix;
                if (progress < 1) {
                    requestAnimationFrame(step);
                }
            }
            requestAnimationFrame(step);
        }

        window.onload = function () {
            animateValue("stat1", 0, 100, 2000, "%");
            animateValue("stat2", 0, 500, 2000, "K");
            animateValue("stat3", 0, 20, 2000, "%");
            animateValue("stat4", 0, 1, 2000, "B");
        };
    </script>
    <!-- <script src="script.js"></script> -->
    <script>
        const slides = document.querySelector('.slides');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        let currentSlide = 0;

        function showSlide(index) {
            const totalSlides = slides.children.length;
            currentSlide = (index + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${currentSlide * 100}%)`; // Corrected line
        }

        prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));
        nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));
    </script>
    <script>
        window.addEventListener("scroll", function () {
            var firstsectionitsoft = document.querySelector(".first");
            var scrollPosition = window.scrollY;

            // Smoothly move the first sectionitsoft upwards as you scroll
            // firstsectionitsoft.style.transform = "translateY(" + scrollPosition + "px)";
        });
    </script>
    <script>
        const accordionBtns = document.querySelectorAll(".accordion-title");

        accordionBtns.forEach((accordion) => {
            accordion.onclick = function () {
                this.classList.toggle("active");

                let content = this.nextElementSibling;

                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            };
        });

    </script>
     <script>
        const accordionBtns = document.querySelectorAll(".accordion-title");

        accordionBtns.forEach((accordion) => {
            accordion.onclick = function () {
                this.classList.toggle("active");

                let content = this.nextElementSibling;

                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            };
        });
        gsap.registerPlugin(ScrollTrigger);
        gsap.to("#cards", {
            scrollTrigger: {
                trigger: "#trigger",
                start: "top top",
                end: "bottom top",
                pin: "#right",
                scrub: 1,
                pinSpacing: false // Agle section me effect na jaye
            }
        });
    </script>

    <script src="{{asset('js/newheader.js')}}"></script>
</body>

</html>