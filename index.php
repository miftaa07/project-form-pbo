<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
        }
        .container {
            width: 300px;
            margin: auto;
        }
        input, textarea {
            width: 100%;
            margin: 5px 0;
            padding: 8px;
        }
        button {
            padding: 8px 15px;
            background-color: #4da6ff;
            border: none;
            color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<h2>Form Input</h2>

<div class="container">
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