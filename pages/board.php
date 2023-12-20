<?php
    require('../php/connexion.php');
    require('../php/boardElements.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../style/board.css" rel="stylesheet">
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
        <div class="titleContainer">
            <h1>Non Processed Documents</h1>
        </div>
        <div class="listsContainer">
            <div class="headerContainer" style="background-color: #A72693;">
                <h1>LIST OF Proofs Of Education</h1>
            </div>     
            <div class="tableContainer">
                <table>
                    <?php
                        if(mysqli_num_rows($req1) == 0){
                            echo "<tr>
                                <td></td>
                                <td style='text-align:center; font-size:25px;color:red'>NO DATA FOUND</td>
                                <td></td>
                              <tr>";
                        }else{
                            while($reqResults=mysqli_fetch_row($req1)){
                                echo"
                                <tr>
                                    <td><p>".$reqResults[0]."</p></td>
                                    <td><p>".$reqResults[1]."</p></td>
                                    <td><p>".$reqResults[2]."</p></td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </table>
            </div>
            <div style="background-color: #A72693;">
                <p><a href="../pages/PoF.php">ALL -></a></p2>
            </div>
        </div>
        <div class="listsContainer">
            <div class="headerContainer" style="background-color: #241663;">
                <h1>LIST OF Internship Certifcates</h1>
            </div>     
            <div class="tableContainer">
                <table>
                     <?php
                        if(mysqli_num_rows($req2) == 0){
                            echo "<tr>
                                <td></td>
                                <td style='text-align:center; font-size:25px;color:red'>NO DATA FOUND</td>
                                <td></td>
                              <tr>";
                        }else{
                            while($reqResults=mysqli_fetch_row($req2)){
                                echo"
                                <tr>
                                    <td><p>".$reqResults[0]."</p></td>
                                    <td><p>".$reqResults[1]."</p></td>
                                    <td><p>".$reqResults[2]."</p></td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </table>
            </div>
            <div style="background-color: #241663;">
                <p><a  href="../pages/IC.php">ALL -></a></p2>
            </div>
        </div>
        <div class="listsContainer">
            <div class="headerContainer" style="background-color: #160F30;">
                <h1>LIST OF Acadamic Transcripts</h1>
            </div>     
            <div class="tableContainer">
                <table>
                     <?php
                        if(mysqli_num_rows($req3) == 0){
                            echo "<tr>
                                <td></td>
                                <td style='text-align:center; font-size:25px;color:red'>NO DATA FOUND</td>
                                <td></td>
                              <tr>";
                        }else{
                            while($reqResults=mysqli_fetch_row($req3)){
                                echo"
                                <tr>
                                    <td><p>".$reqResults[0]."</p></td>
                                    <td><p>".$reqResults[1]."</p></td>
                                    <td><p>".$reqResults[2]."</p></td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </table>
            </div>
            <div style="background-color: #160F30;">
                <p><a  href="../pages/AC.php">ALL -></a></p2>
            </div>
        </div>
    </section>
    <section>
        <div class="titleContainer">
            <h1>History</h1>
        </div>
        <div class="listsContainer">
            <div class="headerContainer" style="background-color: #A72693;">
                <h1>Proofs Of Education</h1>
            </div>     
            <div class="tableContainer">
                <table>
                     <?php
                        if(mysqli_num_rows($req4) == 0){
                            echo "<tr>
                                <td></td>
                                <td style='text-align:center; font-size:25px;color:red'>NO DATA FOUND</td>
                                <td></td>
                              <tr>";
                        }else{
                            while($reqResults=mysqli_fetch_row($req4)){
                                echo"
                                <tr>
                                    <td><p>".$reqResults[0]."</p></td>
                                    <td><p>".$reqResults[1]."</p></td>
                                    <td><p>".$reqResults[2]."</p></td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </table>
            </div>
            <div style="background-color: #A72693;">
                <p><a  href="../pages/HistoryPoF.php">ALL -></a></p2>
            </div>
        </div>
        <div class="listsContainer">
            <div class="headerContainer" style="background-color: #241663;">
                <h1>Internship Certifcates</h1>
            </div>     
            <div class="tableContainer">
                <table>
                     <?php
                        if(mysqli_num_rows($req6) == 0){
                            echo "<tr>
                                <td></td>
                                <td style='text-align:center; font-size:25px;color:red'>NO DATA FOUND</td>
                                <td></td>
                              <tr>";
                        }else{
                            while($reqResults=mysqli_fetch_row($req6)){
                                echo"
                                <tr>
                                    <td><p>".$reqResults[0]."</p></td>
                                    <td><p>".$reqResults[1]."</p></td>
                                    <td><p>".$reqResults[2]."</p></td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </table>
            </div>
            <div style="background-color: #241663;">
                <p><a href="../pages/HistoryIC.php">ALL -></a></p2>
            </div>
        </div>
        <div class="listsContainer">
            <div class="headerContainer" style="background-color: #160F30">
                <h1>Acadamic Transcripts</h1>
            </div>     
            <div class="tableContainer">
                <table>
                     <?php
                        if(mysqli_num_rows($req5) == 0){
                        echo "<tr>
                                <td></td>
                                <td style='text-align:center; font-size:25px;color:red'>NO DATA FOUND</td>
                                <td></td>
                              <tr>";
                        }else{
                            while($reqResults=mysqli_fetch_row($req5)){
                                echo"
                                <tr>
                                    <td><p>".$reqResults[0]."</p></td>
                                    <td><p>".$reqResults[1]."</p></td>
                                    <td><p>".$reqResults[2]."</p></td>
                                </tr>
                                ";
                            }
                        }
                    ?>
                </table>
            </div>
            <div style="background-color: #160F30">
                <p><a  href="../pages/HistoryAC.php">ALL -></a></p2>
            </div>
        </div>
    </section>
    <footer>
        <div>
            <img src="../assets/log.jpg"/>
        </div>
        <div>
            <ul>
                <li>Address : Avenue de la Palestine Mhanech I, TÉTOUAN</li>
                <li>Phone Number :0694206660</li>
                <li>E-mail :portail@gmail.com</li>
            </ul>
        </div>
   </footer>
</body>
<script src="../js/board.js"></script>
</html>