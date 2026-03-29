<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #4da6ff, #80d0ff);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ddd;
            outline: none;
            transition: 0.2s;
        }

        input:focus, textarea:focus {
            border-color: #4da6ff;
            box-shadow: 0 0 5px rgba(77,166,255,0.5);
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: #4da6ff;
            border: none;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #3399ff;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Form Input</h2>

    <form method="POST" action="process.php">
        <input type="text" name="firstname" placeholder="Firstname" required>
        <input type="text" name="lastname" placeholder="Lastname" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>