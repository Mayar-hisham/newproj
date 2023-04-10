<?php
include './maina.php';
include '../includes/conn.php';


if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

        
    $sel= "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
    $s = mysqli_query($connect , $sel);

if($s){

header("Location:/ia/admin/indexa.php");
}






    $numberOfRows = mysqli_num_rows($s);

    $row = mysqli_fetch_assoc($s);
    if($numberOfRows > 0){
        $_SESSION["admin"] = $email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
          ?> <p>welcome <?php echo $_SESSION['name']; ?> </p> <?php

      // $_SESSION['success']=" Welcome dear, you became a user";
      // echo $_SESSION['success'];

    }



}




if (isset($_GET['logout'])) {
	# code...
	session_destroy();
	unset($_SESSION['admin']);
	header('location:lia.php');
}

?>

<header>
    <div class="container">
    <form method="POST">
        <h4>Admin Log In</h4>

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

