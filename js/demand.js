let div1=document.getElementById('div1');
let div2=document.getElementById('div2');
window.addEventListener('load',()=>{
    setTimeout(()=>{
        div1.style.transform='translateX(0)';
        div2.style.transform='translateX(0)';
    },500);
;});

let slideItems=document.getElementsByClassName('slide');
let AT=document.getElementById('radio3');
let IC=document.getElementById('radio2');
let PoF=document.getElementById('radio1');
let btnNext=document.getElementById('next');
let btnBack=document.getElementsByClassName('goback');
let btnStage=document.getElementById('submitStage');
let btnReleve=document.getElementById('submitReleve');
let choices=document.getElementsByName('choix');

let inputs=slideItems[0].getElementsByTagName('input');
let inputsStage=slideItems[1].getElementsByTagName('input');
let inputsReleve=slideItems[2].getElementsByTagName('input');

let inputsObjct;

btnNext.addEventListener('click',()=>{
    document.getElementById('msg').innerHTML='';
    if(IC.checked || AT.checked || PoF.checked ){
        let flag=true;
        for(let i=0;i<inputs.length-3;i++){
            if(inputs[i].value === ""){
                flag=false;
                break;
            }
        }
        if(flag){
            inputsObjct={
                FN:inputs[0].value,
                LN:inputs[1].value,
                CN:inputs[2].value,
                AP:inputs[3].value,
                EM:inputs[4].value,
                FL:inputs[5].value,
            }
            console.log(inputsObjct);
            if(IC.checked || AT.checked ){
                if(IC.checked){
                    slideItems[1].style.display='block';
                }
                if(AT.checked){
                    slideItems[2].style.display='block';
                }
                setTimeout(()=>{
                    for(let i=0;i<slideItems.length;i++){
                        slideItems[i].style.transform='translateX(-100%)';
                    }
                },200)
            }else if(PoF.checked){
                    const inputsO=JSON.stringify(inputsObjct);
                    let xml=new XMLHttpRequest();
                    xml.onreadystatechange=()=>{
                        if(xml.status==200 && xml.readyState==4 ){
                                document.getElementById('msg').innerHTML=xml.responseText;
                        }
                    }
                    xml.open('POST','../php/attestationAdd.php');
                    xml.setRequestHeader("Content-Type", "application/json");
                    xml.send(inputsO);
            }
        }
    }
})

btnStage.addEventListener('click',()=>{
    document.getElementById('msg').innerHTML='';
    let flag=true;
    for(let i=0;i<inputsStage.length;i++){
        if(inputsStage[i].value === ""){
            flag=false;
            break;
        }
    }
    if(flag){
        inputsObjct={...inputsObjct,
            CoN:inputsStage[0].value,
            CA:inputsStage[1].value,
            CPN:inputsStage[2].value,
            SN:inputsStage[3].value,
            FAX:inputsStage[4].value,
            FoA:inputsStage[5].value,
        }
        console.log(inputsObjct);
        const inputsO=JSON.stringify(inputsObjct);
        let xml=new XMLHttpRequest();
        xml.onreadystatechange=()=>{
            if(xml.status==200 && xml.readyState==4 ){
                slideItems[0].style.transform='translateX(0%)';
                slideItems[1].style.transform='translateX(0%)';
                document.getElementById('msg').innerHTML=xml.responseText;
            }
        }
        xml.open('POST','../php/stageAdd.php');
        xml.setRequestHeader("Content-Type", "application/json");
        xml.send(inputsO);
    }
});

btnReleve.addEventListener('click',()=>{
    document.getElementById('msg').innerHTML='';
    let flag=true;
    for(let i=0;i<inputsReleve.length;i++){
        if(inputsReleve[i].value === ""){
            flag=false;
            break;
        }
    }
    if(flag){
        inputsObjct={...inputsObjct,
            Sem:inputsReleve[0].value,
            AY:inputsReleve[1].value,
        }
        const inputsO=JSON.stringify(inputsObjct);
        let xml=new XMLHttpRequest();
        xml.onreadystatechange=()=>{
            if(xml.status==200 && xml.readyState==4 ){
                slideItems[0].style.transform='translateX(0%)';
                slideItems[2].style.transform='translateX(0%)';
                document.getElementById('msg').innerHTML=xml.responseText;
            }
        }
        xml.open('POST','../php/relAdd.php');
        xml.setRequestHeader("Content-Type", "application/json");
        xml.send(inputsO);
    }
});

btnBack[0].addEventListener('click',()=>{
    for(let i=0;i<slideItems.length;i++){
        slideItems[i].style.transform='translateX(0%)';
    }
    slideItems[1].style.display='none';
})

btnBack[1].addEventListener('click',()=>{  
    for(let i=0;i<slideItems.length;i++){
        slideItems[i].style.transform='translateX(0%)';
    }
    slideItems[2].style.display='none';
})

