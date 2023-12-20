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
    $Sem=$inputs['Sem'];
    $AY=$inputs['AY'];
    $query="INSERT INTO demanderel(nom,prenom,apogee,CNE,email,filiere,semestre,annee) values('$LN','$FN','$AP','$CN','$EM','$FL','$Sem','$AY')";
    $req=mysqli_query($connection,$query);
    if(!$req){
        echo 'Please Try Again' ;
    }else{
        echo 'Added Succesfully';
    }
?>