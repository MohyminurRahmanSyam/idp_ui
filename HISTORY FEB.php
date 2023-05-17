<?php 
session_start(); 
include "db_conn.php";

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
                display: flex;
            
                
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
            
          
             .table-body{
               width: 95%;
               max-height: calc(90%-1rem);
               background-color: #fffb;
               margin: .8rem;
               border-radius: .6rem;
               overflow: auto;
               margin-left: 18px;
               

                }
                main.table{
                    width: 750px;
                    background-color: #fff5;
                    backdrop-filter: blur(7px);
                    box-shadow: 0 .4rem .8rem #0005;
                    border-radius: .8rem;
                    overflow: hidden;
                    margin-left: 350px;
                    margin-top: 5px;
                    margin-bottom: 20px;
                    border-collapse: collapse;
                }
                .table-header{
                    width: 100%;
                    height: 10%;
                    background-color: #fff4;
                    padding: .8rem 1rem;
                   
                }
                .table-header h1{
                    margin-left: 300px;
                }
                table, th, td{
                   
                    padding: 1.05rem;
                    text-align: center;
                }
                thead th{
                    background-color: #d5d1defe;
            
                }
                tbody tr:nth-child(even){
                    background-color: #0000000b;
                }
                tbody tr:hover{
                    background-color: #fff6;
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


            </li>
            <li><a href="#"><i class="fas fa-sign-out-alt "></i>Logout</a></li>
             </ul>
            </div>

            <main class="table">
                <section class="table-header">
                    <h1>FEBRUARY</h1>
                </section>
                <section class="table-body">
                    <table>
                        <thead>
                            <tr>
                                <th>Serial No</th>
                                <th>Date</th>
                                <th>Veh_Vip</th>
                                <th>Veh_Civil</th>
                                <th>Veh_Military</th>
                                <th>Ambulance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>01-01-2000</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>

                        </tbody>
                    </table>

                </section>
            </main>
            
           
          
    </body>
</html>