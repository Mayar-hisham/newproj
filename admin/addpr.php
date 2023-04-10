<?php
include './maina.php';
include '../includes/conn.php';


if(isset($_SESSION["admin"])){

if(isset($_POST['addp'])){

$dscrp = $_POST['dscrp'];
$price = $_POST['price'];

$lname = $_FILES['image']['name'];
$ltype = $_FILES['image']['type'];
$ltmp = $_FILES['image']['tmp_name'];
$location = "upload/";
move_uploaded_file($ltmp , $location . $lname);


$ins= "INSERT INTO `products` VALUES( NULL, '$dscrp', $price, '$lname' )";
$i = mysqli_query($connect , $ins);

if($i){
header("location:./vpr.php");    
}



}



?>

<header>
<div class="container">
<form method="POST" enctype="multipart/form-data">
    <h4>Add Product</h4>
    
    <label>product Description</label><br>
    <input type="text" name="dscrp">

    <br>

    <label>Product Price</label><br>
    <input type="numbers" name="price">

    <br>
    
    <label>Product Image</label><br>
    <input type="file" name="image">

    <br>

    <button name="addp">Add Now</button>

</form>
</div>
</header>


<?php }else{
     ?> <h2>This Is Admins Page  </h2> <?php 
}?>