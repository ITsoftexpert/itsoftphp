@extends('layout/structure')

@section('section')
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <!-- headernew start -->
    <headernew class="headernew internalpageshead">
        <div class="main-headernew-conta">
            <div class="row v-center">
                <div class="headernew-item item-left">
                    <div class="logonew">
                        <a href="/"><img class="internal-page-logo" src="/assest/logos/logo-blue.png"
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
                                <a href="/#">Services <i class="fa-solid fa-caret-down"></i></a>
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
                                <a href="/#">Industries We Serve <i class="fa-solid fa-caret-down"></i></a>
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
                                <a href="/#">Case Studies <i class="fa-solid fa-caret-down"></i></a>
                                <div class="sub-menunew single-column-menunew">
                                    <ul>
                                        <li><a href="/sucess-stories">Success Stories</a></li>
                                        <li><a href="/#">Client Testimonials</a></li>
                                        <li><a href="/#">Portfolio</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="/blog">Blog</a>
                            </li>
                            <li class="menunew-item-has-children">
                                <a href="/about">About Us <i class="fa-solid fa-caret-down"></i></a>
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
                                <a href="/#">Contact Us <i class="fa-solid fa-caret-down"></i></a>
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
                <!-- menunew end here -->
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


    <div id="form" class="main-contact-form-niti">

        <div class="views3-section">
            <h2 class="main-contact-head">Ready to grow <span style="color: #03a4e3;">your revenue?</span></h2>

            <p class="v3s-parag0apg">Have questions or need support? Our team at ItSoftExpert is ready to assist you
                with any inquiries,
                technical issues, or service-related concerns. Feel free to reach out, and we'll get back to you as soon
                as possible.</p>
        </div>
        <div class="contact-form-sec-div-main">
            <div id="form-cont">
                <form>
                    <h2>Request a FREE Proposal Now!</h2>
                    <div class="form-group">
                        <div>
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="johndoe@email.com" required>
                        </div>
                        <div>
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="website">Website</label>
                            <input type="url" id="website" name="website" placeholder="www.example.com" required>
                        </div>
                        <div>
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company" placeholder="Example" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="spc" id="phone" name="phone" placeholder="(000) 000-0000" required>
                        </div>
                        <div>
                            <label for="budget">Project Budget *</label>
                            <select id="budget" id="spc" name="budget" required>
                                <option selected value="" disabled style="color: lightgray;">Select project budget
                                </option>
                                <option value="Under $500">Under $500</option>
                                <option value="$500 - $1000">$500 - $1000</option>
                                <option value="$1000 - $5000">$1000 - $5000</option>
                                <option value="Above $5000">Above $5000</option>
                            </select>
                        </div>
                    </div>
                    <label for="description">Comments or Questions</label>
                    <textarea id="description" name="description"
                        placeholder="Tell us about your project..."></textarea>
                    <button id="get-in-touch" type="submit">Get My Custom Quote</button>
                </form>
            </div>
            <div id="form-img">
                <img src="assest/funnel-img/faq.png" alt="">
            </div>
        </div>
    </div>


    <!-- footer  section start  -->
