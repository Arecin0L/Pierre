document.querySelector('p').textContent = 'zjaiof';

let diDiv = document.querySelector('div');

diDiv.querySelector('span').textContent = "I'm alive";

//diDiv.textContent = "Je suis la diDiv"

document.querySelector('p.bluge').style.backgroundColor = 'blue';


let querAll = document.querySelectorAll('p');

querAll.forEach(function(name, index){
    name.textContent += '(paragraphe n°:' + index + ')';
});

//selection via l'ID

document.getElementById('cardhu').textContent = 'Je suis un sky de kalitay !'

//selection via la classe

let kaikai = document.getElementsByClassName('kaiminus');
kaikai.textContent = "pokemon";
for(valeur of kaikai){
    valeur.style.color = "darkorange";
    valeur.style.backgroundColor = "chartreuse";
}

//selection avec les modes

let para1 = document.getElementById('p1')
let para2 = document.getElementById('p2')

//para1.style.color = 'aqua'

para2.parentNode.style.backgroundColor = 'brown'

let para = para1.childNodes;

para[1].style.fontWeight = 'bold'