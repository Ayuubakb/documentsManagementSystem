<?php
    require('../php/connexion.php');
    require('../php/boardElements.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/AC.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b81570bc8.js" crossorigin="anonymous"></script>
    <title>Admin Board</title>
</head>
<body>
<nav>
        <div class="imgContainer">
            <img src="../assets/log.jpg"/>
        </div>
        <div class="itemsContainer">
            <ul>
                <li class="docs" id="docs"><i class="fa-solid fa-file-circle-plus" style="color: white;"></i>
                    <div class="dropDownDocuments">
                        <ul>
                            <li><a href="PoF.php">Proof Of Education</a></li>
                            <li><a href="AC.php">Academic Transcript</a></li>
                            <li><a href="IC.php">Internship Certificate</a></li>
                        </ul>
                    </div>
                </li>
                <li class="docs"><i class="fa-solid fa-clock-rotate-left" style="color: #ffffff;"></i>
                    <div class="dropDownDocuments">
                        <ul>
                            <li><a href="HistoryPoF.php">Proof Of Education</a></li>
                            <li><a href="HistoryAC.php">Academic Transcript</a></li>
                            <li><a href="HistoryIC.php">Internship Certificate</a></li>
                        </ul>
                    </div>
                </li>
                <li id="logout"><a href="../pages/acceuil.html"><i class="fa-solid fa-right-from-bracket" style="color: #ffffff;"></i></a></li>
            </ul>
        </div>
    </nav>
    <section>
        <div class="triContainer">
            <input type="text" name="searchBar" id="searchBar" placeholder="Search...">
            <p id='tableType'>Acandemic Transcripts</p>
            <select id="selectBar">
                <option value="ASC" default>First-To-Last</option>
                <option value="DESC" >Last-To-Fist</option>
            </select>
        </div>
        <div class="demandContainer" id="demandContainer">
            <?php
                while($resultReq=mysqli_fetch_row($req2_2)){
                    $fct="\"refuseFct('".$resultReq[2]."','".$resultReq[1]."','".$resultReq[3]."','".$resultReq[6]."')\"";
                    $fctSend="\"sendFctAC('".$resultReq[2]."','".$resultReq[1]."','".$resultReq[3]."','".$resultReq[6]."','".$resultReq[7]."')\"";
                    echo"
                    <div id='".$resultReq[6]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$resultReq[1]."</p>
                            <p><span>Last Name: </span>".$resultReq[2]."</p>
                            <p><span>CNE: </span>".$resultReq[0]."</p>
                            <p><span>Class: </span>".$resultReq[4]."</p>
                            <p><span>E-mail: </span>".$resultReq[3]."</p>
                            <p><span>Semestre: </span>".$resultReq[5]."</p>
                        </div>
                        <div>
                            <button onclick=".$fctSend."><i class='fa-solid fa-envelope fa-lg' style='color: #ffffff; '></i></button>
                            <button  onclick=".$fct."><i class='fa-solid fa-trash fa-lg' style='color: #ffffff; '></i></button>
                        </div>
                    </div>
                    ";
                }
            ?>
        </div>
    </section>
</body>
<script src="../js/AC.js"></script>
</html>

