<?php

session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MarketYoura</title>

    <link rel="stylesheet" href="../includes/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik+Vinyl&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

</head>
<body>

    <nav>
        <a href=""><img src="../images/logo.jpg" width="160px" height="60px"></a>
<form method="POST" action="../user/product.php">
        <input name="srch" placeholder="Search for product ..." > <button name="search">Go</button>
</form>

       <div class="navs">
        <ul>
        <?php if(isset($_SESSION["user"])){ ?>

            <li style="font-size:xx-large; color:aqua;"><img src="../images/user.png" width="30px" height="30px">  <?php  echo $_SESSION['name']; ?></li>
<?php }?>
            <li><a href="../user/index.php">Home</a></li>
            <li><a href="../user/product.php">Products</a></li>
            <li><a href="">Stories</a></li>
            <li><a href="">Contact Us</a></li>
            <?php

            if(isset($_SESSION["user"])){ ?>
               <li><a class="lo"  href="../user/li.php?logout"> Log Out </a></li>
               
               <?php 
            } else{ ?>
                <li><a class="li" href="../user/li.php"> Log In </a></li>
                
                <?php

            }

            ?>
        </ul>
       </div> 
    </nav>

    