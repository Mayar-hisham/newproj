<?php
include '../includes/main.php';
include '../includes/conn.php';


if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];


    $ins= "INSERT INTO `customers` VALUES( NULL, '$name', '$email', $password , $password2 )";
    $i = mysqli_query($connect , $ins);

/*    if($i){
    header("location:./product.php");    
    }

*/

}



?>

<header>
    <div class="container">
    <form method="POST" action="./li.php">
        <h4>Sign Up</h4>
        
        <label>Name</label><br>
        <input type="text" name="name" placeholder="type your name ...">

        <br>

        <label>Email</label><br>
        <input type="email" name="email" placeholder="type your email ...">

        <br>
        
        <label>Password</label><br>
        <input type="password" name="password" placeholder="create a password ...">

        <br>

        <label>Re-Enter Password</label><br>
        <input type="password" name="password2" placeholder="create a password ...">

        <br>

        <button name="signup">Confirm</button>

    </form>
    </div>
</header>