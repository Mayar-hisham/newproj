<?php
include './maina.php';
include '../includes/conn.php';

?>
   
   <?php
   if(isset($_SESSION["admin"])){ ?>
   
   
    <header>
     <div class="maintext">  

<form method="POST" action="./vpr.php">
        <input name="srch" placeholder="Search for product ..." > <button name="search">Go</button>
</form>


        <h1>MarketYoura</h1> 
        <h2>Welcome Admin <?php echo $_SESSION['name']; ?></h2>
     </div>   
    </header>
    


<?php }else  { ?>
    <h2>This Is Admins Page  </h2> <?php


   
    include '../includes/footer.html'; }
    ?>