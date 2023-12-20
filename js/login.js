let div1=document.getElementById('div1');
let div2=document.getElementById('div2');
window.addEventListener('load',()=>{
    setTimeout(()=>{
        div1.style.transform='translateX(0)';
        div2.style.transform='translateX(0)';
    },500);
;});

let btn=document.getElementById('loginBtn');
let input1=document.getElementById('email');
let input2=document.getElementById('password');
btn.addEventListener('click',(e)=>{
    if(input1.value === "" || input2.value === ""){
        document.getElementById('errMsg').style.visibility='visible';
        document.getElementById('errMsg').innerHTML='You Left Empty Fields';
        e.preventDefault();
    }
    else{
        return true;
    }
})