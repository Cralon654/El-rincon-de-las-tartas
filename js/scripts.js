let tarta1 = {
    src:'/elrincondelastartas/images/tartas/tarta-home-1.webp', id:'tarta1'
};

let tarta2 = {
    src:'/elrincondelastartas/images/tartas/tarta-home-2.webp', id:'tarta2'
};
let tarta3 = {
    src:'/elrincondelastartas/images/tartas/tarta-home-3.webp', id:'tarta3'
};
let tarta4 = {
    src:'/elrincondelastartas/images/tartas/tarta-home-4.webp', id:'tarta4'
};





var arrayTartas = new Array(tarta1, tarta2, tarta3, tarta4);

function inicio() {
    document.images["ruletaimg"].src = tarta1.src;
}

function ruleta() {
    
    let tartarandom  = arrayTartas[Math.floor(Math.random() * 4)];

    return tartarandom;

}

function verTarta(idElemento) {
    

    document.getElementById(idElemento).scrollIntoView();
}

function spin() {
    var randomImage;
    let timerId = setInterval(function () {
        randomImage = ruleta();
        $("#ruletaimg").fadeOut(500);
        document.images["ruletaimg"].src = randomImage.src;
        $("#ruletaimg").fadeIn(500);

    }, 1000);

    
    setTimeout(() => { clearInterval(timerId); }, 10000);
    setTimeout(() => { verTarta(randomImage.id); }, 11000);
   
}

