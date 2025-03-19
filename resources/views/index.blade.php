<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
    <link rel="stylesheet" href="{{asset('css/forhomeonly.css')}}">
    <link rel="stylesheet" href="{{asset('css/newheader.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css">
    <title>Home - Digital Marketing, Website and Mobile App Development Company</title>
    <style>
        #loader {
            z-index: 99999;
            position: fixed;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }
        #loader video {
            z-index: 99999;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            opacity: 0;
        }
    </style>
</head>

<body>

<!-- <div id="loader">
    <video id="loaderVideo" autoplay loop muted playsinline>
        <source src="{{asset('media/Mark2_3.mp4')}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div> -->

    <!-- headernew start -->
    <headernew class="headernew" id="main-header">
        <div class="main-headernew-conta">
            <div class="row v-center">
                <div class="headernew-item item-left">
                    <div class="logo">
                        <a href="/index"><img src="assest/logos/logo-white.webp" alt="Logo"></a>
                    </div>
                    <div id="mobile-logo">
                        <a href="/index"><img src="assest/logos/logo-blue.png" alt="Logo"></a>
                    </div>
                </div>
                <div class="headernew-item item-center">
                    <div class="menunew-overlay"></div>
                    <nav class="menunew">
                        <div class="mobile-menunew-head">
                            <div class="go-back"><i class="fa fa-angle-left"></i></div>
                            <div class="current-menunew-title"></div>
                            <div class="mobile-menunew-close">&times;</div>
                        </div>
                        <ul class="menunew-main">
                            <li class="menunew-item-has-children">
                                <a id="tb" href="/#">Services <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew mega-menunew mega-menunew-column-4">
                                    <div class="list-item">
                                        <h4 class="title">Digital Marketing</h4>
                                        <ul>

                                            <li><a href="/seo-services">SEO</a></li>
                                            <li><a href="/pay-per-click-services">PPC Advertising</a></li>
                                            <li><a href="/social-media-marketing-services">Social Media
                                                    Marketing</a></li>
                                            <li><a href="/content-marketing-services">Content Marketing</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Web Development</h4>
                                        <ul>
                                            <li><a href="/website-development-services">Custom Website
                                                    Development</a></li>
                                            <li><a href="/e-commerce-solutions-services">E-commerce Solutions</a>
                                            </li>
                                            <li><a href="/custom-software-solutions-services">CMS Development</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">App Development</h4>
                                        <ul>
                                            <li><a href="/ios-android-app-development-services">iOS & Android App
                                                    Development</a></li>
                                            <li><a href="/hybrid-app-solutions-services">Hybrid App Solutions</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Software Development</h4>
                                        <ul>
                                            <li><a href="/custom-software-solutions-services">Custom Software
                                                    Solutions</a></li>
                                            <li><a href="/enterprice-Software-Integration">Enterprise Software
                                                    Integration</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Automation Services</h4>
                                        <ul>
                                            <li><a href="/marketing-automation-services">Marketing Automation</a>
                                            </li>
                                            <li><a href="/workflow-automation-services">Workflow Automation</a></li>
                                            <li><a href="/crm-solutions-services">CRM Solutions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="menunew-item-has-children">
                                <a id="tb" href="/#">Industries We Serve <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="/healthcare">Healthcare</a></li>
                                        <li><a href="/education">Education</a></li>
                                        <li><a href="/retail-e-commerce">Retail & E-commerce</a></li>
                                        <li><a href="/realestate">Real Estate</a></li>
                                        <li><a href="/startups-small-buisnesses">Startups & Small Businesses</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menunew-item-has-children">
                                <a id="tb" href="/#">Case Studies <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="/sucess-stories">Success Stories</a></li>
                                        <li><a href="/#">Client Testimonials</a></li>
                                        <li><a href="/#">Portfolio</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a id="tb" href="/Blog">Blog</a>
                            </li>
                            <li class="menunew-item-has-children">
                                <a id="tb" href="/about">About Us <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="/#">Company Overview</a></li>
                                        <li><a href="/#">Mission & Vision</a></li>
                                        <li><a href="/#">Team</a></li>
                                        <li><a href="/#">Careers</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menunew-item-has-children">
                                <a id="tb" href="/#">Contact Us <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="/contact-form">Contact Form</a></li>
                                        <li><a href="/#">Office Locations</a></li>
                                        <li><a href="/faq">FAQs</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="headernew-item item-right">
                    <button class="get-in-touch" onclick="window.location.href='connect-with-itsoftexpert'">
                        Get in touch
                    </button>
                    <div class="mobile-menunew-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </headernew>
    <!-- headernew end -->

    <div class="sectionitsoft first">
        <section class="banner main-video-banner">
            <div id="main">
                <div id="back">
                    <video muted autoplay loop src="assest/video/images.mp4"></video>
                </div>
                <div id="top">
                    <div id="workingarea">
                        <div id="hero">
                            <div id="heroleft">
                                <div class="elem">
                                    <h1>Is Your </h1>
                                </div>
                                <div class="elem">
                                    <h1 style="color: #03a4e3; text-shadow: -3px 0px 0px #fff">Marketing </h1>
                                </div>
                                <div class="elem">
                                    <h1>Delivering?</h1>
                                </div>
                                <div>
                                    <p class="banner-paragraph-text">iTSoftexpert uses AI-powered PPC and SEO to turn
                                        traffic into quality <br> leads. Join 200+ global clients scaling with
                                        personalized funnels and real, <br> measurable growth.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="first-mobile">
        <video muted autoplay loop src="assest/video/images1.mp4"></video>

    </div>

    <div class="sectionitsoft second">
        <!-- Add some content for scrolling -->
        <section class="content">
            <section1>
                <br>
                <h2>Transform Clicks <span style="color: #03a4e3;">Into Real Revenue </span></h2>

                <p class="revenue-ptext">By offering custom omnichannel marketing strategies, led by experts and backed
                    by
                    data, WebFX can help your business hit
                    your revenue goals. </p>

                <div id="left-s1">
                    <img class="dextop-funnel" src="assest/funnel-img/funnel-three.png    " alt="">
                </div>
                <div id="left-si-responsive">
                    <img class="mobile-funnel-alt" src="assest/funnel-img/29.png" alt="">
                </div>

                <div id="s1-workarea">
                    <div id="s1-content">
                        <div id="null" class="grid-item1"></div>
                        <div class="grid-item">
                            <h3 class="rvenue-heading">Drive relevant traffic
                            </h3>
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>SEO Solutions&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>Local Search Optimization&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>Ecommerce SEO Services&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>Content Strategy Marketing&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div id="line2"></div>
                    <div id="s2-content">
                        <div class="grid-item1"></div>
                        <div class="grid-item">
                            <h3 class="rvenue-heading">Targeted Ad Campaigns to drive results</h3>
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>Campaign Management&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>SMA Solutions&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>Ad Management&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>Geofencing Ad Solution&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div id="line3"></div>
                    <div id="s3-content">
                        <div class="grid-item1"></div>
                        <div class="grid-item">
                            <h3 class="rvenue-heading">Collect, Analyze, and Drive Marketing Decisions</h3>
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>Heatmap Analysis&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>Google Analytics&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>Customer Journey Mapping&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>CRM Analytics&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div id="line4"></div>
                    <div id="s4-content">
                        <div class="grid-item1"></div>
                        <div class="grid-item">
                            <h3 class="rvenue-heading">Elevate brand voice to increase conversions</h3>
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>Custom Website Design&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>CRO Services
                                &nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                        <div class="grid-item">
                            <!-- <a href="/"> -->
                            <p>Landing Page Design&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                            <!-- <a href="/"> -->
                            <p>Social Media Strategy&nbsp;<i class="fa-thin fa-arrow-right"></i></p>
                            <!-- </a> -->
                        </div>
                    </div>
                    <div id="line5"></div>
                </div>
            </section1>

            <section class="expertise-section">
                <h2>The Outcomes You <span style="color: #03a4e3;">Can Count On</span></h2>
                <div class="expertise-container">
                    <div class="expertise-left">
                        <h3>Maximized ROI & Efficient Spending</h3>
                        <p>AI-driven PPC ensures every ad dollar works harder by auto-optimizing bids and budget
                            allocation.</p>
                        <h3>Higher Conversion Rates & Lead Growth</h3>
                        <p>AI-powered marketing drives stronger engagement and more conversions by continually refining
                            ads and content.</p>
                        <h3>Increased Visibility & Organic Traffic </h3>
                        <p>AI-enhanced SEO helps your business rank higher in search results, making it easier for
                            customers to find you.</p>
                        <div class="sec-2-links">
                            <div class="sec-2-three-link">
                                <a href="/">
                                    <p class="about-text">About Us <i class="fa-solid fa-arrow-right"></i></p>
                                </a>
                                <a href="/">
                                    <p class="about-text">Results <i class="fa-solid fa-arrow-right"></i></p>
                                </a>
                                <a href="/">
                                    <p class="about-text">Our Reviews <i class="fa-solid fa-arrow-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="expertise-right">
                        <div class="expertise-cards">
                            <div class="expert-card light-blue">
                                <div class="card-content">
                                    <h3>Email marketing</h3>
                                    <p> 8% CVR, 35% open rate</p>
                                </div>
                                <img src="assest/funnel-img/HOMEPAGE logo/upscalemedia-transformed (4).png"
                                    alt="Expert Image">
                            </div>
                            <div class="expert-card light-yellow">
                                <div class="card-content">
                                    <h3>CRO </h3>
                                    <p>A/B testing <i class="fa-solid fa-arrow-down"></i> 18% Bounce rate</p>
                                </div>
                                <img src="assest/funnel-img/HOMEPAGE logo/upscalemedia-transformed (2).png"
                                    alt="Expert Image">
                            </div>
                            <div class="expert-card light-orange">
                                <div class="card-content">
                                    <h3>Paid advertising</h3>
                                    <p><i class="fa-solid fa-arrow-up"></i> 334% ROAS earnerd</p>
                                </div>
                                <!-- <img src="assest/funnel-img/HOMEPAGE logo/upscalemedia-transformed (4).png"
                                    alt="Expert Image"> -->
                                <img src="assest/funnel-img/HOMEPAGE logo/upscalemedia-transformed (1).png"
                                    alt="Expert Image">

                            </div>
                            <div class="expert-card light-green">
                                <div class="card-content">
                                    <h3>Seo</h3>
                                    <p><i class="fa-solid fa-arrow-up"></i> 35% growth in site conversions</p>
                                </div>
                                <!-- <img src="assest/funnel-img/HOMEPAGE logo/upscalemedia-transformed (4).png"
                                    alt="Expert Image"> -->
                                <img src="assest/funnel-img/HOMEPAGE logo/upscalemedia-transformed (3).png"
                                    alt="Expert Image">
                            </div>
                            <div class="expert-card full-width light-blue ">
                                <h4 class="technology-head">Get your Free Marketing Plan</h4>
                                <div class="logos">
                                    <img src="assest/funnel-img/logos/1.png" alt="">
                                    <img src="assest/funnel-img/logos/2.png" alt="">
                                    <img src="assest/funnel-img/logos/3.png" alt="">
                                    <img src="assest/funnel-img/logos/4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
            </section>



            <div class="c1">
                <div class="views3-section">
                    <h2 class="v3s-heading">Grow in 2025 <span style="color: #03a4e3;">with ITsoftexpert</span></h2>

                    <!-- <h2> </h2> -->
                    <!-- <h2 class="v3s-heading">Grow Your Business with ITsoftexpert</h2> -->
                    <p class="v3s-parag0apg">Unlock your business potential and accelerate growth in 2025 with
                        ITsoftexpert's innovative
                        solutions. Let's build the
                        future together</p>
                </div>
                <div class="views2-section">
                    <a href="/#" class="cta1-button"><i class="fa-solid fa-hand-point-right"></i> Get a Free Consultation
                        <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="views1-section">
                    <div class="Box_review_section">
                        <div class="google-reviews-sectionv3s">
                            <div>
                                <img class="google-revews-img" src="assest/google-revews.png" alt="">

                            </div>
                            <div>
                                <p class="stars">5.0★★★★★</p>
                                </p>
                                <p class="reviews-rating-no"><strong>109 reviews</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="Box_review_section">
                        <div class="google-reviews-sectionv3s">
                            <div>
                                <img class="google-revews-img" src="assest/trustpilot-logo.png" alt="">

                            </div>
                            <div>
                                <p class="v1s-text">ITsoftexpert.com is rated great</p>
                                <p class="reviews-rating-no"><strong>4.5 reviews</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="Box_review_section">
                        <div class="google-reviews-sectionv3s">
                            <div>
                                <img class="google-revews-img" src="assest/funnel-img/homepage/freelancer.png" alt="">

                            </div>
                            <div>
                                <p class="v1s-text">ITsoftexpert.com - Best Reviews</p>
                                <p class="reviews-rating-no"><strong>5.0 reviews</strong></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="home-page-sec-logos">
                <section class="section4_logos">
                    <div class="sec4-logos-main"><br>
                        <h2 class="sec4-logos-heading">Tailored IT Solutions <span style="color: #03a4e3;"> for Growth &
                                Success
                            </span></h2>
                        <p class="v3s-parag0apg">From startups to enterprises, we deliver customized IT solutions that
                            drive
                            growth, innovation, and success across 100+
                            industries worldwide
                        </p>
                    </div>
                    <div class="Video_logo_section1">
                        <div class="Photo3_section">
                            <div class="photo1_section"><img src="Business System/5.png" alt="photo 1"></div>
                            <div class="photo1_section"><img src="Business System/6.png" alt="photo 2"></div>
                            <div class="photo1_section"><img src="Business System/8.png" alt="photo 3"></div>
                            <div class="photo1_section"><img src="Business System/13.png" alt="photo 4"></div>
                            <div class="photo1_section"><img src="Business System/15.png" alt="photo 5"></div>
                            <div class="photo1_section"><img src="Business System/17.png" alt="photo 6"></div>
                            <div class="photo1_section"><img src="Business System/19.png" alt="photo 7"></div>
                            <div class="photo1_section"><img src="Business System/22.png" alt="photo 8"></div>
                            <div class="photo1_section"><img src="Business System/29.png" alt="photo 9"></div>
                            <div class="photo1_section"><img src="Business System/31.png" alt="photo 10"></div>
                            <div class="photo1_section"><img src="Business System/33.png" alt="photo 11"></div>
                            <div class="photo1_section"><img src="Business System/35.png" alt="photo 7"></div>
                        </div>
                        <div class="sect_Videos">
                            <iframe width="350" height="380" src="https://www.youtube.com/embed/eqcMpykn-N0"
                                title="IT Softexpert reviews digital marketing" frameborder="0"
                                style="border-radius: 5px; border: none; overflow: hidden;"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                        
                </section>
            </div>
            <!-- home page section 4 start -->
            <div class="slider-container">
                <div class="slider">
                    <div class="slides">
                        <!-- Slide 1 -->
                        <div class="S1">
                            <div class="content_sec1">
                                <h2 class="case-heading">From Clicks to Conversions<span style="color: #03a4e3;">
                                        How TouchUpPaint Increased Sales by 300% in 3 Months</span>
                                </h2>

                                <div class="Content_image">
                                    <div class="section_img">
                                        <img src="assest/funnel-img/case study/touchuppaint.png" alt="Penguin Air">
                                    </div>
                                    <div class="text1_sect">
                                        <h2 class="problem-heading">The Challenges: </h2>
                                        <h2 class="problem-subheading">Why TouchUpPaint Needed a Digital
                                            Transformation</h2>
                                        <p>TouchUpPaint knew they had a high-quality product that customers
                                            needed—precision color-matched automotive paint
                                            solutions. However, reaching the right audience and ensuring a seamless
                                            shopping experience was a challenge.
                                        </p>
                                        <h2 class="solution-heading">Accelerating Success:
                                        </h2>
                                        <h2 class="solution-subheading">The Strategy That Drove
                                            Growth for TouchUpPaint
                                        </h2>
                                        <p>The journey to increased sales and online growth for TouchUpPaint began with
                                            their website. Recognizing that a seamless
                                            user experience and automation were critical to improving conversions,
                                            ITSoftExpert developed a custom Shopify solution
                                            that included:
                                        </p>
                                        </p>
                                        <button class="read-more-case-study-home"
                                            onclick="window.location.href='case-studys';">Read More<i
                                                class="fa-solid fa-arrow-right"></i></button>


                                    </div>
                                </div>
                                <div class="Results_sect1">
                                    <h2>Our Results</h2>
                                    <div class="Cards_Result">
                                        <div class="R1_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>€161K</h3>
                                            <p>Increase In Revenue</p>
                                        </div>
                                        <div class="R2_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>350.66%</h3>
                                            <p>ROAS Achieved</p>
                                        </div>
                                        <div class="R3_cards">
                                            <p><i class="fa-solid fa-chevrons-down"></i></p>
                                            <h3>€3.27</h3>
                                            <p>CPA Achieved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="S1">
                            <div class="content_sec1">
                                <h2 class="case-heading">ITsoftexpert Digital<span style="color: #03a4e3;">
                                        Transformation Success</span>
                                </h2>

                                <div class="Content_image">
                                    <div class="section_img">
                                        <img src="assest/testimonials-section-img.jpg" alt="Penguin Air">
                                    </div>
                                    <div class="text1_sect">
                                        <h2 class="problem-heading">Problem</h2>
                                        <p>A prominent Nexstar member servicing the Phoenix Valley, Penguin Air,
                                            Plumbing &
                                            Electrical first came to Blue Corona in 2019 in search of a new digital
                                            marketing
                                            partner. A once well-established brand in the Valley community, Penguin was
                                            quickly
                                            losing rankings, visibility, and customers to competitors that outranked and
                                            outperformed them on search engines.</p>
                                        <h2 class="solution-heading">Solutions</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, earum
                                            labore, sequi amet tempore minima vitae debitis ad facere est, vero sed?
                                            Sed,
                                            velit doloremque laborum quos mollitia porro inventore ea ipsa consequuntur
                                            excepturi sunt sit nesciunt voluptates veritatis eveniet! Dicta tempora
                                            sequi
                                            iusto molestiae quasi tempore quos praesentium maxime?</p>
                                        </p>
                                    </div>
                                </div>
                                <div class="Results_sect1">
                                    <h2>Our Results</h2>
                                    <div class="Cards_Result">
                                        <div class="R1_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                        <div class="R2_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                        <div class="R3_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Slide 3 -->
                        <div class="S1">
                            <div class="content_sec1">
                                <h2 class="case-heading">ITsoftexpert Digital<span style="color: #03a4e3;">
                                        Transformation Success</span>
                                </h2>

                                <div class="Content_image">
                                    <div class="section_img">
                                        <img src="assest/testimonials-section-img.jpg" alt="Penguin Air">
                                    </div>
                                    <div class="text1_sect">
                                        <h2 class="problem-heading">Problem</h2>
                                        <p>A prominent Nexstar member servicing the Phoenix Valley, Penguin Air,
                                            Plumbing &
                                            Electrical first came to Blue Corona in 2019 in search of a new digital
                                            marketing
                                            partner. A once well-established brand in the Valley community, Penguin was
                                            quickly
                                            losing rankings, visibility, and customers to competitors that outranked and
                                            outperformed them on search engines.</p>
                                        <h2 class="solution-heading">Solutions</h2>
                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, earum
                                            labore, sequi amet tempore minima vitae debitis ad facere est, vero sed?
                                            Sed,
                                            velit doloremque laborum quos mollitia porro inventore ea ipsa consequuntur
                                            excepturi sunt sit nesciunt voluptates veritatis eveniet! Dicta tempora
                                            sequi
                                            iusto molestiae quasi tempore quos praesentium maxime?</p>
                                        </p>
                                    </div>
                                </div>
                                <div class="Results_sect1">
                                    <h2>Our Results</h2>
                                    <div class="Cards_Result">
                                        <div class="R1_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                        <div class="R2_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                        <div class="R3_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide 4 -->
                        <div class="S1">
                            <div class="content_sec1">
                                <h2 class="case-heading">ITsoftexpert Digital<span style="color: #03a4e3;">
                                        Transformation Success</span>
                                </h2>

                                <div class="Content_image">
                                    <div class="section_img">
                                        <img src="assest/testimonials-section-img.jpg" alt="Penguin Air">
                                    </div>
                                    <div class="text1_sect">
                                        <h2 class="problem-heading">Problem</h2>
                                        <p>Our client had invested significantly in a business which provides automotive
                                            custom paint products, was currently facing challenges with their existing
                                            Shopify website. Despite spending over £3000 in UK, they were unable to
                                            implement a custom webhook solution to effectively display car models and
                                            match them with the corresponding paint products they have been selling.</p>
                                        <h2 class="solution-heading">Solutions</h2>
                                        <p>The need of the hour was to address these challenges and enhance the
                                            functionality of the Shopify website – https://touchuppaint.co.uk, there is
                                            a critical need to develop and integrate a custom webhook solution that
                                            accurately displays car models and matches them with the corresponding paint
                                            products.</p>
                                        </p>
                                    </div>
                                </div>
                                <div class="Results_sect1">
                                    <h2>Our Results</h2>
                                    <div class="Cards_Result">
                                        <div class="R1_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                        <div class="R2_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                        <div class="R3_cards">
                                            <p><i class="fa-solid fa-chevrons-up"></i></p>
                                            <h3>$34M</h3>
                                            <p>Digital Marketing Revenue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- Navigation Buttons -->
                    <!-- <button class="prev-btn">❮</button>
                    <button class="next-btn">❯</button>
                </div> -->
                </div>
                <!-- home page section 4 start -->






                <div class="s3-home-cards">
                    <div class="views3-section">
                        <h2 class="v3s-heading">Craft Your <span style="color: #03a4e3;">Perfect Solution</span></h2>
                        <h2 class="v3s-heading">From Quick Fixes to Full-Scale Management</span></h2>

                        <!-- <h2> </h2> -->
                        <!-- <h2 class="v3s-heading">Grow Your Business with ITsoftexpert</h2> -->
                        <p class="v3s-parag0apg">From one-time audits to comprehensive done-for-you services, we
                            customize
                            our
                            approach to meet your unique business
                            needs, ensuring efficiency, growth, and long-term success in every step of the process</p>
                    </div>

                    <section3 class="sec3-home-page">

                        <div id="s3-cards">
                            <div id="s3-card1">
                                <div id="c1-left">
                                    <h3>Your Business, Fully Handled
                                    </h3>
                                    <p>We take the reins, manage it all, and keep you updated—stress-free.</p><br>
                                </div>
                                <div id="c1-right">
                                    <img src="assest/funnel-img/homepage/103.png" alt="">
                                </div>
                            </div>
                            <div id="s3-card2">
                                <div id="s3-card-top">
                                    <h3>Deep SEO Audit</h3>
                                    <p>Get detailed to-do’s to hit your goals
                                        faster than ever before.</p>
                                    <img src="assest/funnel-img/homepage/1.png" alt="">
                                </div>
                            </div>
                            <div id="s3-card3">
                                <div id="s3-card-top">
                                    <h3>Custom Web Solutions
                                    </h3>
                                    <p>We create high-performance websites that align perfectly with your business
                                        goals.

                                    </p>
                                    <img src="assest/funnel-img/homepage/6.png" alt="">
                                </div>
                            </div>
                            <div id="s3-card4">
                                <div id="s3-card-top">
                                    <h3>Ongoing Consulting</h3>
                                    <p>Get ongoing step-by-step advice
                                        with data-driven prioritization.</p>
                                    <img src="assest/funnel-img/homepage/80.png" alt="">
                                </div>
                            </div>
                            <div id="s3-card5">
                                <div id="s3-card-top">
                                    <h3>Pure Performance</h3>
                                    <p>Revenue split partnership. Less risk for you,
                                        higher reward for us.</p>
                                    <img src="assest/funnel-img/homepage/190.png" alt="">
                                </div>
                            </div>
                        </div>
                    </section3>
                </div>

                <section class="testimonials-main-section">
                    <div class="sec-testimonials"><br>
                        <h2 class="sec4-logos-heading">Client Testimonials <span style="color: #03a4e3;"> for
                                ITsoftexpert
                            </span></h2>
                        <p class="v3s-parag0apg">Discover how ItSoftExpert has helped businesses thrive with tailored IT
                            solutions and exceptional service, as shared by
                            our satisfied clients
                        </p>
                    </div>
                    <div class="testimonials-section">
                        <div class="testimonials-container">
                            <div class="testimonial-card video-card">
                                <video id="testimonial-vid" muted loop controls
                                    src="testimonials-video-luey.mp4"></video>
                                <!-- <img src="assest/funnel-img/testimonials/ss.jpeg" alt=""> -->
                                <div class="stars">
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                </div>
                                <h3>Luey Wilson</h3>
                                <p>Outstanding work carried out, great communication and support after the job was
                                    complete.
                                    Would highly recommend and will use again. [19 May, 2022] Brilliant work from start
                                    to finish, highly recommend</p>
                                <!-- <span>lueywilson</span> -->
                            </div>

                            <div class="testimonial-card " id="addition">
                                <h3>Sandeep Sharma</h3>
                                <p>
                                    With ITSoftExpert’s local SEO services, our business is now one of the top results
                                    in local searches. Their
                                    optimization of our Google My Business profile and local citations has driven more
                                    foot traffic and calls. For anyone
                                    needing local SEO, ITSoftExpert is unbeatable!
                                </p>
                            </div>

                            <div class="testimonial-card video-card">
                                <video id="testimonial-vid" muted loop controls
                                    src="IT Softexpert reviews digital marketing.mp4"></video>
                                <div class="stars">
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                </div>
                                <h3>Jay Cramblit</h3>
                                <p>Nish
                                    (IT SoftExpert)
                                    Regarding site set up, development and launch on the web.
                                    ___________________
                                    Amazing!
                                    *Detailed, *Page Development, *Problem Solving as they came on shopping cart set up.
                                    Highly recommend her.

                                    Sincerely,
                                    Jay Cramblit
                                    President/CEO
                                    SIGNATURE AMERICAN INDUSTRIES</p>
                                <!-- <span>Jonathan Bennett, Clearly Then</span> -->
                            </div>

                            <div class="testimonial-card">
                                <h3>John O.
                                </h3>
                                <p>They are excellent. They demonstrate an indepth knowledge of business apps and able to relate requirements back to you in a timely and complete fashion. i really enjoyed working with them.</p>
                            </div>

                            <div class="testimonial-card video-card1">
                                <img src="assest/funnel-img/testimonials/ss.jpeg" alt="">
                                <div class="stars">
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                    <i class="fa-sharp fa-solid fa-star fa-beat fa-xs" style="color: #FFD43B;"></i>
                                </div>
                                <h3>Ray Gilbride</h3>
                                <p>ITsoftexpert came in and not only corrected all mistakes that had been made, but
                                    improved the site and we made our
                                    public roll out. I trust then and you will have a very good experience with them.
                                    They are now my go to people for all
                                    tech needs</p>
                                <!-- <span>Chris Schwager, Chris Connects</span> -->
                            </div>

                            <div class="testimonial-card">
                                <h3>Julien W.</h3>
                                <p>They are excellent ! They have a good knowledge, understood our requirements and delivered what was needed!</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="blog-section-main">
                    <div class="sec-blog-head">
                        <h2 class="sec4-logos-heading">Stay Ahead with <span style="color: #03a4e3;"> ItSoftexpert’s
                                Blog
                            </span></h2>
                        <p class="v3s-parag0apg">Discover how ItSoftExpert has helped businesses thrive with tailored IT
                            solutions and exceptional service, as shared by
                            our satisfied clients
                        </p>
                    </div>
                    <div class="Blog_section">
                        <div class="Blog_Boxs">
                            <img src="assest/funnel-img/blog_img/1.webp" alt="Blog Image">
                            <div class="meta_text_blog">Date: Feb 13, 2025 | Comments: 5 </div>
                            <div class="Title_heading_blog">Digital Marketing Institute at ItsoftExpert</div>
                            <div class="Descrip_blog_para">In this fast-evolving landscape, digital marketing has become
                                an essential skill.

                            </div>
                        </div>
                        <div class="Blog_Boxs">
                            <img src="assest/funnel-img/blog_img/2.webp" alt="Blog Image">
                            <div class="meta_text_blog">Date: Jan 31, 2025 | Comments: 3 </div>
                            <div class="Title_heading_blog">Digital Marketing with ItSoftExpert in Ambala</div>
                            <div class="Descrip_blog_para">Is establishing a prosperous career in digital marketing your
                                goal? Want to upskill?
                            </div>
                        </div>
                        <div class="Blog_Boxs">
                            <img src="assest/funnel-img/blog_img/3.webp" alt="Blog Image">
                            <div class="meta_text_blog">Date: Jan 9, 2025 | Comments: 8 </div>
                            <div class="Title_heading_blog">Google’s August 2024 Core Algorithm Update</div>
                            <div class="Descrip_blog_para">Google’s eagerly anticipated August 2024 Core Update was made
                                available on August 15.
                            </div>
                        </div>
                            
                    </div>

                </section>
                <footer class="footer">
                    <div class="footer-logo">
                        <img src="assest/logos/logo-blue.png" alt="KlientBoost Logo">
                    </div>

                    <div class="footer-container">
                        <div class="footer-column">
                            <h4>AGENCY</h4>
                            <ul>
                                <li><a href="/service">Services</a></li>
                                <li><a href="/">Results</a></li>
                                <li><a href="/#">Blog</a></li>
                                <li><a href="/#">Careers <span style="color: red;">HIRING</span></a></li>
                                <li><a href="/#">Partner Program</a></li>
                                <li><a href="/#">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>PAID ADVERTISING</h4>
                            <ul>
                                <li><a href="/pay-per-click-services">PPC Agency</a></li>
                                <li><a href="/seo-services">Facebook Ads Agency</a></li>
                                <li><a href="/seo-services">Google Ads Agency</a></li>
                                <li><a href="/seo-services">SEM Agency</a></li>
                                <li><a href="/pay-per-click-services">PPC Management</a></li>
                                <li><a href="/seo-services">LinkedIn Ads Agency</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>SEO</h4>
                            <ul>
                                <li><a href="/">Content Marketing Agency</a></li>
                                <li><a href="/seo-services">SEO Agency</a></li>
                                <li><a href="/#">Link Building Services</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>CONVERSION</h4>
                            <ul>
                                <li><a href="/#">Conversion Rate Optimization</a></li>
                                <li><a href="/#">Landing Page Agency</a></li>
                                <li><a href="/#">Landing Page Design</a></li>
                            </ul>
                        </div>

                        <div class="footer-column">
                            <h4>EMAIL MARKETING</h4>
                            <ul>
                                <li><a href="/#">Email Marketing Agency</a></li>
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
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/0.155.0/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/automat/controlkit.js@master/bin/controlKit.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/sheryjs/dist/Shery.js"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script>
    // Sticky header
    window.addEventListener("scroll", function () {
        const header = document.getElementById("main-header");
        const bannerHeight = document.querySelector(".banner").offsetHeight;
        header.classList.toggle("sticky", window.scrollY >= bannerHeight);
    });

    // Loader video
    const vid = document.getElementById('loaderVideo');
    const ldr = document.getElementById('loader');

    function playVideo() {
        vid.play().then(() => {
            gsap.to(vid, { opacity: 1, duration: 2 });
            setTimeout(() => {
                gsap.to(ldr, { opacity: 0, duration: 1, onComplete: () => ldr.remove() });
            }, 3100);
        }).catch(err => console.log("Autoplay blocked:", err));
    }

    vid.addEventListener('loadeddata', playVideo);
    window.onload = () => { if (vid.readyState >= 3) playVideo(); };

    // Animate numbers
    function animateValue(id, start, end, duration, suffix = '') {
        let obj = document.getElementById(id);
        let range = end - start;
        let startTime = null;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            let progress = Math.min((timestamp - startTime) / duration, 1);
            obj.textContent = Math.floor(progress * range + start) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
    }

    window.onload = function () {
        animateValue("stat1", 0, 100, 2000, "%");
        animateValue("stat2", 0, 500, 2000, "K");
        animateValue("stat3", 0, 20, 2000, "%");
        animateValue("stat4", 0, 1, 2000, "B");
    };

    // GSAP ScrollTrigger animations
    gsap.registerPlugin(ScrollTrigger);
    
    let header = document.querySelector(".headernew");
    let logo = document.querySelector(".logo img");
    let mobileLogo = document.querySelector("#mobile-logo img");

    gsap.to(header, {
        backgroundColor: "#ffffff",
        scrollTrigger: {
            trigger: ".revenue-ptext",
            start: "top 50%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.to("#tb", {
        color: "#000",
        scrollTrigger: {
            trigger: ".second",
            start: "top 50%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.to(logo, {
        attr: { src: "assest/logos/logo-blue.png" },
        scrollTrigger: {
            trigger: ".revenue-ptext",
            start: "top 50%",
            toggleActions: "play none none reverse",
        },
    });

    gsap.to(mobileLogo, {
        attr: { src: "assest/logos/logo-white.webp" },
        scrollTrigger: {
            trigger: ".revenue-ptext",
            start: "top 50%",
            toggleActions: "play none none reverse",
        },
    });

    ScrollTrigger.create({
        trigger: ".revenue-ptext",
        start: "top 50%",
        toggleClass: { targets: ".headernew", className: "dark-header" },
    });

</script>


    <script src="{{asset('js/newheader.js')}}"></script>
</body>

</html>