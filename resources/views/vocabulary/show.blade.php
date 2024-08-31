<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ ucfirst($vocabulary->word) }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f7ff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        .page-border {
            border: 4px solid #0066cc;
            width: 90%;
            height: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #b3e6ff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            padding: 20px;
            box-sizing: border-box;
            border-radius: 10px;
        }
        .name {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
            color: #000;
        }
        h1 {
            font-size: 3em;
            color: #000;
            margin: 20px 0;
            text-transform: capitalize;
        }
        .meaning {
            font-size: 1.5em;
            color: #333;
            margin: 10px 0;
            padding: 10px;
            background-color: #ffffff;
            border-radius: 5px;
            width: 80%;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-transform: capitalize;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #ff0000;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="page-border">
        <div class="name">Abrar’s Education</div>
        <h1>{{ ucfirst($vocabulary->word) }}</h1>
        <div class="meaning">{{ ucfirst($vocabulary->meaning) }}</div>
        <div class="footer">
            <p>Full Spoken English Course with Basic Reading & Writing (Online & Offline Residential Course)</p>
            <p>Director: Abdullah Abrar, Student, Department of English, University of Dhaka</p>
            <p>Main Branch: Abrar’s Education, Dogair Bazar, Signboard, Demra, Dhaka 01710583554</p>
        </div>
    </div>
</body>
</html>
