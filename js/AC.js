let searchBar=document.getElementById('searchBar');
let selectBar=document.getElementById('selectBar');
let type=document.getElementById('tableType').innerText; 
let docContainetr=document.getElementById('demandContainer');

if(type === 'Acandemic Transcripts'){
    type="demanderel";
}else if(type === 'Proof Of Education'){
    type="demandeatt";
}else if(type === 'Internship Certificates'){
    type="demandeconv";
}else if(type === 'Proof Of Education History'){
    type="demandeattHistory";
}else if(type === 'Acandemic Transcripts History'){
    type="demanderelHistory";
}else{
    type="demandeconvHistory";
}



searchBar.addEventListener('keyup',()=>{
    let xml=new XMLHttpRequest();
    xml.onreadystatechange=()=>{
        if(xml.status==200 && xml.readyState==4 ){
            docContainetr.innerHTML=xml.responseText;
        }
    }
    xml.open("POST","../php/search.php?q="+searchBar.value+"&t="+type+"");
    xml.send();
})

selectBar.addEventListener('change',()=>{
    let xml=new XMLHttpRequest();
    xml.onreadystatechange=()=>{
        if(xml.status==200 && xml.readyState==4 ){
            docContainetr.innerHTML=xml.responseText;
        }
    }
    xml.open("POST","../php/tri.php?q="+selectBar.value+"&t="+type+"");
    xml.send();
})

let showBanner=(fname,lname,email,id)=>{
    let banner=document.createElement('div');
    banner.classList.add('motifBanner')
    let div=document.createElement('div');
    let textArea=document.createElement('textarea');
    textArea.placeholder='Declining reason...';
    let button=document.createElement('button');
    button.innerText='Decline'
    div.appendChild(textArea)
    div.appendChild(button)
    banner.appendChild(div)
    document.getElementById('sec').appendChild(banner);
}

let refuseFct=(fname,lname,email,id,motif)=>{
    let xml=new XMLHttpRequest();
    xml.onreadystatechange=()=>{
        if(xml.status==200 && xml.readyState==4){
            if(xml.response){
                document.getElementById(id).style.display='none';
            }
        }
    }
    xml.open("POST","../php/refuseMail.php?q="+type+"&l="+lname+"&f="+fname+"&e="+email+"&id="+id+"&motif="+motif);
    xml.send();
}

let sendFct=(fname,lname,email,id,cne,cn,sn,ca)=>{
    let xml=new XMLHttpRequest();
    xml.onreadystatechange=()=>{
        if(xml.status==200 && xml.readyState==4){
            if(xml.response){
                document.getElementById(id).style.display='none';
            }
        }
    }
    xml.open("POST","../php/sendMail.php?q="+type+"&l="+lname+"&f="+fname+"&e="+email+"&id="+id+"&cne="+cne+"&cn="+cn+"&sn="+sn+"&ca="+ca);
    xml.send();
}

let sendFctPof=(fname,lname,email,id,cne,clas)=>{
    let xml=new XMLHttpRequest();
    xml.onreadystatechange=()=>{
        if(xml.status==200 && xml.readyState==4){
            if(xml.response){
                document.getElementById(id).style.display='none';
            }
        }
    }
    xml.open("POST","../php/sendMail.php?q="+type+"&l="+lname+"&f="+fname+"&e="+email+"&id="+id+"&cne="+cne+"&clas="+clas+"");
    xml.send();
}

let sendFctAC=(fname,lname,email,id,app)=>{
    let xml=new XMLHttpRequest();
    xml.onreadystatechange=()=>{
        if(xml.status==200 && xml.readyState==4){
            if(xml.response){
                document.getElementById(id).style.display='none';
            }
        }
    }
    xml.open("POST","../php/sendMail.php?q="+type+"&l="+lname+"&f="+fname+"&e="+email+"&id="+id+"&app="+app+"");
    xml.send();
}