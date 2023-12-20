<?php
    require('connexion.php');
    $q=$_REQUEST['q'];
    $query="SELECT ID_module,note,resultat,session,pts_jury FROM notes WHERE apogee=".$q."";
    $req=mysqli_query($connection,$query);
    echo "<table>";
    while($res=mysqli_fetch_row($req)){
        $query2="SELECT nom_module FROM module WHERE ID_module=".$res[0]."";
        $req2=mysqli_query($connection,$query2);
        while($res2=mysqli_fetch_row($req2)){
            $module=$res2[0];
        }
        echo"
            <tr>
                <td style='font-size:14px;padding:5px'>".$module."</td>
                <td style='font-size:14px;padding:5px'>".$res[1]."</td>
                <td style='font-size:14px;padding:5px'>".$res[2]."</td>
                <td style='font-size:14px;padding:5px'>".$res[3]."</td>
                <td style='font-size:14px;padding:5px'>".$res[4]."</td>
            </tr>
        ";
    }
    echo "</table>";
?>