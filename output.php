<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond garden residence</title>
</head>
<body bgcolor="#95cffc">
<form action="home.html" method="POST" enctype="multipart/form-data">
<table border="0" cellspacing="10">
<?php
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $notelp=$_POST['no_telp'];
        $typerumah=$_POST['type_rumah'];
    ?>
<center><h1>Data Registrasi</h1><center>
<table border="1" cellpadding="2" width="70%">

    <tr>
        <td>Nama</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td><?php echo $notelp; ?></td>
    </tr>
    <tr>
        <td>Type Rumah</td>
        <td><?php echo $typerumah; ?></td>
    </tr>
</table>
<a href="home.html">Back To Home</a>
</body>
</html>