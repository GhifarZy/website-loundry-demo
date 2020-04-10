<?php

$coneksi = mysqli_connect("localhost" , "root" , "" , "bio" );

$id = $_GET["id"];
$hapus = 'DELETE FROM user where id="'.$id.'"';

$mysql = mysqli_query($coneksi , $hapus);

header("location:daftarlogin.php?data=hapus");

?>
