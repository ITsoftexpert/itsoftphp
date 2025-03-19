<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study</title>
    <link rel="stylesheet" href="{{asset('css/Live_Project_Training.css')}}">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="script.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            gsap.from(".hero", { opacity: 0, y: -50, duration: 1, ease: "power2.out" });
            gsap.to(".hero-image", { opacity: 1, duration: 1, ease: "power2.out", delay: 0.5 });
            gsap.to(".section", { opacity: 1, y: 0, duration: 1, stagger: 0.3, ease: "power2.out", scrollTrigger: { trigger: ".content", start: "top 80%" } });
            gsap.to(".case-image", { opacity: 1, scale: 1, duration: 1, stagger: 0.2, ease: "power2.out", scrollTrigger: { trigger: ".image-gallery", start: "top 85%" } });
        });
    </script>
</head>

<body>
    <header class="hero">
        <h1 class="title">Best Digital Marketing Course in Ambala: Live Project Training<br> Empower Your Brand</h1>
        <!-- <p class="subtitle">January 7, 2025 | by harshita.itsoft@gmail.com | blog</p> -->
    </header>

    <img src="assest/funnel-img/blog_img/2.webp" alt="Hero Image" class="hero-image">
    <section class="content">
        <div class="section problem">
            <h2>Digital Marketing with ItSoftExpert in Ambala</h2>
            <p>Is establishing a prosperous career in digital marketing your goal? Want to upskill and stay ahead in the
                ever-evolving online marketing industry? ItsoftExpert brings you the most comprehensive Digital
                Marketing Course in Ambala, designed to equip you with in-demand skills, hands-on experience, and
                industry-recognized certifications. Whether you’re a student, job seeker, entrepreneur, or working
                professional, our course helps you unlock endless opportunities in the digital space.</p>
        </div>
        <div class="section problem">
            <h2>Why Choose ItsoftExpert’s Digital Marketing Course?</h2>
            <p>At ItsoftExpert, we believe in practical learning and real-time experience. Our digital marketing course
                is crafted by industry experts who have worked with top brands worldwide. Here’s why you should enroll
                with us:</p>
            <p><b>1. Industry-Oriented Curriculum</b></p>
            <p>Our course covers everything from the basics to advanced strategies, ensuring you become a full-stack
                digital marketer. Learn:</p>
            <p><b>SEO (Search Engine Optimization)</b> – Learn how to optimize websites to rank higher on Google, drive
                organic traffic, and increase online visibility.</p>
            <p><b>PPC (Pay-Per-Click) Advertising</b> – Understand Google Ads, Bing Ads, and paid marketing strategies
                to maximize ROI.</p>
            <p><b>Social Media Marketing (SMM):</b> Learn how to engage and build your brand on sites like Twitter,
                Facebook, Instagram, and LinkedIn.</p>
            <p><b>Content marketing:</b> Produce engaging content to draw in and win over new clients.</p>
            <p><b>Email marketing:</b> Discover how to use email campaigns to nurture prospects and uphold client
                connections.</p>
            <p><b>Google Ads & Facebook Ads </b> – Run effective ad campaigns that drive traffic and sales.</p>
        </div>
        <!-- <img height="300px" src="assest/funnel-img/blog_img/2.webp" alt="Hero Image" class="hero-image"> -->
        <div class="section images">
            <h2>Project Snapshots</h2>
            <div class="image-gallery">
                <img src="assest/funnel-img/blog_img/1.webp" alt="Snapshot 1" class="case-image">
                <img src="assest/funnel-img/blog_img/2.webp" alt="Snapshot 2" class="case-image">
                <img src="assest/funnel-img/blog_img/3.webp" alt="Snapshot 3" class="case-image">
            </div>
        </div>
        <div class="section solution">
            <h2>2. Hands-on training with Live Projects</h2>
            <p>We focus on real-time projects, enabling students to work on live campaigns, website optimization, and
                social media ads. Acquire practical experience by working away at contextual investigations and running
                your Digital Marketing Course in Ambala. You will:</p>
            <p>Build your website and optimize it for search engines.</p>
            <p>Create and manage live advertising campaigns.</p>
            <p>Develop content marketing strategies and social media plans.</p>
            <p>Use real-world case studies to understand digital marketing trends and consumer behavior.</p>
        </div>
        <div class="section results">
            <h2>3. Learn from Industry Experts</h2>
            <p>Our trainers are digital marketing professionals with years of experience. Get mentorship from experts
                who have worked on successful marketing campaigns for global brands. Benefit from: <br><br>
                <b>Customized mentorship and uncertainty clearing meetings.</b><br><br>

                <b>Regular industry insights and market trends updates.</b><br><br>
                <b>Guest lectures from top industry professionals and influencers.
                </b><br><br>

            </p>
        </div>
    </section>

    <script src="newheader.js"></script>
</body>

</html>