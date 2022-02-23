var listP = [
    { name: "MON PREMIER", pos: "fisrt" },
    { name: "MON DEUXIEME",pos: "first" },
    { name: "MON TROISIEME", pos: "first" },
    { name: "MON QUATRIEME" ,pos: "first" }
  ];
  const first= document.querySelector(".first");
const second= document.querySelector(".second");
const third= document.querySelector(".third");
const all= document.querySelector(".all");
const image1 = document.getElementById("image1");
const image2 = document.getElementById("image2");
//creation div bouton
//build
function affiche()
{
    listP.forEach(element => {
    const para = document.createElement("p");
    para.innerText= element.name;
    first.appendChild(para);
    para.addEventListener('click', function(){
        para.classList.toggle('selected');
    });
    first.appendChild(para);
});
}

//deplacer
function deplacer(from, to) 
{
    const tableauP= from.querySelectorAll('p');

    tableauP.forEach(p1 => 
        {
            if(p1.classList.contains('selected'))
            {
                listP.forEach(tab => 
                    {
                        if(p1.innerText== tab.name)
                        {
                            var paragraphe=document.createElement('p');
                            paragraphe.textContent=tab.name;
                            to.appendChild(paragraphe);
                            from.removeChild(p1);
                            paragraphe.onclick= () =>
                            {
                                paragraphe.classList.toggle('selected');
                            };
                            tab.pos=!tab.pos;
                        }
                    })
            }
        });
}
image1.onclick = () => 
{
    deplacer(first,third)
}
  
image2.onclick = () => 
{
    deplacer(third,first)
}
  affiche();