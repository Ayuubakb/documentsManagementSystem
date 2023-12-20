<?php
    require('connexion.php');
    $userName=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT email,password FROM admin where email='$userName' and password='$password'";
    $req=mysqli_query($connection,$query);
    if(mysqli_num_rows($req) !== 0){
        header('Location:../pages/board.php');
    }
    else{
        header('Location:../pages/login.php?msg=false');
    }
?>