<?php
$conn = mysqli_connect("localhost", "root", "", "bio");
  
       
       $id =    $_POST["Id"];
       $kode = $_POST["Kode_Pakaian"];
       $nama      = $_POST["Nama_pelanggan"];
       $jenis  = $_POST["Jenis_jasa"];
       $berat = $_POST["Berat_kg"];
       $tanggal2   = $_POST["Tanggal_masuk"];
       $tanggal   = $_POST["Tanggal_selesai"];
       $total      = ("$berat")*7000;
       
    
  
       $mysql = "UPDATE londrishow SET Kode_pakaian='$kode' , Nama_pelanggan='$nama' , Jenis_jasa='$jenis' , Berat_kg='$berat' , Tanggal_masuk='$tanggal2' , Tanggal_selesai='$tanggal' ,  Total_harga='$total' where Id='$id'  ";
        
       $simpan = mysqli_query($conn , $mysql);
   


   
   
    
       

       header("location:see.php");

   
     

?>