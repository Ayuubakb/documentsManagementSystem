<?php
    require("connexion.php");
    $data=file_get_contents('php://input');
    $inputs=json_decode($data,true);
    $LN=$inputs['LN'];
    $FN=$inputs['FN'];
    $AP=$inputs['AP'];
    $CN=$inputs['CN'];
    $FL=$inputs['FL'];
    $EM=$inputs['EM'];
    $query="INSERT INTO demandeatt(nom,prenom,apoge,cne,email,filiere) values('$LN','$FN','$AP','$CN','$EM','$FL')";
    $req=mysqli_query($connection,$query);
    if(!$req){
        echo 'Please Try Again' ;
    }else{
        echo 'Added Succesfully';
    }
?>