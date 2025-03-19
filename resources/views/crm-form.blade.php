<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Solution CTA Form</title>
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

        .crm-cta-container {
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

        .crm-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .crm-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .crm-cta-input,
        .crm-cta-select {
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

        .crm-cta-button {
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

        .crm-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="crm-cta-container">
        <div class="crm-cta-heading">📊 Struggling to Manage Customer Relationships Effectively?</div>
        <div class="crm-cta-subtext">Get a Smarter CRM Today</div>
        <p>Empowering businesses with customer-centric solutions for lasting success.</p>
        <form id="crm-cta-form" method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="crm-cta-input" id="crm-name"  name="name" placeholder=" " required>
                <label for="crm-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="crm-cta-input" id="crm-email"  name="email" placeholder=" " required>
                <label for="crm-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="crm-cta-input" id="crm-phone"  name="phone_number" placeholder=" " required>
                <label for="crm-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="crm" required>                
            </div>
            <div class="input-group">
                <input type="url" class="crm-cta-input" id="crm-existing"  name="existing_tool" placeholder=" ">
                <label for="crm-existing">Existing CRM System (if any)</label>
            </div>
            <div class="input-group">
                <input type="text" class="crm-cta-input" id="crm-budget"  name="budget" placeholder=" " required>
                <label for="crm-budget">Your Budget</label>
            </div>
            <div class="input-group">
                <textarea class="crm-cta-input" id="crm-requirements"  name="goals" placeholder=" "></textarea>
                <label for="crm-requirements">CRM Goals & Challenges</label>
            </div>
            <div class="input-group">
                <select class="crm-cta-select" id="crm-type"  name="category" >
                    <option value="sales">Sales CRM</option>
                    <option value="marketing">Marketing CRM</option>
                    <option value="customer-support">Customer Support CRM</option>
                    <option value="custom">Custom CRM Development</option>
                </select>
            </div>
            <button type="submit" class="crm-cta-button">📊 Get Your Free CRM Consultation</button>
        </form>
    </div>
</body>

</html>