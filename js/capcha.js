
let captch;
function generate(){
    // clear old input
    document.getElementById("submit").value="";
    // access the element  to store
    // the generated captccha
    captch=document.getElementById("image");
    let uniquechar="";

    const randomchar=
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    // generate captcha for length of
    // 5 with random character
    for(let i=1; i<5;i++)
    {
        uniquechar+=randomchar.charAt(Math.random()*randomchar.length)
    }
    captch.innerHTML=uniquechar;
}
function printmsg(){
    const usr_input=document.getElementById("submit").value;

    // check whether the input is equal 
    // to generate captcha or not
    if(usr_input==captch.innerHTML){
        let s=document.getElementById("key").innerHTML="Matched";
        
        
    }
    else{
        let s=document.getElementById("key").innerHTML=" not Matched";
        generate()
    }
}