<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hybrid App Development CTA Form</title>
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

        .app-cta-container {
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

        .app-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .app-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .app-cta-input,
        .app-cta-select {
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

        .app-cta-button {
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

        .app-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="app-cta-container">
        <div class="app-cta-heading">📱 Struggling to Build a High-Performance App?</div>
        <div class="app-cta-subtext">Get Your Free iOS/Android App Blueprint</div>
        <p>Mobile users expect speed, seamless experience, and reliability. Let’s build your perfect app.</p>
        <form id="app-cta-form" method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="app-cta-input" id="app-name" name="name" placeholder=" " required>
                <label for="app-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="app-cta-input" id="app-email" name="email" placeholder=" " required>
                <label for="app-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="app-cta-input" id="app-phone" name="phone_number" placeholder=" " required>
                <label for="app-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="hybrid-app" required>                
            </div>
            <div class="input-group">
                <input type="url" class="app-cta-input" id="app-existing" name="web_url" placeholder=" ">
                <label for="app-existing">Existing App (if any)</label>
            </div>
            <div class="input-group">
                <input type="text" class="app-cta-input" id="app-budget" name="budget" placeholder=" " required>
                <label for="app-budget">Your Development Budget</label>
            </div>
            <div class="input-group">
                <textarea class="app-cta-input" id="app-requirements" name="goals" placeholder=" "></textarea>
                <label for="app-requirements">App Features & Goals</label>
            </div>
            <div class="input-group">
                <select class="app-cta-select" id="app-platform" name="category">
                    <option value="ios">iOS App</option>
                    <option value="android">Android App</option>
                    <option value="both">Both iOS & Android</option>
                    <option value="hybrid">Hybrid (React Native, Flutter)</option>
                </select>
            </div>
            <button type="submit" class="app-cta-button">📱 Get Your Free App Consultation</button>
        </form>
    </div>
</body>

</html>