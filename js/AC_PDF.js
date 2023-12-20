let generatePdf2=(FN,LN,CNE,APP)=>{
    console.log(APP);
    let titre="<!DOCTYPE html>\n<html>\n<h1 style='text-align:center;margin-bottom:25px'>Relevee de notes</h1>\n";
    let nomm="<p style='padding:15px'>Pour l'etudiant: "+LN+" "+FN+"</p>\n";
    let cnee="<p style='padding:10px'>CNE: "+CNE+"</p>\n";
    let e=titre+nomm+cnee;
    let xml= new XMLHttpRequest();
    xml.onreadystatechange=()=>{
        if(xml.status==200 && xml.readyState==4){
            var tableau= xml.responseText;
            var eFinal=e+tableau+"\n</html>";
            html2pdf().from(eFinal).save("relevee.pdf");
        }
    }
    xml.open('POST',"../php/releveMake.php?q="+APP+"");
    xml.send();
    
}