
document.querySelector('#form-busca').addEventListener('onsubmit', function(){
    if(document.querySelector('#q').value == ''){
        document.querySelector('#form-busca').style.background = 'red';
        // document.querySelector('#form-busca').textContent = 'Busca vazia';
        return false;
    }
});


var banners = ["img/destaque-home.png", "img/destaque-home-2.png", ];
var bannerAtual = 0;

function trocaBanner(){
    bannerAtual = (bannerAtual + 1) % 2;
    document.querySelector('#bigcity').src = banners[bannerAtual];
};

setInterval(trocaBanner(), 4000);

var botaoBanner = document.getElementById('#botao-destaque').addEventListener('click', function(){
    var botao = document.getElementById('#botao-destaque');
    if(botao.className == 'pause'){
        clearInterval(timer);
        botao.className = 'play';
    }else{
        timer = setInterval(trocaBanner, 4000);
        botao.className = 'pause';
    }
    return false;
});

var timer = setInterval(trocaBanner, 4000);



