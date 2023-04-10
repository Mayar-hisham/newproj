<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketYoura Admin Side</title>

    <link rel="stylesheet" href="./stylea.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

</head>
<body> 

    <nav>
        <a href=""><img src="../images/logo.jpg" width="160px" height="60px"></a>

       <div class="navs">
        <ul>
        <?php

if(isset($_SESSION["admin"])){ ?>
            <li><a href="./addpr.php">Add Product</a></li>
            <li><a href="./vpr.php">View and Edit</a></li>
            <li><a href="./vusers.php">View Users</a></li>

               <li><a class="lo"  href="./lia.php?logout"> Log Out </a></li>
               
               <?php 
            } else{ ?>
                <li style="color: white; font-weight:bold;">THIS IS ADMINS PAGE!</li> <?php
            }  

            ?>
        </ul>
       </div> 
    </nav>