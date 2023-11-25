<?php

 session_start();


 include('db_connect.php');
 $msg = false;

 if (isset($_POST['user_name'])) {
    
    $user_name =$_POST['user_name'];
    $user_password = $_POST['user_password'];
    
    $query = "select * from user where user = '".$user_name."' AND password = '".$user_password."' limit 1 ";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows ($result)==1) {
        
        header('location: welcome.php');

    } else {
        $msg = "Incorrect password! Try Again ";
    
    }
    

 } 
 

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Music Login</title>
</head>
<body>
<nav>
    <h1>Welcome to the world of music</h1>
    <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
    </nav>

    <header>
    
       <div class="left_bx1">
        <div class="content">
            <form method="post">
                <h3>Login</h3>
                <div class="card">
                    <label for="name">Name</label>
                    <input type="text" name="user_name" placeholder="Enter user name" required>
                </div>

                <div class="card">
                    <label for="password">password</label>
                    <input type="password" name="user_password" placeholder="Enter user password" required>
                </div>

              

                <input type="submit" value="Login" class="submit">

                <div class="check">
                    <input type="checkbox" name="" id=""><span>remeber</span>
                </div>
                <p>Don't have a account ? <a href="signup.php">sign up</a></p>

                
            <?php
   
                echo('<h3>'.$msg.'</h3>');
            ?>
            </form>
    
        </div>
       </div>

       </div>

    </header>
      
  <footer>
    <p>&copy; 2023  Music World</p>
  </footer>
    
</body>
</html>