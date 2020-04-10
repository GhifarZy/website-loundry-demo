<?php

$coneksi = mysqli_connect("localhost" , "root" , "" , "bio" );

$id = $_GET["id"];
$hapus = 'DELETE FROM londrishow where id="'.$id.'"';

$mysql = mysqli_query($coneksi , $hapus);

header("location:see.php?data=hapus");

?>
