<?php

require('../php/connexion.php');

require('../fpdf186/fpdf.php');

$q=$_REQUEST['q'];
$f=$_REQUEST['f'];
$l=$_REQUEST['l'];
$date=date("d/m/Y");

if(!strcmp($q,"demanderel")){
    $q="Votre demande de relevee de note a ete accepter";
    $app=$_REQUEST['app'];
    require('connexion.php');
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,"Relevee de notes",0,1,'C');
    $e="Pour l'eleve : ".$f." ".$l."";
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(0,10,$e,0,1,'C');
    $e="Apogee: ".$app."";
    $pdf->Cell(0,10,$e,0,1,'C');
    $pdf->SetFont('Arial','B',8);
    $query3="SELECT ID_module,note,resultat,session,pts_jury FROM notes WHERE apogee=".$app."";
    $req3=mysqli_query($connection,$query3);
    while($res=mysqli_fetch_row($req3)){
        $query2="SELECT nom_module FROM module WHERE ID_module=".$res[0]."";
        $req2=mysqli_query($connection,$query2);
        while($res2=mysqli_fetch_row($req2)){
            $module=$res2[0];
        }
        $pdf->Cell(70,10,$module,1);
        $pdf->Cell(20,10,$res[1],1);
        $pdf->Cell(20,10,$res[2],1);
        $pdf->Cell(20,10,$res[3],1);
        $pdf->Cell(20,10,$res[4],1);
        $pdf->Ln(); 
    }
    $pdf->output('D','Document.pdf');
}else if(!strcmp($q,"demandeconv")){
    $CN=$_REQUEST['cn'];
    $SN=$_REQUEST['sn'];
    $CA=$_REQUEST['ca'];
    $CNE=$_REQUEST['cne'];
    $pdf = new FPDF();
    $pdf->AddPage();
    $q="Votre demande de convention de stage a ete accepter";
    $e="Convention de Stage";
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,$e,0,1,'C');
    $e="Entre les soussignes :";
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,10,$e,0,1);
    $e="Entreprise: ".$CN."";
    $pdf->Cell(0,10,$e,0,1);
    $e="Adresse de l'entreprise, ".$CA."";
    $pdf->Cell(0,10,$e,0,1);
    $e="Mme/M. ".$l." ".$f.",  immatricule  sous le numero ".$CNE.", ";
    $pdf->Cell(0,10,$e,0,1);
    $e="Nom de l'etablissement d'enseignement: ENSA TETOUAN";
    $pdf->Cell(0,10,$e,0,1);
    $e="Adresse : Avenue de la Palestine Mhanech I, TETOUAN";
    $pdf->Cell(0,10,$e,0,1);
    $e="Il a ete convenu ce qui suit.";
    $pdf->Cell(0,10,$e,0,1);
    $e="Article I. Projet et missions";
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,$e,0,1);
    $e="Le stage encadre par cette presente convention s'inscrit dans un projet pedagogique, personnel et professionnel visant a permettre au \n";
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,10,$e,0,1);
    $e="stagiaire de se preparer au mieux a l'entree dans la vie active. Dans ce contexte, le stagiaire sera amene a mettre en pratique les";
    $pdf->Cell(0,10,$e,0,1);
    $e=" competences theoriques et pratiques acquises au sein de l'etablissement d'enseignement.";
    $pdf->Cell(0,10,$e,0,1);
    $e="Article II. Modalites d'encadrement";
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,$e,0,1);
    $e="Durant toute la duree de son stage, le stagiaire sera encadre par ".$SN.".";
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,10,$e,0,1);
    $e="Article III. Protection sociale et assurance";
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,$e,0,1);
    $e="Le stagiaire conserve durant toute la duree de son stage la protection sociale a laquelle il est affilie, ainsi que son statut d'etudiant. \n";
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,10,$e,0,1);
    $e="Il beneficie par ailleurs de la legislation sur les accidents du travail. Le stagiaire est invite a souscrire une assurance responsabilite ";
    $pdf->Cell(0,10,$e,0,1);
    $e="civile et a en fournir une attestation a l'entreprise.";
    $pdf->Cell(0,10,$e,0,1);
    $e="Article IV. Reglement interieur";
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,$e,0,1);
    $e="Pendant toute la duree du stage, le stagiaire s'engage a respecter le reglement interieur de l'entreprise et a s'astreindre a un devoir de \n";
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,10,$e,0,1);
    $e="reserve et de confidentialite. L'entreprise se reserve le droit de mettre fin au stage en cas de manquement disciplinaire grave.";
    $pdf->Cell(0,10,$e,0,1);
    $e="Fait en trois exemplaires le ".$date." a Tetouan,";
    $pdf->Cell(0,10,$e,0,1);
    $pdf->output('D','Document.pdf');
}else{
    $clas=$_REQUEST['clas'];
    $CNE=$_REQUEST['cne'];
    $pdf = new FPDF();
    $pdf->AddPage();
    $q="Votre demande d'attestation de scolarite a ete accepte";
    $e="Attestation de frequentation scolaire";
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,$e,0,1,'C');
    $e="Je, soussigne(e) :nomDirecteur";
    $pdf->SetFont('Arial','B',8);
    $pdf->Cell(0,10,$e,0,1);
    $e="Agissant en tant que : Directeur de l'ENSA de Tetouan";
    $pdf->Cell(0,10,$e,0,1);
    $e="Que l'etudiant:".$f." ".$l."";
    $pdf->Cell(0,10,$e,0,1);
    $e="Numero CNE : ".$CNE."";
    $pdf->Cell(0,10,$e,0,1);
    $e="Est inscrit(e) a : ENSA Tetouan : Avenue de la Palestine Mhanech I, TETOUAN";
    $pdf->Cell(0,10,$e,0,1);
    $e="En classe de :".$clas."";
    $pdf->Cell(0,10,$e,0,1);
    $e="Pour l'annee scolaire: 2023";
    $pdf->Cell(0,10,$e,0,1);
    $e="Fait à Tetouan, le ".$date."";
    $pdf->Cell(0,10,$e,0,1,'R');
    $pdf->output('D','Document.pdf');
}
