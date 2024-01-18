const btn=document.getElementById('subBtn');
const mail=document.getElementById('mail');
const object=document.getElementById('object');
const desc=document.getElementById('desc');
var flag1=false,flag2=false,flag3=false

function verification(){
    if(flag1 && flag2 && flag3){
        btn.disabled=false
    }else{
        btn.disabled=true
    }
}
function valueMail(callback){
    mail.value==""? flag1=false:flag1=true;
    callback();
}
function valueObject(callback){
    object.value==""? flag2=false:flag2=true;
    callback();
}
function valueDesc(callback){
    desc.value==""? flag3=false:flag3=true;
    callback();
}

mail.addEventListener('keyup',()=>valueMail(verification))
object.addEventListener('keyup',()=>valueObject(verification))
desc.addEventListener('keyup',()=>valueDesc(verification))


