<?php

$coneksi = mysqli_connect("localhost" , "root" , "" , "bio" );

$data = "SELECT * FROM londrishow";

$mysql = mysqli_query($coneksi , $data);

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

  

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:250px;margin-top:-15px;" id="mySidebar"><br>
        <div class="w3-container w3-row">

            <div class="w3-col s8 ">
                <span style="color:#c31d55;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:20px;" >Welcome, <strong style="color: yellow;" >ADMIN</strong></span><br>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>

            </div>
        </div>
        <br>
        <br>
        <div class="w3-container">
            <h5>Dashboard</h5>
        </div>
        <div class="w3-bar-block">
            
            <a style="text-decoration: none;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:18px;color:#c31d55;" href="home.php" class="w3-bar-item w3-button "><i class=""></i>Insert Data</a>
            <a style="text-decoration: none;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:18px;color:#c31d55;" href="see.php" class="w3-bar-item w3-button "><i class=""></i>Views Data</a>
            <a style="text-decoration: none;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:18px;color:#c31d55;" href="adduser.php" class="w3-bar-item w3-button "><i class=""></i>Add User</a>
            <a style="text-decoration: none;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:18px;color:#c31d55;" href="daftarlogin.php" class="w3-bar-item w3-button "><i class=""></i>Data User</a>
            <br>
            <br>
            <a style="text-decoration: none;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:18px;color:yellow;" href="tampilanlogin.php" class="w3-bar-item w3-button "><i class=""></i>LOGOUT</a>
        </div>
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:350px;margin-top:15px;">
        <header class="container" style="padding-top:22px">
           
       
        <br>
  <h2>Data Londri</h2>
       <br>
       <table border="1">

       <tr>
           <th>No</th>
           <th>Kode Pakaian</th>
           <th>Nama Pelanggan</th>
           <th>Jenis Jasa</th>
           <th>Berat/KG</th>
           <th>Tanggal Masuk</th>
           <th>Tanggal Selesai</th>
            <th>Total Harga</th>
            <th>Action</th>
       </tr>

       <?php $s = 1; ?>
       <?php while($datakita = mysqli_fetch_assoc($mysql)) : ?>
    
       <tr>
           <td><?= $s ?></td>
           <td><?= $datakita["Kode_Pakaian"] ?></td>
           <td><?= $datakita["Nama_pelanggan"] ?></td>
           <td><?= $datakita["Jenis_jasa"] ?></td>
           <td><?= $datakita["Berat_kg"] ?></td>
           <td><?= $datakita["Tanggal_masuk"] ?></td>
           <td><?= $datakita["Tanggal_selesai"] ?></td>
           <td><?= $datakita["Total_harga"]?></td>
           <td><a style="text-decoration:none;" class="delete" href="hapus.php?id=<?= $datakita["Id"] ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> 
               <a style="text-decoration:none;" class="update" href="update.php?id=<?= $datakita["Id"] ?>">Update</a></td>
       </tr>

       <?php $s++; ?>
       <?php endwhile; ?>
      
       
       </table>

         

        <script>
            // Get the Sidebar
            var mySidebar = document.getElementById("mySidebar");

            // Get the DIV with overlay effect
            var overlayBg = document.getElementById("myOverlay");

            // Toggle between showing and hiding the sidebar, and add overlay effect
            function w3_open() {
                if (mySidebar.style.display === 'block') {
                    mySidebar.style.display = 'none';
                    overlayBg.style.display = "none";
                } else {
                    mySidebar.style.display = 'block';
                    overlayBg.style.display = "block";
                }
            }

            // Close the sidebar with the close button
            function w3_close() {
                mySidebar.style.display = "none";
                overlayBg.style.display = "none";
            }
        </script>


        <style>
            .w3-bar {
                background-color: black!important;
                padding: 10px;
            }
            
            .card {
                background-color: lightgray;
                border-radius: 20px;
                padding: 60px;
                margin: 50px;
                margin-top: -25px;
            }
            
            .card-1 {
                background-color: lightgray;
                border-radius: 20px;
                padding: 60px;
                margin: 50px;
            }

            input[type="text"]{
        width: 220px;
        height: 40px;
        border-radius:5px;
        border: none;
        background-color:white;
    }

    .w3-white, .w3-hover-white:hover {
    color: #000!important;
    background-image: url(https://i.pinimg.com/originals/09/c0/2c/09c02cf90d47f15c74cc4c0ba5ec7db3.png);
    background-size: cover;
}


    table,
                                   th,
                                   td {
                                       border-collapse: collapse;
                                       border:3px solid #46b6f5;
                                       padding: 12px;
                                       margin: 6px;
                                       text-align: center;
                                       margin-left: -70px;
                                       color: #000;
                                       border-radius: 12px;
                                   }


                               .delete{
        padding: 8px;
        width: 150px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background-color:03A9F4;
        font-family:serif;
        color:black;

        
}

th {
    background-color: ;
}

.update{
        padding: 8px;
        width: 150px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background-color:#c31d55;
        font-family:serif;
        color:black;
}
    
.w3-light-grey {
    color: white!important;
    background: linear-gradient(#ffffff,#03A9F4);
    
}                          

h2{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: #c31d55;
}

        </style>
</body>

</html>