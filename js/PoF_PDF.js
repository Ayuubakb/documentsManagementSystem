
let generatePdf=(FN,LN,CNE,clas)=>{
    let date=new Date();
    let j=date.getDate();
    let m=date.getMonth()+1;    
    let y=date.getFullYear();
    let e2="<h1 style='text-align:center;margin-bottom:40px'>Attestation de fréquentation scolaire</h1>";
    let e3="<p style='padding:10px'>Je, soussigné(e) :nomDirecteur</p>";
    let e4="<p style='padding-left:50px'>Agissant en tant que : Dirécteur de l'ENSA de Tetouan</p>";
    let e5="<p style='padding-left:50px'>Que l'etudiant:"+FN+" "+LN+"</p>";
    let e7="<p style='padding-left:50px'>N° CNE : "+CNE+"</p>";
    let e8="<p style='padding-left:50px'>Est inscrit(e) à : ENSA Tetouan : Avenue de la Palestine Mhanech I, TÉTOUAN</p>";
    let e9="<p style='padding-left:50px'>En classe de :"+clas+"</p>";
    let e10="<p style='padding-left:50px'>Pour l’année scolaire: "+y+"</p>";
    let e11="<p style='padding:10px;float:right;margin-top:20px'>Fait à Tetouan, le "+j+"/"+m+"/"+y+"</p>";

    let eFinal=e2+e3+e4+e5+e7+e8+e9+e10+e11;
    
    html2pdf(eFinal);
}













