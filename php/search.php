<?php
    require('connexion.php');
    require('boardElements.php');

    $q=$_REQUEST["q"];//obtenir la nom à chercher
    $t=$_REQUEST["t"];//obtenir le type de document

    if(!strcmp($t,'demanderel')){ ///traitement pour les relevees de notes
        $query="SELECT cne,nom,prenom,email,filiere,semestre,id,apogee FROM demanderel WHERE status=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req2_2)){
                $fct="\"refuseFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[6]."')\"";
                    $fctSend="\"sendFctAC('".$result[2]."','".$result[1]."','".$result[3]."','".$result[6]."','".$result[7]."')\"";
                    echo"
                    <div id='".$result[6]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Semestre: </span>".$result[5]."</p>
                        </div>
                        <div>
                            <button onclick=".$fctSend."><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button  onclick=".$fct."><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                $fct="\"refuseFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[6]."')\"";
                    $fctSend="\"sendFctAC('".$result[2]."','".$result[1]."','".$result[3]."','".$result[6]."','".$result[7]."')\"";
                    echo"
                    <div id='".$result[6]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Semestre: </span>".$result[5]."</p>
                        </div>
                        <div>
                            <button onclick=".$fctSend."><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button  onclick=".$fct."><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                ";
            }
        }
    }else if(!strcmp($t,'demandeatt')){ ///traitementpor les attestations de scolarites
        $query="SELECT cne,nom,prenom,email,filiere,id FROM demandeatt WHERE status=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req1_2)){
                $fct="\"refuseFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[5]."')\"";
                    $fctSend="\"sendFctPof('".$result[2]."','".$result[1]."','".$result[3]."','".$result[5]."','".$result[0]."','".$result[4]."')\"";
                    echo"
                    <div id='".$result[5]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                        </div>
                        <div>
                            <button onclick=".$fctSend."><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button onclick=".$fct."><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                    ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                $fct="\"refuseFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[5]."')\"";
                    $fctSend="\"sendFctPof('".$result[2]."','".$result[1]."','".$result[3]."','".$result[5]."','".$result[0]."','".$result[4]."')\"";
                    echo"
                    <div id='".$result[5]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                        </div>
                        <div>
                            <button onclick=".$fctSend."><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button onclick=".$fct."><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                    ";
            }
        }
    }else if(!strcmp($t,'demandeconv')){ ///traitement pour les conventions de stage
        $query="SELECT cne,nom,prenom,email,filiere,nom_entreprise,adress_entreprise,telephone,nom_representant,id FROM demandeconv WHERE status=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req3_2)){
                $fct="\"refuseFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[9]."')\"";
                    $fctSend="\"sendFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[9]."','".$result[0]."','".$result[5]."','".$result[8]."','".$result[6]."')\"";
                    echo"
                    <div id='".$result[9]."'>
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
                            <button onclick=".$fctSend."><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button onclick=".$fct."><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                    ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                $fct="\"refuseFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[9]."')\"";
                    $fctSend="\"sendFct('".$result[2]."','".$result[1]."','".$result[3]."','".$result[9]."','".$result[0]."','".$result[5]."','".$result[8]."','".$result[6]."')\"";
                    echo"
                    <div id='".$result[9]."'>
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
                            <button onclick=".$fctSend."><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button onclick=".$fct."><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                    ";
            }
        }
    }else if(!strcmp($t,'demanderelHistory')){ ///traitement de l'historique pour les relevees de notes
        $query="SELECT cne,nom,prenom,email,filiere,semestre,id,status,apogee FROM demanderel WHERE status!=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req5_2)){
                $msg=$result[7]==1?"<h2 style='color:green'>Sended</h2>":"<h2 style='color:red'>Refused</h2>";
                    echo"
                    <div id='".$result[6]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Semestre: </span>".$result[5]."</p>
                        </div>
                        <div>
                            ".$msg."
                            <button onclick=\"generatePdf2('".$result[1]."','".$result[2]."','".$result[0]."','".$result[8]."')\" style='width:50%;margin-left:0;margin-top: 8px;background-color:black'><i class='fa-solid fa-download fa-xl' style='color: #ffffff;'></i></button>
                        </div>
                    </div>
                    ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                $msg=$result[7]==1?"<h2 style='color:green'>Sended</h2>":"<h2 style='color:red'>Refused</h2>";
                    echo"
                    <div id='".$result[6]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                            <p><span>Semestre: </span>".$result[5]."</p>
                        </div>
                        <div>
                            ".$msg."
                            <button onclick=\"generatePdf2('".$result[1]."','".$result[2]."','".$result[0]."','".$result[8]."')\" style='width:50%;margin-left:0;margin-top: 8px;background-color:black'><i class='fa-solid fa-download fa-xl' style='color: #ffffff;'></i></button>
                        </div>
                    </div>
                    ";
            }
        }
    }else if(!strcmp($t,'demandeattHistory')){ ///traitement de l'historique pour les attestations de scolarites
        $query="SELECT cne,nom,prenom,email,filiere,id,status FROM demandeatt WHERE status!=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req4_2)){
                echo"
                    <div id='".$result[5]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                        </div>
                        <div>
                            ".($result[6]==1?"<h2 style='color:green'>Sended</h2>":"<h2 style='color:red'>Refused</h2>")."
                            <button onclick=\"generatePdf('".$result[1]."','".$result[2]."','".$result[0]."','".$result[4]."')\" style='width:50%;margin-left:0;margin-top: 8px;background-color:black'><i class='fa-solid fa-download fa-xl' style='color: #ffffff;'></i></button>
                        </div>
                    </div>
                    ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                echo"
                    <div id='".$result[5]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$result[1]."</p>
                            <p><span>Last Name: </span>".$result[2]."</p>
                            <p><span>CNE: </span>".$result[0]."</p>
                            <p><span>Class: </span>".$result[4]."</p>
                            <p><span>E-mail: </span>".$result[3]."</p>
                        </div>
                        <div>
                            ".($result[6]==1?"<h2 style='color:green'>Sended</h2>":"<h2 style='color:red'>Refused</h2>")."
                            <button onclick=\"generatePdf('".$result[1]."','".$result[2]."','".$result[0]."','".$result[4]."')\" style='width:50%;margin-left:0;margin-top: 8px;background-color:black'><i class='fa-solid fa-download fa-xl' style='color: #ffffff;'></i></button>
                        </div>
                    </div>
                    ";
            }
        }
    }else if(!strcmp($t,'demandeconvHistory')){ ///traitement pour les conventions de stage
        $query="SELECT cne,nom,prenom,email,filiere,nom_entreprise,adress_entreprise,telephone,nom_representant,id,status FROM demandeconv WHERE status!=0 and (nom LIKE '$q%' or prenom LIKE '$q%')";
        $req=mysqli_query($connection,$query);
        if(!strcmp($q,"")){
            while($result=mysqli_fetch_row($req6_2)){
                echo"
                    <div id='".$result[9]."'>
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
                            ".($result[10]==1?"<h2 style='color:green'>Sended</h2>":"<h2 style='color:red'>Refused</h2>")."
                            <button onclick=\"generatePdf('".$result[1]."','".$result[2]."','".$result[0]."','".$result[5]."','".$result[8]."','".$result[6]."')\" style='width:50%;margin-left:0;margin-top: 8px;background-color:black'><i class='fa-solid fa-download fa-xl' style='color: #ffffff;'></i></button>
                        </div>
                    </div>
                    ";
            }
        }else{
            while($result=mysqli_fetch_row($req)){
                echo"
                    <div id='".$result[9]."'>
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
                            ".($result[10]==1?"<h2 style='color:green'>Sended</h2>":"<h2 style='color:red'>Refused</h2>")."
                            <button onclick=\"generatePdf('".$result[1]."','".$result[2]."','".$result[0]."','".$result[5]."','".$result[8]."','".$result[6]."')\" style='width:50%;margin-left:0;margin-top: 8px;background-color:black'><i class='fa-solid fa-download fa-xl' style='color: #ffffff;'></i></button>
                        </div>
                    </div>
                    ";
            }
        }
    }
?>