<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO CTA Form</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: radial-gradient(circle, #1a1a2e, #16213e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .seo-cta-container {
            width: 100%;
            max-width: 550px;
            padding: 35px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0, 255, 255, 0.3);
            backdrop-filter: blur(20px);
            text-align: center;
            position: relative;
            color: white;
            border: 2px solid rgba(0, 255, 255, 0.5);
        }

        /* Close icon styling */
        .close-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #ffcc00;
        }

        .seo-cta-heading {
            font-size: 30px;
            font-weight: 700;
            background: linear-gradient(45deg, #ffcc00, #ff6a00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 10px;
        }

        .seo-cta-subtext {
            font-size: 18px;
            margin-bottom: 20px;
            opacity: 0.9;
        }

        .input-group {
            position: relative;
            margin: 15px 0;
        }

        .seo-cta-input,
        .seo-cta-select {
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

        .seo-cta-input:focus,
        .seo-cta-select:focus {
            border-bottom: 2px solid #ffcc00;
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            transition: 0.3s;
        }

        .seo-cta-input:focus+label,
        .seo-cta-input:not(:placeholder-shown)+label {
            top: 5px;
            left: 10px;
            font-size: 12px;
            color: #ffcc00;
        }

        .seo-cta-button {
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

        .seo-cta-button:hover {
            background: linear-gradient(45deg, #ff00ff, #00ffff);
            transform: scale(1.05);
            box-shadow: 0 0 15px #00ffff;
        }
        option{
            background-color: grey;
            margin-bottom: 3px;
        }
    </style>
</head>

<body>
    <div class="seo-cta-container">
        <!-- Close Icon -->
        <!-- <i class="fa fa-times close-icon" id="closeForm"></i> -->
        <i class="fa-regular fa-circle-xmark" id="closeForm"></i>

        <div class="seo-cta-heading">🚀 Dominate Google Rankings!</div>
        <div class="seo-cta-subtext">Your Business Deserves The Top Spot!</div>
        <p>Claim Your Free SEO Strategy Call Now!</p>
        <form id="seo-cta-form" method="post" action="{{url('/query')}}">    
            @csrf        
            <div class="input-group">
                <input type="text" class="seo-cta-input" name="name" id="seo-name" placeholder=" " required>
                <label for="seo-name">Your Name</label>
            </div>
            <div class="input-group">
                <input type="email" class="seo-cta-input" name="email" id="seo-email" placeholder=" " required>
                <label for="seo-email">Your Email</label>
            </div>
            <div class="input-group">
                <input type="tel" class="seo-cta-input" name="phone_number" id="seo-phone" placeholder=" " required>
                <label for="seo-phone">Your Phone Number</label>
            </div>
            <div class="input-group">
                <input type="hidden" class="contact-cta-input" name="form_type" placeholder="" value="seo" required>                
            </div>
            <div class="input-group">
                <input type="url" class="seo-cta-input" id="seo-website" name="web_url" placeholder=" ">
                <label for="seo-website">Your Website (Optional)</label>
            </div>
            <div class="input-group">
                <textarea class="seo-cta-input" id="seo-message" placeholder=" " name="your_msg"></textarea>
                <label for="seo-message">Your Message (Optional)</label>
            </div>
            <div class="input-group">
                <select class="seo-cta-select" id="seo-contact-method" name="preffered_option">
                    <option value="call">Preferred Contact: Phone Call</option>
                    <option value="email">Email</option>
                    <option value="whatsapp">WhatsApp</option>
                </select>
            </div>
            <button type="submit" class="seo-cta-button">📞 Book a Free Call</button>
        </form>
    </div>

    <script>
        // Close the form container when the close icon is clicked
        document.getElementById('closeForm').addEventListener('click', function () {
            document.querySelector('.seo-cta-container').style.display = 'none';
        });
    </script>

    <script src="newheader.js"></script>
</body>

</html>