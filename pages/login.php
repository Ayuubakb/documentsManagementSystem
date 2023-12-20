<?php
    if(isset($_REQUEST['msg'])) $msg=$_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/login.css">
</head>
<body>
    <section>
        <div class="formContainer" id="div1">
            <form method="POST" action="../php/loginTest.php">
                <h1>ADMIN ACCES POINT</h1>
                <p class="errMsg" id="errMsg" <?php if(isset($msg) && !strcmp($msg,'false')) echo "style='visibility:visible'"; ?>><?php 
                    if(isset($msg) && !strcmp($msg,'false')){
                        echo "Invalid Inputs" ;
                    }
                 ?></p>
                <div>
                    <label for="email">User Name: </label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="password">Password : </label>
                    <input type="password" name="password" id="password">
                </div>
                <button name="loginBtn" id="loginBtn" type="submit">LOGIN</button>
            </form>
        </div>
        <div class="picContainer" id="div2">
            <img src="../assets/3515462.jpg"/>
        </div>
    </section>
</body>
<script src="../js/login.js"></script>
</html>