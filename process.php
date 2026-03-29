<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
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
            background: #f9f9f9;
        }

        textarea {
            resize: none;
        }

        .result {
            margin-top: 15px;
            text-align: left;
            font-size: 14px;
        }

        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Form Output</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $phone     = $_POST['phone'];
        $address   = $_POST['address'];
    ?>

        <input type="text" value="<?= $firstname ?>" readonly>
        <input type="text" value="<?= $lastname ?>" readonly>
        <input type="text" value="<?= $phone ?>" readonly>
        <textarea readonly><?= $address ?></textarea>

        <div class="result">
            <p><strong>Hi,</strong> my name is <?= $firstname . " " . $lastname; ?></p>
            <p><strong>Phone:</strong> <?= $phone; ?></p>
            <p><strong>Address:</strong> <?= $address; ?></p>
        </div>

    <?php
    } else {
        echo "Data tidak ditemukan!";
    }
    ?>
</div>

</body>
</html>