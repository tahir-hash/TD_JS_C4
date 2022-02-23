const showPassword=document.querySelector(".affiche");
const minuscules="abcdefghijklmnopqrstuvwxyz".split('');;
const majuscules="ABCDEFGHIJKLMNOPQRSTUVWXYZ".split('');;
const nombres= "0123456789".split('');
const symboles= "!@#$%^&*-_=+\|:;',.>/?~".split('');
const submit=document.getElementById("submit");
const check= document.querySelectorAll(".check");
const test= document.querySelector(".test");
const copy=document.getElementById("copied");


function hoverCopy()
{
    copy.className = 'copy hover';
}
function copyHidden()
{
    copy.className = 'copy';
}
function copied ()
{
    //copy.classList.add("copy hover");
    showPassword.select();
    document.execCommand('copy');
}
function actif ()
{
    if(min.checked || maj.checked || nbr.checked || spc.checked)
    {
         
        submit.removeAttribute("disabled")
    }
    else
    submit.setAttribute("disabled", "true");

   
}

//----------------------------------Fonction generate passwords-------------------------
function passwordGenerate()
{
    const choice = [].concat(
        min.checked ? minuscules : [],
        maj.checked ? majuscules : [],  //------------------- A AMELIORER
        nbr.checked ? nombres : [],
        spc.checked ? symboles : []
    );
var randmin = minuscules[Math.floor(Math.random()*minuscules.length)];
var randMaj = majuscules[Math.floor(Math.random()*majuscules.length)];
var randNum = nombres[Math.floor(Math.random()*nombres.length)];
var randspc = symboles[Math.floor(Math.random()*symboles.length)];
    const choice1 = [].concat(
        min.checked ? randmin : [],
        maj.checked ? randMaj : [],  //------------------- A AMELIORER
        nbr.checked ? randNum : [],
        spc.checked ? randspc : []
    );
        var taillePassword= parseInt(document.getElementById("passLength").value);
       // var tamp="";
    let newP ='';
    console.log(choice1);
    var required= choice1.join(''); 
    console.log(required);

    if (choice.length != 0 && taillePassword>=5 && taillePassword<=20 ) 
    {
        for (let i = 0; i < taillePassword - choice1.length; i++) 
        {
        newP += choice[Math.floor(Math.random() * choice.length)];
        }
       // console.log(newP);
       console.log(newP);

        showPassword.value = newP +required; 
        //console.log(showPassword);
    } 
    else
    alert ("La longueur du mot de passe est comprise entre 5 et 20 caractères.");
    
}
