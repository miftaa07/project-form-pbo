<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>
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
        .result {
            margin-top: 20px;
            text-align: left;
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