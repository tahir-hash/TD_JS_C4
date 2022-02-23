var questions=[
    {
        quest:"Quel est mon repas favori ?",
        a:"Domoda",
        b:"Mafe",
        c:"Mbakhalou Saloum",
        d:"Thiebou Yapp",
        rep: "b"
    },
    {
        quest:"Quel est mon surnom ?",
        a:"Capo Bi",
        b:"The real",
        c:"Mbaye Pro 21",
        d:"Kamro",
        rep: "c"
    },
    {
        quest:"Quelle est ma passion ?",
        a:"Informatique",
        b:"Le Droit",
        c:"Fumer",
        d:"Audit",
        rep: "a"
    },
    {
        quest:"Qui est mon joueur de foot favori ?",
        a:"Edouard Mendy",
        b:"Mbappe",
        c:"Messi",
        d:"Cristiano Ronaldo",
        rep: "d"
    },
    {
        quest:"Qui est mon joueur de basket favori ?",
        a:"Micheal Jordan",
        b:" Stephen Curry",
        c:"Lebron James",
        d:"Lamello Ball",
        rep: "c"
    }
];

var contain= document.querySelector(".contain");
var titre= document.querySelector(".titre");
var form= document.querySelector(".formulaire");
var submit= document.getElementById("submit");
var one = document.getElementById("one");
var two = document.getElementById("two");
var three = document.getElementById("three");
var four = document.getElementById("four");
var taille= questions.length
var resultat= document.querySelector(".resultat");
var show= document.querySelector(".showScore");
var restart=document.getElementById("restart");
var enCours=0;
var score=0;
function load(index)
{
    var qst= questions[index];
    titre.textContent=(index + 1) + '. ' + qst.quest;
    one.textContent= qst.a;
    two.textContent= qst.b;
    three.textContent= qst.c;
    four.textContent= qst.d;
};


function suivant()
{
    var selectionner = document.querySelector('input[type="radio"]:checked');
    if(!selectionner)
    {
        document.getElementById("empty").innerText= "Veuillez cochez une case.";
        return;
    }
    //checked
    var reponse = selectionner.value;
    console.log(reponse);
    console.log(selectionner);
    if(questions[enCours].rep==reponse)
    {
        score++;
       
    }
    selectionner.checked=false;
    enCours++;
    document.getElementById("empty").innerText= "";
    if(enCours==taille)
    {
        contain.style.display="none";
        resultat.style.display="";
        show.textContent='vous avez trouvé '+ score+'/5';
        return;
    }
    load(enCours);
}
load(enCours);