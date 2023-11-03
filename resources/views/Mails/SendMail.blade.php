<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .header {
            background-color: #2e3030ee;
            color: #6cf65f;
            text-align: center;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .content {
            padding: 20px;
        }

        .footer {
            text-align: center;
            padding: 10px;
            background-color: #f4f4f4;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Email Notification</h1>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p>This is to inform you about the following notification message.</p>
            <p><strong>Notification Message:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                suscipit, ligula sed vestibulum finibus, tortor mi cursus leo.</p>
            <p>Thank you for your attention.</p>
        </div>
        <div class="footer">
            <p>If you have any questions, please contact us at <a href="mailto:example@example.com">example@example.com</a>.</p>
        </div>
    </div>
</body>

</html>
