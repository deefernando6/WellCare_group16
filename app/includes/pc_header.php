<!DOCTYPE html>
<html>

<head>
    <title>Admin template</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">


    <!-- Import lib -->
    <!-- End import lib -->
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT."/public/css/pc_style.css";?>">
</head>

<body class="overlay-scrollbar">
    <!-- navbar -->
    <div class="navbar">
        <!-- nav left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <img class="logo" src="<?php echo URLROOT."/public/img/logo.JPG";?>" alt="">
            </li>
            <li class="nav-item">
                <h4>Pharmacy Management <br>System</h4>
            </li>
        </ul>
        <!-- end nav left -->
        <!-- form -->
        <form class="navbar-search">
            <input type="text" name="Search" class="navbar-search-input" placeholder="Search for...">
            <i class="fas fa-search"></i>
        </form>
        <!-- end form -->
        <!-- nav right -->
        <ul class="navbar-nav nav-right">
            <li class="nav-item mode">
                <h6>user Name</h6>
            </li>
            <li class="nav-item avt-wrapper">
                <div class="avt dropdown">
                    <img src="<?php echo URLROOT."/public/img/user.png";?>" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
                    <ul id="user-menu" class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- end nav right -->
    </div>
    <!-- end navbar -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVC/app/includes/sidebar.php");?>

    <div id="content">
    <img class="left" id="myBtn" onclick="topFunction()" src="<?php echo URLROOT."/public/img/back-to.png";?>" alt="">
    <div id="overly">
        <div class="card" id="confirm">
        <div class="card-header">
                        <h3>
                            Rechecking
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table >
                            <tbody>
                                <tr>
                                    <th>
                                    <table id="list_of_medicine" style="margin-top:-230px;">
                                   
                                    <tbody>
                                    </tbody>
                                    </table>
                                    </th>
                                    <th>
                                        <div id="image_wrapp_confirm">
                                        <img src="<?php echo URLROOT."/public/img/prescriptions/order18.jpg";?>" alt="" style="height: 550px;width:350px">
                                    </th>
                                </tr>
                            </tbody>    
                        </table>
                        <div style="text-align: center;">
                                    <button class="prescription" id="" onclick="close_confirm()">Close</button>
                                    <button class="" id="orderChecked" onclick="generate()">Confirm</button>
                        </div>
                    </div>
        </div>
    </div>
    
    