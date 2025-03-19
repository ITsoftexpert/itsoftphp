@extends('layout/structure')

@section('section')
<link rel="stylesheet" href="{{asset('css/cc.css')}}">
    <!-- headernew start -->
    <headernew class="headernew internalpageshead">
        <div class="main-headernew-conta">
            <div class="row v-center">
                <div class="headernew-item item-left">
                    <div class="logonew">
                        <a href="index.html"><img class="internal-page-logo" src="assest/logos/logo-blue.png"
                                alt=""></a>
                    </div>
                </div>
                <!-- menunew start here -->
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
                                <a href="#">Services <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew mega-menunew mega-menunew-column-4">
                                    <div class="list-item">
                                        <h4 class="title">Digital Marketing</h4>
                                        <ul>

                                            <li><a href="seo-services.html">SEO</a></li>
                                            <li><a href="pay-per-click-services.html">PPC Advertising</a></li>
                                            <li><a href="social-media-marketing-services.html">Social Media
                                                    Marketing</a></li>
                                            <li><a href="content-marketing-services.html">Content Marketing</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Web Development</h4>
                                        <ul>
                                            <li><a href="website-development-services.html">Custom Website
                                                    Development</a></li>
                                            <li><a href="e-commerce-solutions-services.html">E-commerce Solutions</a>
                                            </li>
                                            <li><a href="custom-software-solutions-services.html">CMS Development</a>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">App Development</h4>
                                        <ul>
                                            <li><a href="ios-android-app-development-services.html">iOS & Android App
                                                    Development</a></li>
                                            <li><a href="hybrid-app-solutions-services.html">Hybrid App Solutions</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Software Development</h4>
                                        <ul>
                                            <li><a href="custom-software-solutions-services.html">Custom Software
                                                    Solutions</a></li>
                                            <li><a href="enterprice-Software-Integration.html">Enterprise Software
                                                    Integration</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-item">
                                        <h4 class="title">Automation Services</h4>
                                        <ul>
                                            <li><a href="marketing-automation-services.html">Marketing Automation</a>
                                            </li>
                                            <li><a href="workflow-automation-services.html">Workflow Automation</a></li>
                                            <li><a href="crm-solutions-services.html">CRM Solutions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="menunew-item-has-children">
                                <a href="#">Industries We Serve <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="healthcare.html">Healthcare</a></li>
                                        <li><a href="education.html">Education</a></li>
                                        <li><a href="retail-e-commerce.html">Retail & E-commerce</a></li>
                                        <li><a href="realestate.html">Real Estate</a></li>
                                        <li><a href="startups-small-buisnesses.html">Startups & Small Businesses</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menunew-item-has-children">
                                <a href="#">Case Studies <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="sucess-stories.html">Success Stories</a></li>
                                        <li><a href="#">Client Testimonials</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="Blog.html">Blog</a>
                            </li>
                            <li class="menunew-item-has-children">
                                <a href="about.html">About Us <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="#">Company Overview</a></li>
                                        <li><a href="#">Mission & Vision</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menunew-item-has-children">
                                <a href="#">Contact Us <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="contact-form.html">Contact Form</a></li>
                                        <li><a href="#">Office Locations</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- menunew end here -->
                <div class="headernew-item item-right">
                    <button class="get-in-touch" onclick="window.location.href='connect-with-itsoftexpert.html'">
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

    <div class=" banner-section-serc-page">
        <div class="cta-section-service-page">
            <h1 class="cta-heading"     >
                From Clicks to Conversions How TouchUpPaint Increased Sales by 300% in 3 Months
            </h1>
            <p class="v3s-parag0apg">How TouchUpPaint Boosted Online Sales by 300% with Custom API Integration, SEO & Google Ads – Achieving £131K in Added Revenue, 79295+ New Conversions, and 180% More Organic Clicks in Just 3 Months.
            </p>
            <div class="btn-service-banner">
                <a href="#" class="cta-button">Start Your Project Today </a>
            </div>
            <!-- <p class="v3s-parag0apg">See how we can guide you towards smarter financial decisions and a more secure
                future.

            </p> -->
        </div>
    </div>
    <div id="s1-img-container">
        <div id="image-left">
            <img src="assest/funnel-img/Finance and banking/21.png" alt="">
        </div>
        <div id="image-right">
            <img src="assest/funnel-img/Finance and banking/22.png" alt="">
        </div>
    </div>

    <h2 style="text-align: center;" class="v3s-heading">Case-Study <span
            style="color: #03a4e3;">Deep-Dive</span>
    </h2><br><br><br>
    <div id="faq-section1">
        <div id="left-img">
            <div style="display: flex;">
                <video muted loop controls src="testimonials-video-luey.mp4"></video>
                <div>
                    <img src="assest/funnel-img/cartouch ss/WhatsApp Image 2025-03-12 at 16.54.36.jpeg" alt="">
                    <img src="assest/funnel-img/cartouch ss/WhatsApp Image 2025-03-12 at 16.55.06.jpeg" alt="">
                </div>
            </div>
        </div>
        <div id="right">
            <p id="quote">"<i>Outstanding work carried out, great communication and support after the job was
                complete.
                Would highly recommend and will use again. [19 May, 2022] Brilliant work from start
                to finish, highly recommend"</i></p>
            <p id="by">Luey Wilson</p>
        </div>
    </div>

    <div id="trigger" style="display: flex;">
        <div id="sec">
            <div id="line">
                <div id="circle"></div>
                <h3 id="heading">Client Overview</h3>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <h5>Client : <span style="opacity: 60%; font-weight: 500;">TouchUpPaint</span> </h5>
                <h5>Industry : <span style="opacity: 60%; font-weight: 500;">Automotive Paint & Accessories
                </span> </h5>
            </div>
            <p id="content-area">TouchUpPaint, a leading provider of automotive paint solutions, specializes in precision color matching for various car models. They approached ITSoftExpert to enhance their online presence, optimize their Shopify store, and scale their paid marketing campaigns.</p>

                <br><br>
                <h2 class="sub-heading-cstudy">Services Provided</h2>

                <br>
                <ul id="unset">
                    <li class="case-pts">Website Development</li>
                    <li class="case-pts">Shopify Customization</li>
                    <li class="case-pts">API Integration</li>
                    <li class="case-pts">SEO</li>
                    <li class="case-pts">Google Analytics</li>
                    <li class="case-pts">Google Ads</li>
                </ul>
            
            <br><br><br>


        </div>

        <div>
            <div id="services-used">Services Used</div>
            <div id="cards">
                <div id="card">
                    <h3>Website Development</h3>
                </div>
                <div id="card">
                    <h3>Shopify Customization</h3>
                </div>
                <div id="card">
                    <h3>API Integration
                    </h3>
                </div>
                <div id="card">
                    <h3>SEO</h3>
                </div>
                <div id="card">
                    <h3>Google Analytics
                    </h3>
                </div>
                <div id="card">
                    <h3>Google Ads
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div style="display: flex; gap: 3rem; margin-left: 6rem;">
        <div class="boxl">
            <h4>+35%</h4>
            <p>INCREASE PAGE LOAD SPEED</p>
        </div>
        <div class="boxl">
            <h4>377.17%</h4>
            <p>TOTAL ROAS IMPROVEMENT</p>
        </div>

    </div>
    <div id="sec">
        <div style="display: flex;">
            <div>
                <div id="line">
                    <div id="circle"></div>
                    <h3 id="heading">Why TouchUpPaint Needed a Digital Transformation</h3>
                </div>
                <p id="content-area2">TouchUpPaint knew they had a high-quality product that customers needed—precision color-matched automotive paint solutions. However, reaching the right audience and ensuring a seamless shopping experience was a challenge.

                    <br><br>
                    With their website being the central hub of their eCommerce business, TouchUpPaint needed a <b>faster, more user-friendly platform</b> that could handle <b>high traffic, reduce bounce rates, and improve conversions.</b> They also wanted to integrate an <b>automated vehicle registration checker</b> to make it easier for customers to find the exact paint match for their car.

                    <br><br>
                    Despite running paid advertising campaigns, their <b>Google Ads performance was inefficient,</b> leading to <b>high ad spend with minimal conversions.</b> On top of that, <b>low organic visibility</b> and <b>weak SEO rankings</b> made it difficult for them to attract potential customers through search engines.

                    <br><br>
                    That’s when they turned to <b>ITSoftExpert </b>—to transform their website, enhance their marketing strategy, and drive real revenue growth.

                </p>
            </div>

        </div>
    </div>
    <div id="sec">
        <div style="display: flex;">
            <div>
                <div id="line">
                    <div id="circle"></div>
                    <h3 id="heading">The Strategy That Drove Growth for TouchUpPaint
                    </h3>
                </div>
                <p id="content-area2">The journey to <b>increased sales and online growth</b> for TouchUpPaint began with their <b>website</b>. Recognizing that a seamless <b>user experience and automation</b> were critical to improving conversions, ITSoftExpert developed a <b>custom Shopify solution</b> that included:
                </p><br><br>
                <ul id="unset">
                    <li class="case-pts"><b>Integration of a UK Vehicle Registration Checker API</b> to allow customers to instantly find the perfect paint match for their vehicle.
                    </li><br>
                    <li class="case-pts"><b>A complete Shopify website revamp,</b> improving site speed, navigation, and checkout flow.
                    </li><br>
                    <li class="case-pts"><b>Enhanced mobile responsiveness</b> to ensure a smooth shopping experience across all devices.
                    </li><br>
                    <li class="case-pts"><b>Optimized eCommerce features</b> reducing bounce rates and improving customer engagement.
                    </li><br>

                </ul>
                <p id="content-area2">Once the website was optimized, it was time to <b>drive targeted traffic and increase conversions.</b> The ITSoftExpert team implemented a <b>data-driven digital marketing strategy</b> that included <b>SEO, Google Ads, and advanced analytics tracking.</b>
                    <br><br>
                    This <b>custom growth strategy</b> included: <br><br>
                </p>
                <ul id="unset">
                    <li class="case-pts"><b>SEO enhancements,</b> including optimized product pages, improved site structure, and high-authority backlinks, resulting in a <b>180% increase in organic clicks.</b>
                    </li><br>
                    <li class="case-pts"><b>Performance Max and Search Ads campaigns,</b> fine-tuned with targeted keywords and optimized ad copy, leading to <b>1295 new conversions and £131K in added revenue.</b>
                    </li><br>
                    <li class="case-pts"><b>Google Analytics & conversion tracking setup,</b> allowing TouchUpPaint to monitor customer behavior, track purchases, and optimize their sales funnel.</b>
                    </li><br>
                </ul>
                <p id="content-area2">With a <b>high-performing website</b> and a <b>strong multi-channel marketing approach,</b> TouchUpPaint successfully <b>scaled its online presence, improved ROI, and boosted revenue.</b>
                </p>
            </div>
        </div>
    </div>
    <div id="sec">
        <div>
            <div>
                <div id="line">
                    <div id="circle"></div>
                    <h3 id="heading">The Results
                    </h3>
                </div><br>
                <div class="sect">
                    <h2>📈 Website Performance Growth</h2>
                    <table class="metrics-table">
                        <thead>
                            <tr>
                                <th>Metric</th>
                                <th>Improvement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Page Load Speed</td>
                                <td class="positive">+35% Faster</td>
                            </tr>
                            <tr>
                                <td>Mobile Responsiveness Score</td>
                                <td class="negative">95%</td>
                            </tr>
                            <tr>
                                <td>Bounce Rate Reduction</td>
                                <td class="positive">-22%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sect">
                    <h2>📊 SEO Improvements
                    </h2>
                    <table class="metrics-table">
                        <thead>
                            <tr>
                                <th>Metric</th>
                                <th>Before</th>
                                <th>After</th>
                                <th>% Change</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Clicks</td>
                                <td>885</td>
                                <td>2.48K</td>
                                <td class="positive">+180%</td>
                            </tr>
                            <tr>
                                <td>Total Impressions</td>
                                <td>89K</td>
                                <td>197K</td>
                                <td class="positive">+220%</td>
                            </tr>
                            <tr>
                                <td>Average CTR</td>
                                <td>0.8%</td>
                                <td>1.3%</td>
                                <td class="positive">+63%</td>
                            </tr>
                            <tr>
                                <td>Avg. Position</td>
                                <td>36.8</td>
                                <td>21.3</td>
                                <td class="positive">+42%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sect">
                    <h2>💰 Google Ads & Revenue Boost
                    </h2>
                    <table class="metrics-table">
                        <thead>
                            <tr>
                                <th>Metric</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Conversion Value Increase</td>
                                <td class="positive">+£131,289.13</td>
                            </tr>
                            <tr>
                                <td>Total Conversions Growth</td>
                                <td class="positive">+1295.52</td>
                            </tr>
                            <tr>
                                <td>Performance Max Campaign ROAS</td>
                                <td class="positive">£18,985.40</td>
                            </tr>
                            <tr>
                                <td>Search Campaign Conversions</td>
                                <td class="positive">+975.91</td>
                            </tr>
                            <tr>
                                <td>ROAS Improvement</td>
                                <td class="positive">377.17%</td>
                            </tr>
                            <tr>
                                <td>Cost Per Conversion</td>
                                <td class="negative">£3.14</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="sect">
                    <h2>📦 Sales & Revenue Impact</h2>
                    <table class="metrics-table">
                        <thead>
                            <tr>
                                <th>Metric</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Sales in 3 Months</td>
                                <td class="positive">£167,440.02</td>
                            </tr>
                            <tr>
                                <td>Orders Processed</td>
                                <td class="positive">14,715</td>
                            </tr>
                            <tr>
                                <td>Conversion Rate</td>
                                <td class="positive">4.95% <span class="positive-change">( +3% )</span></td>
                            </tr>
                            <tr>
                                <td>Total Sessions</td>
                                <td class="positive">93,295</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="CTA_page_section">
        <div class="cta-section">
            <h1 class="cta-heading">
                Want to see the same results for your business?

            </h1>
            <a href="#" class="cta-button">📞 Contact us today and let’s scale your brand with expert digital solutions!

            </a>
        </div>

    </div>
@endsection