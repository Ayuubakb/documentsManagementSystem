
let generatePdf=(FN,LN,CNE,CN,SN,CA)=>{
    let date=new Date();
    let j=date.getDate();
    let m=date.getMonth()+1;    
    let y=date.getFullYear();
    let e0="<h1 style='text-align:center'>Convention de Stage</h1>"
    let e1="<p style='padding:10px'>Entre les soussignés :</p>\n";
    let e2="<p style='padding:10px'>Entreprise: "+CN+"</p>\n";
    let e5="<p style='padding:10px'>Adresse de l'entreprise, "+CA+"</p>"
    let e6="<p style='padding:10px'>Mme/M. "+LN+" "+FN+",  immatriculé  sous le numéro "+CNE+", </p>"
    let e7="<p style='padding:10px'>Nom de l'établissement d'enseignement: ENSA TETOUAN</p>"
    let e8="<p style='padding:10px'>Adresse : Avenue de la Palestine Mhanech I, TÉTOUAN</p>"
    let e9="<p style='padding:10px'>Il a été convenu ce qui suit.</p>"
    let e10="<h1 style='font-size:20px'>Article I. Projet et missions</h1>"
    let e11="<p style='padding:10px'>Le stage encadré par cette présente convention s'inscrit dans un projet pédagogique, personnel et professionnel visant à permettre au stagiaire de se préparer au mieux à l'entrée dans la vie active. Dans ce contexte, le stagiaire sera amené à mettre en pratique les compétences théoriques et pratiques acquises au sein de l'établissement d'enseignement.</p>"
    let e12="<h1 style='font-size:20px'>Article II. Modalités d'encadrement</h1>"
    let e13="<p style='padding:10px'>Durant toute la durée de son stage, le stagiaire sera encadré par "+SN+".</p>"
    let e14="<h1 style='font-size:20px'>Article III. Protection sociale et assurance</h1>"
    let e15="<p style='padding:10px'>Le stagiaire conserve durant toute la durée de son stage la protection sociale à laquelle il est affilié, ainsi que son statut d'étudiant. Il bénéficie par ailleurs de la législation sur les accidents du travail. Le stagiaire est invité à souscrire une assurance responsabilité civile et à en fournir une attestation à l'entreprise\n.</p>"
    let e16="<h1 style='font-size:20px'>Article IV. Règlement intérieur</h1>"
    let e17="<p style='padding:10px'>Pendant toute la durée du stage, le stagiaire s'engage à respecter le règlement intérieur de l'entreprise et à s'astreindre à un devoir de réserve et de confidentialité. L'entreprise se réserve le droit de mettre fin au stage en cas de manquement disciplinaire grave.</p>"
    let e18="<p style='padding:10px'>Fait en trois exemplaires le "+j+"/"+m+"/"+y+" à Tetouan,</p>"

    let eFinale=e0+e1+e2+e5+e6+e7+e8+e9+e10+e11+e12+e13+e14+e15+e16+e17+e18;

    html2pdf(eFinale);
}