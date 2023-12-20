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
    $CoN=$inputs['CoN'];
    $CA=$inputs['CA'];
    $CPN=$inputs['CPN'];
    $SN=$inputs['SN'];
    $FAX=$inputs['FAX'];
    $FoA=$inputs['FoA'];
    $query="INSERT INTO demandeconv(nom,prenom,apoge,cne,email,filiere,nom_entreprise,adress_entreprise,telephone,telecopie,nature,nom_representant) values('$LN','$FN','$AP','$CN','$EM','$FL','$CoN','$CA','$CPN','$FAX','$FoA','$SN')";
    $req=mysqli_query($connection,$query);
    if(!$req){
        echo 'Please Try Again' ;
    }else{
        echo 'Added Succesfully';
    }
?>