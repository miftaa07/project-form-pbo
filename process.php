<!DOCTYPE html>
<html>
<head>
    <title>Hasil Input</title>

</head>
<body>

<h2>Form Output</h2>

<div class="container">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname  = $_POST['lastname'];
        $phone     = $_POST['phone'];
        $address   = $_POST['address'];
    ?>

        <!-- FORM LAGI (biar mirip gambar kanan) -->
        <form>
            <input type="text" value="<?= $firstname ?>" readonly>
            <input type="text" value="<?= $lastname ?>" readonly>
            <input type="text" value="<?= $phone ?>" readonly>
            <textarea readonly><?= $address ?></textarea>
            <button disabled>Submit</button>
        </form>

        <!-- HASIL OUTPUT -->
        <div class="result">
            <p>Hi, my name is <?= $firstname . " " . $lastname; ?></p>
            <p>Phone Number : <?= $phone; ?></p>
            <p>Address : <?= $address; ?></p>
        </div>

    <?php
    } else {
        echo "Data tidak ditemukan!";
    }
    ?>

</div>

</body>
</html>