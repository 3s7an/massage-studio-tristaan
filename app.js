// -- sekcia pre zmenu cien masazi

let tlacitko1 = document.querySelector("#polhodka");
let tlacitko2 = document.querySelector("#hodka");
let swedish = document.querySelector(".swedish");
let trigger = document.querySelector(".trigger");
let thai = document.querySelector(".thai");
let hot = document.querySelector(".hot");
let lymphatic = document.querySelector(".lymphatic");
let cupping = document.querySelector(".cupping");




tlacitko2.addEventListener("click", function(){
    swedish.innerHTML = '60';
    trigger.innerHTML ='64';
    thai.innerHTML = '76';
    hot.innerHTML = '50';
    lymphatic.innerHTML = '90';
    cupping.innerHTML = '60';
});

tlacitko1.addEventListener("click", function(){
    swedish.innerHTML = '30';
    trigger.innerHTML = '32';
    thai.innerHTML = '38';
    hot.innerHTML = '25';
    lymphatic.innerHTML = '45';
    cupping.innerHTML = '30';
});

// -- koniec sekcie pre zmenu cien masazi







