<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Word</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #0066cc;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"], textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            width: 100%;
            box-sizing: border-box;
        }
        .btn {
            padding: 10px 15px;
            color: #fff;
            background-color: #0066cc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 1em;
            text-align: center;
        }
        .btn:hover {
            background-color: #004d99;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Word</h1>
        <form action="{{ route('vocabulary.store') }}" method="POST">
            @csrf
            <label for="word">Word:</label>
            <input type="text" name="word" id="word" required>
            
            <label for="meaning">Meaning:</label>
            <textarea name="meaning" id="meaning" required></textarea>
            
            <button type="submit" class="btn">Add Word</button>
        </form>
    </div>
</body>
</html>
