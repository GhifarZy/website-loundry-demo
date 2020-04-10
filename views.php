
<html>
<title>halaman home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

    <!-- Top container -->
    <div class="w3-bar  " style="z-index:2">
        <button class="w3-bar-item w3-button w3-hide-large " onclick="w3_open();"><i class="fa fa-bars"></i>Menu</button>
        <span class="w3-bar-item w3-right" style="color: white;">MRZY</span>
    </div>

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
        <div class="w3-container w3-row">

            <div class="w3-col s8 ">
                <span>Welcome, <strong>user</strong></span><br>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
                <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>

            </div>
        </div>
        <hr>
        <div class="w3-container">
            <h5>Dashboard</h5>
        </div>
        <div class="w3-bar-block">
            <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
            <a style="text-decoration: none;" href="#" class="w3-bar-item w3-button "><i class=""></i>Insert Data</a>
            <a style="text-decoration: none;" href="#" class="w3-bar-item w3-button "><i class=""></i>Views Data</a>

        </div>
    </nav>


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:350px;margin-top:15px;">
        <header class="container" style="padding-top:22px">
            <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
        </header>
        <br>
       <h2>Data Londri</h2>
       <br>
       <table border="1">

       <tr>
           <th>No</th>
           <th>Nama Pelanggan</th>
           <th>Jenis Jasa</th>
           <th>Tanggal Selesai</th>
            <th>Total Harga</th>
       </tr>

       <tr>
           <td>1</td>
           <td>ziady</td>
           <td>cuci</td>
           <td>12-12-2025</td>
           <td>13.000</td>
       </tr>
       
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
                padding: 5px;
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


    .simpan {
        padding: 10px;
        width: 105px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background-color:white;
        font-family:serif;


    }

    .cancel {
        padding: 10px;
        width: 105px;
        height: 40px;
        border-radius: 5px;
        border: none;
        background-color:white;
        font-family:serif;


    }
    table,
                                   th,
                                   td {
                                       border-collapse: collapse;
                                       border:1px solid black;
                                       padding: 10px;
                                        
                                       margin: 50px;
                                       text-align: center;
                                   }
                                   
                              

        </style>
</body>

</html>