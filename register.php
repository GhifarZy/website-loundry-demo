
<?php
$conn = mysqli_connect("localhost", "root", "", "bio");

if (isset($_POST["submit"])) {
    
   
  
    $gmail   = $_POST["gmail"];
    $password = $_POST["password"];
    $nama   = $_POST["nama"];
    $alamat = $_POST["alamat"];

   // $password =  password_hash($password, PASSWORD_DEFAULT);
 
 

    $mysql = " INSERT INTO `user` (`id`,`nama`, `alamat`, `gmail`, `password`) VALUES (NULL,  '$nama', '$alamat', '$gmail', '$password');;";
   

$test =    mysqli_query($conn , $mysql);


if($test)
{
    Header("Location:tampilanlogin2.php");
}
else{
    Header("Location:register.php");
}
  
        
    }

    
    
     

?>

<html>
<title>halaman home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
        font-family: "Raleway", sans-serif
    }
</style>

<body class="w3-light-grey">




<center>

<div class="" >
<div class="animated fadeInDown slow" >
<h2>W E L C O M E </h2>
<div class="animated fadeInDown slower"><h3 style="color:#c31d55;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:20px;" >DAFTAR SEBAGAI <strong  style="color: yellow;" >USER</strong></h3></div>
</div>
</div>

<div class="animated fadeInUp slow" >
    
<form action="register.php" method="post">

        
<input type="hidden" name="id" value="<?php echo $id; ?>">


<p><b style="color: #c31d55;" >Nama Lengkap</b></p>
   <div class="animated fadeInUp slower" > <input type="text" name="nama" id="nama" required ></div>

   <p><b style="color: #c31d55;" >Alamat</b></p>
   <div class="animated fadeInUp slower" > <input type="text" name="alamat" id="alamat" required ></div>

    <p><b style="color: #c31d55;" >Gmail</b></p>
   <div class="animated fadeInUp slower" > <input type="text" name="gmail" id="gmail" required ></div>

  
    <p><b style="color: #c31d55;" >Password</b></p>
   <div class="animated fadeInUp slower" > <input type="password" name="password" id="password"  ></div>

  

  

 
    <br>
    <br>


    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel"><b style="color: #c31d55;" >Cancel</b></button>

    <button type="submit" class="simpan" name="submit"><b style="color:#c31d55;">Submit</b></button>
    

</form>

</div>

</center>

        <style>
     
     form{
        background-image: url(https://i.pinimg.com/originals/09/c0/2c/09c02cf90d47f15c74cc4c0ba5ec7db3.png);
        border-radius: 12px;
       /* box-shadow:0px 0px 4px 0px  black;*/
       margin: 25 auto;
    width: 400px;
    padding: 40px;

        
    }


input[type="text"]{
        width: 220px;
        height: 40px;
        border-radius:5px;
        border: none;
        background-color:white;
        color: #000;
    }

    input[type="password"]{
        width: 220px;
        height: 40px;
        border-radius:5px;
        border: none;
        background-color:white;
        color: #000;
    }

    .simpan {
        padding: 10px;
        width: 105px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background-color:white;
        font-family:serif;
        color: black;


    }

    .cancel {
        padding: 10px;
        width: 105px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background-color:white;
        font-family:serif;
        color: #000;


    }
    
.w3-light-grey {
    color: white!important;
    background: linear-gradient(#7ccbf9,#03A9F4);
   
    
}                          

h2{
    font-family: 'Monoton', cursive;
    color: #c31d55;
    margin-top: 120px;
}

b{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 20px;

}

strong{
    background-color: #c31d55;
    padding: 16px;
    border-radius: 10px;
}

        </style>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>