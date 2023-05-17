<?php 
session_start(); 
include "db_conn.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Control Room
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
                justify-content: center;
                align-items: center;
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
           
            .container{
                width: 600px;
                height: 480px;
                background: rgba(0,0,0,.5);
                padding: 28px;
                margin: 0 28px;
                border-radius: 10px;
                box-shadow: inset -2px 2px 2px white;
                margin-left: 450px;
                margin-top: 30px;

            }
            .form{
                font-size: 26px;
                font-weight: 600;
                text-align: center;
                padding-bottom: 6px;
                color: white;
                text-shadow: 2px 2px 2px black;
                border-bottom: solid 1px white;
            }
            .user-info{
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                padding: 20px 0;
            }
            .input-box{
                display: flex;
                flex-wrap: wrap;
                width: 50%;
                padding-bottom: 15px;
            }
            .input-box label{
                width: 95%;
                color: white;
                font-size: 20px;
                font-weight: 400;
                margin: 5px 0;
            }
            .input-box input{
                height: 40px;
                width: 95%;
                border-radius: 7px;
                outline: none;
                border: 1px solid grey;
                padding: 0 10px;
            }
            .Execute-btn{
                margin-top: 15px;
                
            }
            .Execute-btn input{
                cursor: pointer;
                display: block;
                width: 540px;
                margin-top: 10px;
                font-size: 20px;
                padding: 10px;
                border: none;
                border-radius: 3px;
                color: rgb(209, 209, 209);
                background: rgba(63,114,76,0.7);
            }

            select {
                    display: block;
                    width: 100%;
                    padding: 8px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    }

                select:focus {
                outline: none;
                border-color: #007bff;
                }

                option {
                color: #333;
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
                        <li><a href="controlroom_d1.php">Block D1</a></li>
                    </ul>

                </div>
            
            </li>
            <li><a href="#"><i class="fas fa-history"></i>Traffic History</a>
                <div class="sub-task-1">
                    <ul>
                        <li><a href="HISTORY JAN.php">January</a></li>
                        <li><a href="HISTORY FEB .php">February</a></li>
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
            <li><a href="#"><i class="fas fa-sign-out-alt "></i>Logout</a></li>
        </ul>
            </div>
            
            <div class="container">
                <h1 class="form">BLOCK B1 OVERRIDE SCHEDULE</h1>
                <form action="con_b1.php" method="post">
                    <div class="user-info">
                        <div class="input-box">
                            <label for="Date">Override Date</label>
                            <input type="date"
                            id="Date"
                            name="Date"
                            placeholder="Enter date">
                            
                        </div>
                        <div class="input-box">
                            <label for="State">State</label>
                            
                            
                            <select id="dropdown" name="state">
                                <option value="">--Please choose an option--</option>
                                <option value="option1">Green</option>
                                <option value="option2">Yellow</option>
                                <option value="option3">Red</option>
                              </select>
                            
                        </div>
                        <div class="input-box">
                            <label for="Time">Override Start Time</label>
                            <input type="time"
                            id="s-time"
                            name="s-time"
                            placeholder="Enter start time ">
                            
                        </div>
                        <div class="input-box">
                            <label for="Time">Override end Time</label>
                            <input type="time"
                            id="e-time"
                            name="e-time"
                            placeholder="Enter end time ">
                            
                        </div>
                        <div class="input-box">
                            <label for="Form">From</label>
                            <input type="text"
                            id="From"
                            name="From"
                            placeholder="Enter Direction ">
                            
                        </div>
                        <div class="input-box">
                            <label for="To">To</label>
                            <input type="text"
                            id="To"
                            name="To"
                            placeholder="Enter Destination ">
                            
                        </div>
                        <div class="Execute-btn">
                            <input type="submit" value="Execute" name="send">

                        </div>
                        

                    </div>
                </form>
            </div>
          
          
    </body>
</html>