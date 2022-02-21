var listP = [
    { name: "MON PREMIER", sltc: 0, pos: "fisrt" },
    { name: "MON DEUXIEME", sltc: 0, pos: "first" },
    { name: "MON TROISIEME", sltc: 0, pos: "first" },
    { name: "MON QUATRIEME", sltc: 0, pos: "first" }
  ];
  const first= document.querySelector(".first");
const second= document.querySelector(".second");
const third= document.querySelector(".third");
const all= document.querySelector(".all");
//creation div bouton
const next1 = document.createElement("div");
next1.setAttribute("class", "next");
const next2 = document.createElement("div");
next2.setAttribute("class", "next");
// creation div icones
const image1 = document.createElement("input");
image1.setAttribute("class", "nextprev");
image1.setAttribute("type", "image");
image1.src= "../img/next.ico";
const image2 = document.createElement("input");
image2.setAttribute("class", "nextprev");
image2.setAttribute("type", "image");
image2.src= "../img/previous.ico";
//afficher les button
second.appendChild(all);
all.appendChild(next1);
all.appendChild(next2);
next1.appendChild(image1);
next2.appendChild(image2);
//build
function affiche()
{
    listP.forEach(element => {
    const para = document.createElement("p");
    para.innerText= element.name;
    first.appendChild(para);
    para.addEventListener('click', function(){
        para.classList.toggle('selected');
          if (element.sltc == false) 
          {
              element.sltc = true;
              image2.toggleAttribute("disabled");
              if (image1.hasAttribute("disabled")) {
                  image1.toggleAttribute("disabled");
              }
          } 
          else 
          {
            element.sltc= false;
              image2.toggleAttribute("disabled");
          }
    });
});
}
//remove
function supprimer(element, to) 
{
    if (to.id == "third") 
    {
        first.querySelectorAll('p').forEach(node => {
            if (node.innerText == element.name) {
                first.removeChild(node);
            }
        });
    } 
    else 
    {
        third.querySelectorAll('p').forEach(node => {
            if (node.innerText == element.name) {
                third.removeChild(node);
            }
        });
    }
}
//deplacer
function deplacer(element, to) {
    var p = document.createElement('p');
    p.innerText = element.name;
    element.sltc = false;
    p.onclick = () => {
        p.classList.toggle("selected");
        if (element.sltc == false) {
            element.sltc = true;
            if (element.sltc) {
                image2.toggleAttribute("disabled");
                if (image1.hasAttribute("disabled")) 
                {
                    image1.toggleAttribute("disabled");
                }
            }
        } 
        else 
        {
            element.sltc = false;
        }
    }
    to.appendChild(p);
    supprimer(element, to);
}
  affiche();
image1.onclick = () => {
    listP.forEach(element => {
        if (element.sltc == true) {
            deplacer(element, third);
            element.pos = "third";
        }
    });
  }
  
  image2.onclick = () => {
    listP.forEach(element => {
        if (element.sltc == true) {
            deplacer(element, first);
            element.pos = "first";
        }
    });
  }


// Selection par hover

