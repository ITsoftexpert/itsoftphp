<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Video Loader</title>
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <style>
        body, html {
            margin: 0;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }
        #loader {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000;
        }
        #loader video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
        }
    </style>
</head>
<body>

<div id="loader">
    <video id="loaderVideo" autoplay loop muted playsinline>
        <source src="Mark2_3.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

<script>
    const video = document.getElementById('loaderVideo');
    const loader = document.getElementById('loader');

    // Ensure video plays correctly
    function playVideo() {
        video.play().then(() => {
            console.log("Video playing successfully.");
            gsap.to(video, { opacity: 1, duration: 2 });

            // Hide loader after video appears
            setTimeout(() => {
                gsap.to(loader, { opacity: 0, duration: 1, onComplete: () => {
                    loader.style.display = 'none';
                } });
            }, 2000);
        }).catch(err => {
            console.log("Autoplay blocked or error:", err);
        });
    }

    // Check when video is ready
    video.addEventListener('loadeddata', () => {
        console.log("Video Loaded");
        playVideo();
    });

    // Fallback in case event doesn't fire
    window.onload = () => {
        if (video.readyState >= 3) {
            playVideo();
        }
    };
</script>

</body>
</html>
