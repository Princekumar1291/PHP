<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .contact-section {
            background-color: #fff;
            padding: 50px;
            margin: 50px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }
        .contact-section h1 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }
        .contact-section p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: center;
        }
        .contact-section form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .contact-section label {
            font-size: 16px;
            margin-bottom: 5px;
        }
        .contact-section input,
        .contact-section textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .contact-section textarea {
            resize: vertical;
            height: 150px;
        }
        .contact-section button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #5cb85c;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .contact-section button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="contact-section">
        <h1>Contact Us</h1>
        <p>If you have any questions or inquiries, feel free to reach out to us using the form below.</p>
        <form action="#" method="POST">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" placeholder="Enter your message" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>
</body>
</html>
