<?php
// memulai session
session_start();

// Membuat session dengan nama kalian
$_SESSION['nama'] = "Muhammad Ibrahim";

//Membuat session dengan no absen kalian
$_SESSION['absen'] = 15;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Session</title>
</head>
<body>
    <?php
    echo "Nama saya " . $_SESSION['nama'] . "<br>" . "Nomor absen ". $_SESSION['absen'];
    ?>
</body>
</html>        