<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Home
        </title>
        
        <style>
            div{
                padding: 0;
                margin: 0;
                box-sizing: border-box;

            }
            .logo{
                
                width: 170px;
                float: left;
                margin-right: 430px;
              
            }
            body{
                background-image: url("atcs_bg.jpg");
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                font-family: sans-serif;
            }
            .taskbar{
                background:  rgb(9, 50, 9);
                max-height: fit-content;
                text-align: right;
            }
            .taskbar ul{
                display: inline-flex;
                list-style: none;
                color: white;
                
            }
            .taskbar ul li{
                margin-top: 50px;
                width: 120px;
                margin: 15px;
                padding: 5px;
                text-align: center;
                
            }
            .taskbar ul li a{
                text-decoration: none;
                color: white;
                
            }
            .active, .taskbar ul li:hover{
                background: #679946;
                border-radius: 3px;
                width: 120px;
                height: 25px;
                
            }
            .taskbar .fa{
                margin-right: 8px;
            }
            .sub-task-1{
                display: none;
            }
            .taskbar ul li:hover .sub-task-1{
                display: block;
                position: absolute;
                background-color: #679946;
                margin-top: 15px;
                
            }
            .taskbar ul li:hover .sub-task-1 ul{
                display: block;
                margin: 1px;
            }
            .taskbar ul li:hover .sub-task-1 ul li{
                width: 70px;
                padding: 5px;
                border-bottom: 1px dotted #fff;
                background:transparent;
                border-radius: 0;
                text-align: left;
            }
            .taskbar ul li:hover .sub-task-1 ul li:last-child{
                border-bottom: none;
            }
            .taskbar ul li:hover .sub-task-1 ul li a:hover{
                color: #b2ffb2; 
            }
            .content h1{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 70px;
                padding-left: 20px;
                margin-top: 9%;
                letter-spacing: 2px;
                text-align: center;
                color: #fff;
            }
            .par {
                font-family: Arial, Helvetica, sans-serif;
                font-size: 25px;
                padding-bottom: 25px;
                letter-spacing: 1.2px;
                line-height: 30px;
                text-align: center;
                color: #fff;
            }


        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <body>
        <div class="taskbar">
        <ul>
            <img src="atcs_logo.jpg" alt="Logo" class="logo">
            <li class="active"><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-cog"></i>Control Room</a>
                <div class="sub-task-1">
                <ul>
                        <li><a href="controlroom_a1.php">Block A1</a></li>
                        <li><a href="controlroom_b1.php">Block B1</a></li>
                        <li><a href="controlroom_c1.php">Block C1</a></li>
                        <li><a href="controlroom_c1.php">Block D1</a></li>
                    </ul>

                </div>
            
            </li>
            <li><a href="#"><i class="fas fa-history"></i>Traffic History</a>
                <div class="sub-task-1">
                    <ul>
                        <li><a href="HISTORY JAN.php">January</a></li>
                        <li><a href="HISTORY FEB.php">February</a></li>
                        <li><a href="HISTORY MAR.php">March</a></li>
                        <li><a href="HISTORY APR.php">April</a></li>
                        <li><a href="HISTORY MAY.php">May</a></li>
                        <li><a href="HISTORY JUN.php">June</a></li>
                        <li><a href="HISTORY JUL.php">July</a></li>
                        <li><a href="HISTORY AUG.php">August</a></li>
                        <li><a href="HISTORY SEP.php">September</a></li>
                        <li><a href="HISTORY OCT.php">October</a></li>
                        <li><a href="HISTORY NOV.php">November</a></li>
                        <li><a href="HISTORY DEC.php">December</a></li>
                    </ul>

                </div>
            </li>
            <li><a href="#"><i class="fas fa-chart-bar"></i>Overview</a>
                <div class="sub-task-1">
                    <ul>
                        <li><a href="#">Block A1</a></li>
                        <li><a href="#">Block B2</a></li>
                        <li><a href="#">Block C1</a></li>
                        <li><a href="#">Block D1</a></li>
                    </ul>

                </div>
            </li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt "></i>Logout</a></li>
        </ul>
            </div>
            <div class="content">
                <h1>WELCOME</h1>
                <p class="par">WE ARE HERE TO HELP YOUR COMFORT IN OUR AREA.<br>HAVE A SAFE JOURNEY.</p>

            </div>

            
          
    </body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

