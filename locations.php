<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ola Location Sharing</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .dialog-box {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #3498db;
        }

        p {
            margin-top: 10px;
            color: #555;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

<div class="dialog-box">
    <h2>Share Your Location</h2>
    <p>Ola needs your location to provide the best service. Allow location access to continue.</p>
    <button onclick="grantLocationAccess()" class="btn btn-primary">Grant Location Access</button>
</div>

<script>
    function grantLocationAccess() {
        // Add logic to handle location access here
        alert("Location access granted!");
    }
</script>

</body>
</html>