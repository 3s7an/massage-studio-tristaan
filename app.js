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
    swedish.innerHTML = '60<i class="fa-solid fa-euro-sign">';
    trigger.innerHTML ='64<i class="fa-solid fa-euro-sign">';
    thai.innerHTML = '76<i class="fa-solid fa-euro-sign">';;
    hot.innerHTML = '50<i class="fa-solid fa-euro-sign">';;
    lymphatic.innerHTML = '90<i class="fa-solid fa-euro-sign">';;
    cupping.innerHTML = '60<i class="fa-solid fa-euro-sign">';;
});

tlacitko1.addEventListener("click", function(){
    swedish.innerHTML = '30<i class="fa-solid fa-euro-sign">';;
    trigger.innerHTML = '32<i class="fa-solid fa-euro-sign">';;
    thai.innerHTML = '38<i class="fa-solid fa-euro-sign">';;
    hot.innerHTML = '25<i class="fa-solid fa-euro-sign">';;
    lymphatic.innerHTML = '45<i class="fa-solid fa-euro-sign">';;
    cupping.innerHTML = '30<i class="fa-solid fa-euro-sign">';;
});

// -- koniec sekcie pre zmenu cien masazi







