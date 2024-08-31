<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #0066cc;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #0066cc;
            color: #ffffff;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-buttons {
            text-align: center;
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
        }
        .btn:hover {
            background-color: #004d99;
        }
        .add-btn {
            display: block;
            margin: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vocabulary List</h1>
        <div class="add-btn">
            <a href="{{ route('vocabulary.create') }}" class="btn">Add New Word</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Word</th>
                    <th>Meaning</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vocabularies as $vocabulary)
                <tr>
                    <td>{{ ucfirst($vocabulary->word) }}</td>
                    <td>{{ ucfirst($vocabulary->meaning) }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('vocabulary.show', $vocabulary->id) }}" class="btn">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
