<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Software Integration CTA Form</title>
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

        .integration-cta-container {
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

        .integration-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .integration-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .integration-cta-input,
        .integration-cta-select {
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

        .integration-cta-button {
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

        .integration-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
</head>

<body>
    <div class="integration-cta-container">
        <div class="integration-cta-heading">🔗 Facing Challenges Integrating Your Enterprise Software?</div>
        <div class="integration-cta-subtext">Get Seamless Enterprise Software Integration</div>
        <p>Empowering enterprises with connected, scalable, and future-ready solutions.</p>
        <form id="integration-cta-form" method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="integration-cta-input" id="integration-name"  name="name" placeholder=" " required>
                <label for="integration-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="integration-cta-input" id="integration-email"  name="email" placeholder=" " required>
                <label for="integration-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="integration-cta-input" id="integration-phone"  name="phone_number" placeholder=" " required>
                <label for="integration-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="enterprise-integration" required>                
            </div>
            <div class="input-group">
                <input type="url" class="integration-cta-input" id="integration-existing"  name="existing_tool" placeholder=" ">
                <label for="integration-existing">Existing Systems (if any)</label>
            </div>
            <div class="input-group">
                <input type="text" class="integration-cta-input" id="integration-budget"  name="budget" placeholder=" " required>
                <label for="integration-budget">Your Budget</label>
            </div>
            <div class="input-group">
                <textarea class="integration-cta-input" id="integration-requirements"  name="Requirement" placeholder=" "></textarea>
                <label for="integration-requirements">Integration Needs & Challenges</label>
            </div>
            <div class="input-group">
                <select class="integration-cta-select" id="integration-type"  name="category" >
                    <option value="crm">CRM Integration</option>
                    <option value="erp">ERP Integration</option>
                    <option value="api">API & Third-Party Integration</option>
                    <option value="cloud">Cloud-Based System Integration</option>
                </select>
            </div>
            <button type="submit" class="integration-cta-button">🔗 Get Your Free Integration Consultation</button>
        </form>
    </div>
</body>

</html>