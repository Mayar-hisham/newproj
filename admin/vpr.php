<?php
include './maina.php';
include '../includes/conn.php';

if(isset($_SESSION["admin"])){ 


if(isset($_POST['search'])){

    $srch = $_POST['srch'];

    $sel = "SELECT * FROM `products` WHERE dscrp LIKE '%$srch%' ";
    $s = mysqli_query($connect , $sel);

   // if($s){
     //   echo "done";

  //  }else{
    //    echo "no".mysqli_error($connect);
    //}



?>
<header>
<div class="product" >

<?php foreach($s as $s){ ?>

<figure>
    <img src="../admin/upload/<?php echo $s['image']; ?>" width="200px"
     height="200px" class="imm">
    <figcaption> <?php echo $s['dscrp']; ?>
    <p style="color:aqua;"><?php echo $s['price']; ?> Egp</p>
         </figcaption>
    
    <a href="" class="bt">Order Now</a>
</figure>

<?php } ?>

</div>
</header>



<?php
    include '../includes/footer.html';
    




}else{




$sel = "SELECT * FROM `products`";
$s = mysqli_query($connect , $sel);

?>
<header>
<div class="product" >

<?php foreach($s as $s){ ?>

<figure>
    <img src="../admin/upload/<?php echo $s['image']; ?>" width="200px"
     height="200px" class="imm">
    <figcaption> <?php echo $s['dscrp']; ?>
    <p style="color:aqua;"><?php echo $s['price']; ?> Egp</p>
         </figcaption>
    
    <a href="" class="bt">Edit</a><a href="" class="bt">Delete</a>
</figure>

<?php } ?>

</div>
</header>

<?php }} else { ?>
    <h2>This Is Admins Page  </h2> <?php
}?>