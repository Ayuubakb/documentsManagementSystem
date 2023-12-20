<?php
    require('connexion.php');
    require('boardElements.php');

    $q=$_REQUEST["q"];//obtenir la nom à chercher
    $t=$_REQUEST["t"];//obtenir le type de document

    if(!strcmp($t,'demanderel')){ ///traitement pour les relevees de notes
        $query="SELECT cne,nom,prenom,email,filiere,semestre FROM demanderel WHERE status=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req2_2)){
                echo "
                    <div>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Semestre: </span>".$result[5]."</p>
                        </div>
                        <div>
                            <button><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                echo "
                    <div>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Semestre: </span>".$result[5]."</p>
                        </div>
                        <div>
                            <button><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }
    }else if(!strcmp($t,'demandeatt')){ ///traitementpor les attestations de scolarites
        $query="SELECT cne,nom,prenom,email,filiere FROM demandeatt WHERE status=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req1_2)){
                echo "
                    <div>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                        </div>
                        <div>
                            <button><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                echo "
                    <div>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                        </div>
                        <div>
                            <button><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }
    }else{ ///traitement pour les conventions de stage
        $query="SELECT cne,nom,prenom,email,filiere,nom_entreprise,adress_entreprise,telephone,nom_representant FROM demandeconv WHERE status=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req3_2)){
                echo "
                    <div>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Company Name: </span>".$result[5]."</p>
                            <p><span>Supervisor's Name: </span>".$result[8]."</p>
                            <p><span>Phone Number: </span>0".$result[7]."</p>
                            <p><span>Company Address: </span>".$result[6]."</p>
                        </div>
                        <div>
                            <button><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                echo "
                    <div>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Company Name: </span>".$result[5]."</p>
                            <p><span>Supervisor's Name: </span>".$result[8]."</p>
                            <p><span>Phone Number: </span>0".$result[7]."</p>
                            <p><span>Company Address: </span>".$result[6]."</p>
                        </div>
                        <div>
                            <button><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }
    }
?>