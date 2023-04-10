<?php
include '../includes/main.php';
include '../includes/conn.php';


if (isset($_GET['logout'])) {
	# code...
	session_destroy();
	unset($_SESSION['user']);
	header("location:li.php");
}


if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];


if ($password != $password2) {
    ?>  <p style="text-align: center; color:aliceblue; font-weight:bold;">Passwords didn't match 
    <a style="text-decoration: none; color:cadetblue; font-weight:bold;" href="./su.php">SignUp Again</a></p><?php
}else{

    
    $ins= "INSERT INTO `customers` VALUES( NULL, '$name', '$email', $password , $password2 )";
    $i = mysqli_query($connect , $ins);

?>  <p style="text-align: center; color:aliceblue; font-weight:bold;">Welcome
You Are Now Our Customer, Please Log In Now</p><?php
}


}





?>

<header>
    <div class="container">
    <form method="POST" action="./product.php">
        <h4>Log In</h4>

        <label>Email</label><br>
        <input type="email" name="email" placeholder="type your email ...">

        <br>
        
        <label>Password</label><br>
        <input type="password" name="password" placeholder="create a password ...">

        <br>

        <button name="login" class="cbtn">Confirm</button>

    </form>
    </div>
</header>
