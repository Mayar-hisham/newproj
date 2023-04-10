<?php
include '../includes/main.php';
include '../includes/conn.php';






if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

        
    $sel= "SELECT * FROM `customers` WHERE email = '$email' AND password = '$password'";
    $s = mysqli_query($connect , $sel);


    $numberOfRows = mysqli_num_rows($s);

$row = mysqli_fetch_assoc($s);
if($numberOfRows > 0){
    $_SESSION["user"] = $email;
    $_SESSION['name'] = $row['name'];
    $_SESSION['id'] = $row['id'];
    

  // $_SESSION['success']=" Welcome dear, you became a user";
  // echo $_SESSION['success'];

}






if (mysqli_num_rows($s)==1) {
?>  <p style="text-align: center; color:aliceblue; font-weight:bold;">Welcome <?php echo $_SESSION['name'];?>
 You Logged In Successfully</p><?php
}else{
	?>  <p style="text-align: center; color:aliceblue; font-weight:bold;">You Entered Wrong Email Or Password 
    <a style="text-decoration: none; color:cadetblue; font-weight:bold;" href="./li.php">LogIn Again</a></p><?php
}





}




if(isset($_POST['search'])){

    $srch = $_POST['srch'];

    $sel = "SELECT * FROM `products` WHERE dscrp LIKE '%$srch%' ";
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
    
    <a href="" class="bt">Order Now</a>
</figure>

<?php } ?>

</div>
</header>



<?php
    include '../includes/footer.html'; }
    ?>