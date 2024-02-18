<!-- resources/views/contact.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Contact ons.</h2>
        <div class="message-box">
            @if (session('success'))
            <p>{{ session('success') }}</p>
            <a href="{{ url('https://www.google.com/') }}">Afsluiten</a>
            @elseif (session('error'))
            <p>{{ session('error') }}</p>
            <a href="{{ url()->previous() }}">Terug</a>
            @endif
            <form action="/send-mail" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Uw naam" required>
                <input type="email" name="email" placeholder="Uw e-mailadres" required>
                <textarea name="message" placeholder="Uw bericht" rows="6" required></textarea>
                <input type="submit" value="Verzenden">
            </form>

        </div>
        <p>Wij stellen uw feedback zeer op prijs, omdat het ons helpt onze dienstverlening te verbeteren. Uw mening is voor ons van grote waarde.</p>
    </div>
</body>

</html>
