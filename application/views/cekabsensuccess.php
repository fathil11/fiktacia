<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('master2.php'); ?>
    <title>Berhasil</title>
    <style>
        .status {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 30%;
        }
    </style>
</head>
<body>
    <br><br>
    <div class="container">
        <div class="jumbotron">
            <img src="<?php echo base_url();?>assets/images/success.png" alt="success" class="status">
            <h1 class="text-center">Telah Hadir</h1>    
            <hr>
            <h2 class="text-center"><?= $name ?></h2>
            <h2 class="text-center">(<?= $jenis_acara ?>)</h2>
        </div>
    </div>
</body>
</html>