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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            <p id='tableType'>Internship Certificates History</p>
            <select id="selectBar">
                <option value="ASC" default>First-To-Last</option>
                <option value="DESC" >Last-To-Fist</option>
            </select>
        </div>
        <div class="demandContainer" id="demandContainer">
            <?php
                while($resultReq=mysqli_fetch_row($req6_2)){
                    echo"
                    <div id='".$resultReq[9]."'>
                        <div>
                            <p><span>Fisrt Name: </span>".$resultReq[1]."</p>
                            <p><span>Last Name: </span>".$resultReq[2]."</p>
                            <p><span>CNE: </span>".$resultReq[0]."</p>
                            <p><span>Class: </span>".$resultReq[4]."</p>
                            <p><span>E-mail: </span>".$resultReq[3]."</p>
                            <p><span>Company Name: </span>".$resultReq[5]."</p>
                            <p><span>Supervisor's Name: </span>".$resultReq[8]."</p>
                            <p><span>Phone Number: </span>0".$resultReq[7]."</p>
                            <p><span>Company Address: </span>".$resultReq[6]."</p>
                            
                        </div>
                        <div>
                            ".($resultReq[10]==1?"<h2 style='color:green'>Sended</h2>":"<h2 style='color:red'>Refused</h2>")."
                           <a href=\"../php/downloadFile.php?q=demandeconv&l=".$resultReq[2]."&f=".$resultReq[1]."&cn=".$resultReq[5]."&sn=".$resultReq[8]."&ca=".$resultReq[6]."&cne=".$resultReq[0]."\"> <button style='width:50%;margin-left:0;margin-top: 8px;background-color:black'><i class='fa-solid fa-download fa-xl' style='color: #ffffff;'></i></button></a>
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