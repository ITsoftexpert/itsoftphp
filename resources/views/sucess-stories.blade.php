@extends('layout/structure')

@section('section')
<link rel="stylesheet" href="{{asset('css/newheader.css')}}">
<link rel="stylesheet" href="{{asset('css/ss.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Header start  -->
<header id="main-header">
        <div class="header-container service-page-header">
            <div class="logo">
                <a href="index"><img src="assest/logos/logo-blue.png" alt="Logo"></a>
            </div>
            <div class="menu-toggle">☰</div>

            <ul class="nav-menu">
                <li><a href="index">Home</a></li>

                <li class="dropdown services">
                    <a id="tb" href="service" style="color: black;">Services <i
                            class="fa-solid fa-caret-down"></i></a>
                    <div class="mega-menu">
                        <div class="mega-column">
                            <h3>Digital Marketing</h3>
                            <a href="seo-services">SEO</a>
                            <a href="pay-per-click-services">PPC Advertising</a>
                            <a href="social-media-marketing-services">Social Media Marketing</a>
                            <a href="content-marketing-services">Content Marketing</a>
                        </div>
                        <div class="mega-column">
                            <h3>Web Development</h3>
                            <a href="website-development-services">Custom Website Development</a>
                            <a href="e-commerce-solutions-services">E-commerce Solutions</a>
                            <a href="custom-software-solutions-services">CMS Development</a>
                        </div>
                        <div class="mega-column">
                            <h3>App Development</h3>
                            <a href="ios-android-app-development-services">iOS & Android App Development</a>
                            <a href="hybrid-app-solutions-services">Hybrid App Solutions</a>
                        </div>
                        <div class="mega-column">
                            <h3>Software Development</h3>
                            <a href="custom-software-solutions-services">Custom Software Solutions</a>
                            <a href="enterprice-Software-Integration">Enterprise Software Integration</a>
                        </div>
                        <div class="mega-column">
                            <h3>Automation Services</h3>
                            <a href="marketing-automation-services">Marketing Automation</a>
                            <a href="workflow-automation-services">Workflow Automation</a>
                            <a href="crm-solutions-services">CRM Solutions</a>
                        </div>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#">Industries We Serve <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="healthcare">Healthcare</a></li>
                        <li><a href="education">Education</a></li>
                        <li><a href="retail-e-commerce">Retail & E-commerce</a></li>
                        <!-- <li><a href="finance-banking">Finance & Banking</a></li> -->
                        <li><a href="realestate">Real Estate</a></li>
                        <li><a href="startups-small-buisnesses">Startups & Small Businesses</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="">Case Studies <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="sucess-stories">Success Stories</a></li>
                        <li><a href="#">Client Testimonials</a></li>
                        <li><a href="#">Portfolio</a></li>
                    </ul>
                </li>

                <li><a href="Blog">Blog</a></li>

                <li class="dropdown">
                    <a href="#">About Us <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Company Overview</a></li>
                        <li><a href="#">Mission & Vision</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Contact Us <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="contact-form">Contact Form</a></li>
                        <li><a href="#">Office Locations</a></li>
                        <li><a href="faq">FAQs</a></li>

                    </ul>
                </li>
            </ul>
            <button class="get-in-touch"> Get in touch
            </button>
        </div>
    </header>

    <div class=" banner-section-serc-page">
        <div class="cta-section-service-page">
            <h1 class="cta-heading">
                iTSoftexpert: Turning design into tangible results.
            </h1>
            <p class="v3s-parag0apg"> 150+ success stories and counting.
                See how we’ve powered business growth!</p>
            <div class="btn-service-banner">
                <a href="#" class="cta-button">Grab your free marketing plan!</a>
            </div>
            <p class="v3s-parag0apg">Feel free to take our ideas, no strings attached!

            </p>
        </div>
    </div>
    <div id="s1-img-container">
        <div id="image-left">
            <img src="assest/funnel-img/cms development/28.png" alt="">
        </div>
        <div id="image-right">
            <img src="assest/funnel-img/cms development/36.png" alt="">
        </div>
    </div>

    <div class="services-page-cards">
        <div class="views3-section">
            <h2 class="v3s-heading">Real Results <span style="color: #03a4e3;">ITSoftExpert’s Impact on Buisness Growth</span>
            </h2>
            <!-- <p class="v3s-parag0apg">Hybrid App Demystified</p> -->
            <br><br><br>
        </div>
        <div id="stats-conainer">
            <div id="stats-item">
                <h2>1200%</h2>
                <h3>increase in Organic Traffic</h3>
            </div>
            <div id="stats-item">
                <h2>492%</h2>
                <h3>ROAS achieved</h3>
            </div>
            <div id="stats-item">
                <h2>252+</h2>
                <h3>Clients Worldwide</h3>
            </div>
            <div id="stats-item">
                <h2>2672%+</h2>
                <h3>increase in Conversions</h3>
            </div>
        </div>
        <br><br><br>
        <div #swiperRef="" class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div id="cart-top-cont">
                        <img src="assest/funnel-img/sucess stories/1.png" alt="">
                        <h2>CHALLENGE</h2>
                        <p>Client spent £3000 on Shopify but failed to add a custom webhook, hurting efficiency and
                            sales.</p>
                    </div>
                    <br>
                    <div id="cart-mid-cont">
                        <h2>APPROACH</h2>
                        <ul>
                            <li>Custom webhook integration</li>
                            <li>Accurate car model display</li>
                            <li>Improved user experience</li>
                        </ul>
                    </div>
                    <br>
                    <div id="cart-bot-cont">
                        <h2>Rating ★★★★★</h2>
                        <p><br></p>
                    </div>
                    <div id="least">
                        <p id="percentage">100%</p>
                        <p id="justification">increase in lead</p><br>
                        <a href="case-studys">Check out<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div id="cart-top-cont">
                        <img src="assest/funnel-img/lksmain/1.png   " alt="">
                        <h2>CHALLENGE</h2>
                        <p>Dem-Con needed a fun, educational app to teach recycling while reducing in-person demos.</p>
                    </div>
                    <br>
                    <div id="cart-mid-cont">
                        <h2>APPROACH</h2>
                        <ul>
                            <li>Developed Interactive Features</li>
                            <li>Optimized for Mobile & Desktop</li>
                            <li>Incorporated User Feedback

                            </li>
                        </ul>
                    </div>
                    <br>
                    <div id="cart-bot-cont">
                        <h2>Rating ★★★★★</h2>
                        <p><br></p>
                    </div>
                    <div id="least">
                        <p id="percentage">100%</p>
                        <p id="justification">increase in lead</p><br>
                        <a href="case-studys">Check out<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div id="cart-top-cont">
                        <img src="assest/funnel-img/lksmain/3.png" alt="">
                        <h2>CHALLENGE</h2>
                        <p>Brisbane Cup Supplies needed a website upgrade with better performance.</p>
                    </div>
                    <br>
                    <div id="cart-mid-cont">
                        <h2>APPROACH</h2>
                        <ul>
                            <li>Proposed Shopify for Scalability</li>
                            <li>Streamlined Product Management</li>
                            <li>Enhanced Security & Speed
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div id="cart-bot-cont">
                        <h2>Rating ★★★★★</h2>
                        <p><br></p>
                    </div>
                    <div id="least">
                        <p id="percentage">100%</p>
                        <p id="justification">increase in lead</p><br>
                        <a href="case-studys">Check out<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div id="cart-top-cont">
                        <img src="assest/funnel-img/lksmain/2.png" alt="">
                        <h2>CHALLENGE</h2>
                        <p>SnapSendReport faced compliance and App Store hurdles.</p>
                    </div>
                    <br>
                    <div id="cart-mid-cont">
                        <h2>APPROACH</h2>
                        <ul>
                            <li>Overcame Regulatory Challenges</li>
                            <li>Built Scalable Cloud Infrastructure</li>
                            <li>Iterated for App Store Approval
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div id="cart-bot-cont">
                        <h2>Rating ★★★★★</h2>
                        <p><br></p>
                    </div>
                    <div id="least">
                        <p id="percentage">100%</p>
                        <p id="justification">increase in lead</p><br>
                        <a href="case-studys">Check out<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
        <!-- <div class="swiper-pagination"></div> -->


    </div>


    <!-- end  -->

    <div class="CTA_page_section">
        <div class="cta-section">
            <h1 class="cta-heading">
                Ready to Build?

            </h1>
            <a href="#" class="cta-button">Let’s build something amazing together. Get in touch today!
            </a>
        </div>
    </div>
    <!-- </div> -->
    <!-- footer  section start  -->
    <footer class="footer">
        <div class="footer-logo">
            <img src="assest/logos/logo-blue.png" alt="KlientBoost Logo">
        </div>

        <div class="footer-container">
            <div class="footer-column">
                <h4>AGENCY</h4>
                <ul>
                    <li><a href="service">Services</a></li>
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
                    <li><a href="pay-per-click-services">PPC Agency</a></li>
                    <li><a href="seo-services">Facebook Ads Agency</a></li>
                    <li><a href="seo-services">Google Ads Agency</a></li>
                    <li><a href="seo-services">SEM Agency</a></li>
                    <li><a href="pay-per-click-services">PPC Management</a></li>
                    <li><a href="seo-services">LinkedIn Ads Agency</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>SEO</h4>
                <ul>
                    <li><a href="">Content Marketing Agency</a></li>
                    <li><a href="seo-services">SEO Agency</a></li>
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
                <img src="assest/2023-ca-badge.svg" alt="California">
                <p><strong>UK</strong></p>
                <p>128 Cannon Workshops Cannon Drive, London, United Kingdom, E14 4AS</p>
                <!-- <p>(949) 220-1195</p> -->
            </div>
            <div class="contact-card">
                <img src="assest/2023-nc-badge.svg" alt="North Carolina">
                <p><strong>USA</strong></p>
                <p>PO Box, 732024, Ormond Beach, FL32173</p>
                <!-- <p>(919) 642-4121</p> -->
            </div>
            <div class="contact-card">
                <img src="assest/2023-uk-badge.svg" alt="United Kingdom">
                <p><strong>India</strong></p>
                <p>Second Floor, 7-A, Gobind Nagar Rd, Above Jain Builders, Gobind Nagar, Ambala Cantt,
                    Haryana 133001</p>
                <!-- <p>+44 20 3695 7895</p> -->
            </div>
        </div>
    </footer>
    <!-- footer section end  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 60,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

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

<script src="{{asset('js/newheader.js')}}"></script>
@endsection