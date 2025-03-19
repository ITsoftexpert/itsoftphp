<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/sheryjs/dist/Shery.css" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/newheader.css')}}">
    <link rel="stylesheet" href="{{asset('css/bricup.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css">
    <title>Home - Digital Marketing, Website and Mobile App Development Company</title>

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