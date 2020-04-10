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
            <a style="text-decoration: none;font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;font-size:18px;color:#c31d55;" href="daftarlogin.php" class="w3-bar-item w3-button "><i class=""></i>Data User</a>
           
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
       <form action="form.php" method="post">

        
<input type="hidden" name="Id" value="<?php echo $id; ?>">

<p><b>Kode Pakaian</b></p>
<select type="text" name="Kode_Pakaian" required >
        <option value="A01">A01</option>
        <option value="A02">A02</option>
        <option value="A03">A03</option>
        <option value="A04">A04</option>
        <option value="A05">A05</option>
        <option value="A06">A06</option>
        <option value="A07">A07</option>
     
    </select>

<p><b>Nama Pelanggan</b></p>
    <input type="text" name="Nama_pelanggan" required>

    <p><b>Jenis Jasa</b></p>
    <select type="text" name="Jenis_jasa" required >
        <option value="Cuci">Cuci</option>
        <option value="Setrika">Setrika</option>
        <option value="Cuci + Setrika">Cuci + Setrika</option>
    </select>

    <p><b>Berat/KG</b></p>
    <input type="text" name="Berat_kg" required>

    <p><b>Tanggal Masuk</b></p>
    <input type="date" name="Tanggal_masuk" required>

    <p><b>Tanggal Selesai</b></p>
    <input type="date" name="Tanggal_selesai" required>

  

 
    <br>
    <br>


    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancel"><b>Cancel</b></button>

    <button type="submit" class="simpan" name="submit"><b>Simpan</b></button>
    

</form>
       </div>

    <div class="col-lg-6 col-sm-12">

    </div>
    

       


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
           

    .w3-white, .w3-hover-white:hover {
    color: #000!important;
    background-image: url(https://i.pinimg.com/originals/09/c0/2c/09c02cf90d47f15c74cc4c0ba5ec7db3.png);
    background-size: cover;
}


input[type="text"]{
        width: 220px;
        height: 40px;
        border-radius:5px;
        border: none;
        background-color:white;
        color: #000;
    }
    input[type="date"]{
        width: 220px;
        height: 40px;
        border-radius:5px;
        border: none;
        background-color:white;
        color: black;
    }

    select[type="text"]{
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
    background: linear-gradient(#ffffff,#03A9F4);
}                          

h2{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    color: #c31d55;
}

b{
    color: #000;
}

        </style>
</body>

</html>