<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <header>
        <nav>
            <div class="main-wrapper">
           <ul>
            <li><a href="index.php">Home</a></li>
           </ul>
           <div class="nav-login">
              <form action="includes/login.inc.php" method="POST">
                 <input type="text" name="uid" placeholder="Username/e-mail">
                 <input type="password" name="pwd" placeholder="password">
                 <button type="submit" name="submit">login</button>
              </form> 
              <a href="signup.php">Sign up</a>
           </div>
            </div>
        </nav>
    </header>