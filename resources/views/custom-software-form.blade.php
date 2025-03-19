<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Software Solution CTA Form</title>
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

        .software-cta-container {
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

        .software-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .software-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .software-cta-input,
        .software-cta-select {
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

        .software-cta-button {
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

        .software-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="software-cta-container">
        <div class="software-cta-heading">💻 Struggling to Find the Perfect Software Solution?</div>
        <div class="software-cta-subtext">Get a Custom Software Built for Your Business</div>
        <p>Trusted by businesses looking for innovation, security, and scalability.</p>
        <form id="software-cta-form" method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="software-cta-input" id="software-name"  name="name"  placeholder=" " required>
                <label for="software-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="software-cta-input" id="software-email"  name="email"  placeholder=" " required>
                <label for="software-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="software-cta-input" id="software-phone"  name="phone_number"  placeholder=" " required>
                <label for="software-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="custom-software" required>                
            </div>
            <div class="input-group">
                <input type="url" class="software-cta-input" id="software-existing"  name="web_url"  placeholder=" ">
                <label for="software-existing">Existing Software (if any)</label>
            </div>
            <div class="input-group">
                <input type="text" class="software-cta-input" id="software-budget"  name="budget"  placeholder=" " required>
                <label for="software-budget">Your Development Budget</label>
            </div>
            <div class="input-group">
                <textarea class="software-cta-input" id="software-requirements"  name="goals"  placeholder=" "></textarea>
                <label for="software-requirements">Software Features & Goals</label>
            </div>
            <div class="input-group">
                <select class="software-cta-select" id="software-type" name="category">
                    <option value="crm">CRM Software</option>
                    <option value="erp">ERP System</option>
                    <option value="custom">Custom Software Development</option>
                    <option value="saas">SaaS Platform</option>
                </select>
            </div>
            <button type="submit" class="software-cta-button">💻 Get Your Free Software Consultation</button>
        </form>
    </div>
</body>

</html>