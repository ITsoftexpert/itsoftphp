<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch - Custom Solutions</title>
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

        .contact-cta-container {
            width: 100%;
            max-width: 600px;
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

        .contact-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .contact-cta-input,
        .contact-cta-select {
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

        .contact-cta-button {
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

        .contact-cta-button:hover {
            background: linear-gradient(45deg, #ffcc00, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
    </style>
    <script>
        function autoSelectLanguage() {
            const service = document.getElementById("contact-service").value;
            const languageDropdown = document.getElementById("contact-language");

            const serviceLanguageMap = {
                "seo": "other",
                "ppc": "other",
                "smm": "javascript",
                "website": "html",
                "ecommerce": "php",
                "cms": "php",
                "app": "java",
                "software": "python",
                "integration": "other",
                "automation": "javascript",
                "workflow": "javascript",
                "crm": "php"
            };

            if (serviceLanguageMap[service]) {
                languageDropdown.value = serviceLanguageMap[service];
            } else {
                languageDropdown.value = "auto";
            }
        }
    </script>
</head>

<body>
    <div class="contact-cta-container">
        <div class="contact-cta-heading">📞 Get in Touch</div>
        <p>Tell us what you need, and we'll craft the perfect solution for your business.</p>
        <form id="contact-cta-form"  method="post" action="{{url('/query')}}">    
        @csrf        
            <div class="input-group">
                <input type="text" class="contact-cta-input" id="contact-name" name="name" placeholder=" " required>
                <label for="contact-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="contact-cta-input" id="contact-email" name="email" placeholder=" " required>
                <label for="contact-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="contact-cta-input" id="contact-phone" name="phone_number" placeholder=" " required>
                <label for="contact-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="connect-with-itsoftexpert" required>                
            </div>

            <div class="input-group">
                <select class="contact-cta-select" id="contact-service" onchange="autoSelectLanguage()" name="category">
                    <option value="seo">SEO Services</option>
                    <option value="ppc">PPC Campaign</option>
                    <option value="smm">Social Media Marketing</option>
                    <option value="website">Custom Website Development</option>
                    <option value="ecommerce">E-commerce Solutions</option>
                    <option value="cms">CMS Development</option>
                    <option value="app">iOS/Android App Development</option>
                    <option value="software">Custom Software Development</option>
                    <option value="integration">Enterprise Software Integration</option>
                    <option value="automation">Marketing Automation</option>
                    <option value="workflow">Workflow Automation</option>
                    <option value="crm">CRM Solutions</option>
                    <option value="other">Other (Please Specify)</option>
                </select>
            </div>
            <div class="input-group">
                <textarea class="contact-cta-input" id="contact-requirements" name="Requirement" placeholder=" " required></textarea>
                <label for="contact-requirements">Describe Your Requirements</label>
            </div>
            <div class="input-group">
                <select class="contact-cta-select" id="contact-language" name="language">
                    <option value="auto">Auto-Select Based on Requirements</option>
                    <option value="html">HTML/CSS</option>
                    <option value="javascript">JavaScript</option>
                    <option value="react">React</option>
                    <option value="vue">Vue.js</option>
                    <option value="angular">Angular</option>
                    <option value="php">PHP</option>
                    <option value="python">Python</option>
                    <option value="java">Java</option>
                    <option value="csharp">C#</option>
                    <option value="golang">Go</option>
                    <option value="ruby">Ruby on Rails</option>
                    <option value="nodejs">Node.js</option>
                    <option value="flutter">Flutter</option>
                    <option value="swift">Swift</option>
                    <option value="kotlin">Kotlin</option>
                    <option value="other">Other (Specify in Description)</option>
                </select>
            </div>
            <button type="submit" class="contact-cta-button">📞 Submit Your Request</button>
        </form>
    </div>
</body>

</html>