<?php

if (isset($_POST["submit"])) {
    $konek = mysqli_connect("localhost", "root", "", "bio");
    
    // mengambil nilai dari yang di input di form login
    $user = $_POST['username'];
    $password = $_POST['password'];

    
    
    // perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
    $get = "SELECT * FROM user WHERE gmail = '$user'";
    $result = mysqli_query($konek, $get);
    
    $data = mysqli_fetch_array($result);
    if ($data) {
        // email yang dimasukan ada di db
        // check password
        if ($password == $data['password']) {
            Header("Location: see2.php");
        } else {
            Header("Location: tampilanlogin2.php");
        }
    } else {
        Header("Location: tampilanlogin2.php");
    }
}
?>


