<?php
$conn = mysqli_connect("localhost", "root", "", "bio");
  
       
       $id =    $_POST["id"];
       $nama = $_POST["nama"];
       $alamat      = $_POST["alamat"];
       $gmail  = $_POST["gmail"];
       $password = $_POST["password"];
       
       
    
  
       $mysql = "UPDATE user SET nama='$nama' , alamat='$alamat' , gmail='$gmail' , password='$password'  where id='$id'  ";
        
       $simpan = mysqli_query($conn , $mysql);
   


   
   
    
       

       header("location:daftarlogin.php");

   
     

?>