
const btnAdd = document.querySelector('.additem span');
var nbrElements = 0;
btnAdd.addEventListener('click',function() 
{
    nbrElements++;
const contain = document.getElementById("contain");
const subcontain = document.getElementById("subcontain");
const formgroup = document.createElement("div");
formgroup.setAttribute("class", "formgroup");
const icones = document.createElement("div");
icones.setAttribute("class", "icones");
const image1 = document.createElement("input");
image1.setAttribute("class", "affichageIcons");
image1.setAttribute("type", "image");
image1.src= "../img/delete.ico";
const image2 = document.createElement("input");
image2.setAttribute("class", "affichageIcons");
image2.setAttribute("type", "image");
image2.src= "../img/edit.ico";
const textarea = document.createElement("textarea");
textarea.setAttribute("cols", "30");
textarea.setAttribute("rows", "30");
subcontain.appendChild(formgroup);
icones.appendChild(image1);
icones.appendChild(image2);
formgroup.appendChild(icones);
formgroup.appendChild(textarea);
//supprimer
image1.addEventListener('click',function(){
   subcontain.removeChild(formgroup);    
});
//modifier
image2.addEventListener('click',function(){
   textarea.toggleAttribute('disabled');
 });

});
