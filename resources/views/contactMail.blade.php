<!DOCTYPE html>
<html>
<head>
    <title>Kapcsolatfelvételi Üzenet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h1 {
            color: #007BFF;
        }

        .content {
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Kapcsolatfelvételi Üzenet</h1>

    <p>Új kapcsolatfelvételi üzenet érkezett az <strong>JK-Carpenters</strong> weboldaláról. Az üzenet részletei az
        alábbiak:</p>

    <div class="content">
        <p><strong>Név:</strong> {{ $data['name'] }}</p>
        <p><strong>Cégnév:</strong> {{ $data['businessName'] }}</p>
        <p><strong>Email cím:</strong> {{ $data['email'] }}</p>
        <p><strong>Üzenet:</strong></p>
        <p>{{ $data['message'] }}</p>
    </div>
</div>
</body>
</html>
