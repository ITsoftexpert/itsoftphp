<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Solution CTA Form</title>
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

        .ecom-cta-container {
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

        .ecom-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .ecom-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .ecom-cta-input,
        .ecom-cta-select {
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

        .ecom-cta-button {
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

        .ecom-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="ecom-cta-container">
        <div class="ecom-cta-heading">🛒 Facing These E-commerce Challenges?</div>
        <div class="ecom-cta-subtext">Let's Build a Seamless Shopping Experience!</div>
        <p>If your online store isn't performing, we have the perfect solution.</p>
        <form id="ecom-cta-form" method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="ecom-cta-input" id="ecom-name"  name="name" placeholder=" " required>
                <label for="ecom-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="ecom-cta-input" id="ecom-email"  name="email" placeholder=" " required>
                <label for="ecom-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="ecom-cta-input" id="ecom-phone"  name="phone_number" placeholder=" " required>
                <label for="ecom-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="ecommerce" required>                
            </div>
            <div class="input-group">
                <input type="url" class="ecom-cta-input" id="ecom-existing-store" placeholder=" " name="web_url" >
                <label for="ecom-existing-store">Existing Store URL (if any)</label>
            </div>
            <div class="input-group">
                <input type="text" class="ecom-cta-input" id="ecom-budget"  name="budget" placeholder=" " required>
                <label for="ecom-budget">Your Development Budget</label>
            </div>
            <div class="input-group">
                <textarea class="ecom-cta-input" id="ecom-requirements"  name="Requirement"  placeholder=" "></textarea>
                <label for="ecom-requirements">Challenges & Goals</label>
            </div>
            <div class="input-group">
                <select class="ecom-cta-select" id="ecom-platform"  name="goals" >
                    <option value="shopify">Shopify</option>
                    <option value="woocommerce">WooCommerce</option>
                    <option value="custom">Custom Development</option>
                    <option value="magento">Magento</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <button type="submit" class="ecom-cta-button">🛒 Get Your Free E-commerce Consultation</button>
        </form>
    </div>
</body>

</html>