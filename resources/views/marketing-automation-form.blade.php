<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketing Automation CTA Form</title>
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

        .automation-cta-container {
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

        .automation-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .automation-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .automation-cta-input,
        .automation-cta-select {
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

        .automation-cta-button {
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

        .automation-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="automation-cta-container">
        <div class="automation-cta-heading">⚡ Struggling to Automate Your Marketing Efforts?</div>
        <div class="automation-cta-subtext">Supercharge Your Marketing Now</div>
        <p>Drive more sales with intelligent automation tailored to your business needs.</p>
        <form id="automation-cta-form"  method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="automation-cta-input" id="automation-name" name="name" placeholder=" " required>
                <label for="automation-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="automation-cta-input" id="automation-email" name="email" placeholder=" " required>
                <label for="automation-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="automation-cta-input" id="automation-phone" name="phone_number" placeholder=" " required>
                <label for="automation-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="marketing-automation" required>                
            </div>
            <div class="input-group">
                <input type="url" class="automation-cta-input" id="automation-existing" name="existing_tool" placeholder=" ">
                <label for="automation-existing">Existing Marketing Tools (if any)</label>
            </div>
            <div class="input-group">
                <input type="text" class="automation-cta-input" id="automation-budget" name="budget" placeholder=" " required>
                <label for="automation-budget">Your Budget</label>
            </div>
            <div class="input-group">
                <textarea class="automation-cta-input" id="automation-requirements" name="goals" placeholder=" "></textarea>
                <label for="automation-requirements">Automation Goals & Challenges</label>
            </div>
            <div class="input-group">
                <select class="automation-cta-select" id="automation-type" name="category">
                    <option value="email">Email Marketing Automation</option>
                    <option value="crm">CRM & Sales Automation</option>
                    <option value="social">Social Media Automation</option>
                    <option value="ads">PPC & Ad Campaign Automation</option>
                </select>
            </div>
            <button type="submit" class="automation-cta-button">⚡ Get Your Free Automation Consultation</button>
        </form>
    </div>
</body>

</html>