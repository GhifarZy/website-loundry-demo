<?php

$konek = mysqli_connect("localhost" , "root" , "" , "bio" );
	
	// mengambil nilai dari yang di input di form login
	$user = $_POST['username'];
	$password = $_POST['password'];
	
	// perintah untuk mendapatkan user dari db berdasarkan nama yang di input di form login
	$get_user = "SELECT * FROM login WHERE username = '$user'";
	$result = mysqli_query($konek,$get_user);
	
	$data = mysqli_fetch_array($result);
	if($data){
		// email yang dimasukan ada di db
		// check password
		if($password == $data['password']){
			Header("Location: see.php");
		}else{
			Header("Location: tampilanlogin.php");
		}
	}else{
		Header("Location: tampilanlogin.php");
	}
?>




