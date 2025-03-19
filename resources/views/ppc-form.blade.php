<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPC Campaign CTA Form</title>
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

        .ppc-cta-container {
            width: 100%;
            max-width: 550px;
            padding: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0, 255, 255, 0.3);
            backdrop-filter: blur(20px);
            text-align: left;
            position: relative;
            color: white;
            border: 2px solid rgba(0, 255, 255, 0.5);
        }

        .ppc-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #ff6a00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .ppc-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .ppc-cta-input,
        .ppc-cta-select {
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

        .ppc-cta-button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(45deg, #00ffff, #ff00ff);
            color: white;
            font-size: 18px;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .ppc-cta-button:hover {
            background: linear-gradient(45deg, #ff00ff, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="ppc-cta-container">
        <div class="ppc-cta-heading">🚀 Supercharge Your Ads!</div>
        <div class="ppc-cta-subtext">Maximize ROI with a High-Performing PPC Campaign</div>
        <p>Get a Free PPC Strategy Consultation</p>
        <form id="ppc-cta-form"  method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="ppc-cta-input" id="ppc-name" name="name" placeholder=" " required>
                <label for="ppc-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="ppc-cta-input" id="ppc-email" name="email" placeholder=" " required>
                <label for="ppc-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="ppc-cta-input" id="ppc-phone" name="phone_number" placeholder=" " required>
                <label for="ppc-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="ppc" required>                
            </div>
            <div class="input-group">
                <input type="url" class="ppc-cta-input" id="ppc-website" name="web_url" placeholder=" ">
                <label for="ppc-website">Your Website (Optional)</label>
            </div>
            <div class="input-group">
                <input type="text" class="ppc-cta-input" id="ppc-budget" name="budget" placeholder=" " required>
                <label for="ppc-budget">Your Ad Budget</label>
            </div>
            <div class="input-group">
                <textarea class="ppc-cta-input" id="ppc-message" name="goals" placeholder=" "></textarea>
                <label for="ppc-message">Your Campaign Goals (Optional)</label>
            </div>
            <div class="input-group">
                <select class="ppc-cta-select" id="ppc-platform" name="category">
                    <option value="google">Google Ads</option>
                    <option value="Facebook Ads">Facebook Ads</option>
                    <option value="LinkedIn Ads">LinkedIn Ads</option>
                    <option value="TikTok Ads">TikTok Ads</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <button type="submit" class="ppc-cta-button">🚀 Get Your Free Consultation</button>
        </form>
    </div>
</body>

</html>