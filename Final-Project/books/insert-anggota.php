<?php

include "conn.php";
$nama_user = $_POST['nama'];
$pass_user = $_POST['password'];
$email_user = $_POST['E-mail'];
$gender_user = $_POST['gender'];
$resgister = $_POST['register'];

$sql = "INSERT INTO user(id_user,nama_user,pass_user,email_user,gender_user) VALUES
            ('','$nama_user','$pass_user','$email_user,'$gender_user', '')";
$res = pg_query($conn, $sql) or die(pg_error($conn));
echo "Data anda telah berhasil diinput, Masukkan Username dan password anda di <span><a href='login.html'><b> Disini </b></a></span>";
echo "<h3><a href='login.html'>Klik Disini</a>  untuk Login </h3>";
