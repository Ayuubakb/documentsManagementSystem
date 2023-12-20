<?php
    require('connexion.php');

    $query1='SELECT cne,nom,prenom FROM demandeatt WHERE status=0 ORDER BY id DESC limit 5';
    $query1_2='SELECT cne,nom,prenom,email,filiere,id FROM demandeatt WHERE status=0';

    $query2='SELECT cne,nom,prenom FROM demanderel WHERE status=0 ORDER BY id DESC limit 5';
    $query2_2='SELECT cne,nom,prenom,email,filiere,semestre,id,apogee FROM demanderel WHERE status=0';

    $query3='SELECT cne,nom,prenom FROM demandeconv WHERE status=0 ORDER BY id DESC limit 5';
    $query3_2='SELECT cne,nom,prenom,email,filiere,nom_entreprise,adress_entreprise,telephone,nom_representant,id FROM demandeconv WHERE status=0';

    $query4='SELECT cne,nom,prenom FROM demandeatt WHERE status!=0 ORDER BY id DESC limit 5';
    $query4_2='SELECT cne,nom,prenom,email,filiere,id,status FROM demandeatt WHERE status!=0';

    $query5='SELECT cne,nom,prenom FROM demanderel WHERE status!=0 ORDER BY id DESC limit 5';
    $query5_2='SELECT cne,nom,prenom,email,filiere,semestre,id,status,apogee FROM demanderel WHERE status!=0 ORDER BY id';

    $query6='SELECT CNE,nom,prenom FROM demandeconv WHERE status!=0 ORDER BY id DESC limit 5';
    $query6_2='SELECT cne,nom,prenom,email,filiere,nom_entreprise,adress_entreprise,telephone,nom_representant,id,status FROM demandeconv WHERE status!=0';

    $req1=mysqli_query($connection,$query1);
    $req1_2=mysqli_query($connection,$query1_2);
    
    $req2=mysqli_query($connection,$query2);
    $req2_2=mysqli_query($connection,$query2_2);

    $req3=mysqli_query($connection,$query3);
    $req3_2=mysqli_query($connection,$query3_2);
    
    $req4=mysqli_query($connection,$query4);
    $req4_2=mysqli_query($connection,$query4_2);
    
    $req5=mysqli_query($connection,$query5);
    $req5_2=mysqli_query($connection,$query5_2);
    
    $req6=mysqli_query($connection,$query6);
    $req6_2=mysqli_query($connection,$query6_2);

?>