<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Marketing CTA Form</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle, #1a1a2e, #16213e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            min-height: 100vh;
            margin: 0;
            overflow-y: auto;
            padding: 20px;
        }

        .smm-cta-container {
            width: 100%;
            max-width: 550px;
            padding: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0, 255, 255, 0.3);
            backdrop-filter: blur(20px);
            /* text-align: center; */
            position: relative;
            color: white;
            border: 2px solid rgba(0, 255, 255, 0.5);
        }

        .smm-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .smm-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .smm-cta-input,
        .smm-cta-select {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            outline: none;
            border-bottom: 2px solid #00ffff;
            transition: 0.3s;
        }

        .smm-cta-button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(45deg, #00ffff, #ffcc00);
            color: white;
            font-size: 18px;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .smm-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
        option{
            background-color: grey;
            border-bottom: 2px soli white;
        }
    </style>
</head>

<body>
    <div class="smm-cta-container">
        <div class="smm-cta-heading">📢 Boost Your Brand!</div>
        <div class="smm-cta-subtext">Dominate Social Media with Our Expert Strategies</div>
        <p>Get a Free Social Media Strategy Consultation</p>
        <form id="smm-cta-form" method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="smm-cta-input" id="smm-name" name="name" placeholder=" " required>
                <label for="smm-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="smm-cta-input" id="smm-email" name="email" placeholder=" " required>
                <label for="smm-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="smm-cta-input" id="smm-phone" name="phone_number" placeholder=" " required>
                <label for="smm-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="social-media" required>                
            </div>
            <div class="input-group">
                <input type="url" class="smm-cta-input" id="smm-website" name="web_url" placeholder=" ">
                <label for="smm-website">Your Website (Optional)</label>
            </div>
            <div class="input-group">
                <input type="url" class="smm-cta-input" id="smm-facebook" name="fb_link" placeholder=" ">
                <label for="smm-facebook">Facebook Page Link</label>
            </div>
            <div class="input-group">
                <input type="url" class="smm-cta-input" id="smm-instagram" name="insta_link" placeholder=" ">
                <label for="smm-instagram">Instagram Profile Link</label>
            </div>
            <div class="input-group">
                <input type="text" class="smm-cta-input" id="smm-budget" name="budget" placeholder=" " required>
                <label for="smm-budget">Your Ad Budget</label>
            </div>
            <div class="input-group">
                <textarea class="smm-cta-input" id="smm-message" name="goals" placeholder=" "></textarea>
                <label for="smm-message">Your Social Media Goals (Optional)</label>
            </div>
            <div class="input-group">
                <select class="smm-cta-select" id="smm-platform" name="category">
                    <option value="facebook">Facebook Marketing</option>
                    <option value="instagram">Instagram Marketing</option>
                    <option value="linkedin">LinkedIn Marketing</option>
                    <option value="tiktok">TikTok Marketing</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <button type="submit" class="smm-cta-button">📢 Get Your Free Strategy Call</button>
        </form>
    </div>
</body>

</html>