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
    submit.removeAttribute('disabled');
        submit.setAttribute("enabled", "enabled");
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
        var taillePassword= parseInt(document.getElementById("passLength").value);
    let newP ='';

    if (choice.length != 0 && taillePassword>=15 && taillePassword<=20) 
    {
        for (let i = 0; i < taillePassword; i++) 
        {
        newP += choice[Math.floor(Math.random() * choice.length)];
        }
        showPassword.value = newP; 
    } 
    else
    alert ("La longueur du mot de passe est comprise entre 15 et 20 caractères.");
    
}
