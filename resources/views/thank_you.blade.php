<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            overflow: hidden;
        }

        .container {
            animation: fadeIn 1.5s ease-in-out;
            max-width: 600px;
            padding: 20px;
        }

        h1 {
            font-size: 3rem;
            margin: 0;
            animation: slideIn 1.5s ease-in-out;
        }

        p {
            font-size: 1.2rem;
            margin-top: 10px;
            opacity: 0.9;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            font-size: 1.2rem;
            color: white;
            background: #ff7eb3;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            animation: pulse 2s infinite;
        }

        .button:hover {
            background: #ff4f81;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 10px rgba(255, 126, 179, 0.5); }
            50% { box-shadow: 0 0 20px rgba(255, 126, 179, 0.8); }
            100% { box-shadow: 0 0 10px rgba(255, 126, 179, 0.5); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You!</h1>
        <p>Your query has been successfully submitted.</p>
        <p>We appreciate your interest in <strong>iTSoftExpert</strong>. Our team will review your request and get back to you as soon as possible.</p>
        <p>If you have any urgent inquiries, feel free to contact us via email or phone.</p>
        <p>Meanwhile, explore more about our services and offerings on our website.</p>
        <a href="/" class="button">Visit Our Website</a>
    </div>
</body>
</html>
