var bigcity = document.querySelector("#bigcity");
bigcity.onclick(alteraTitulo());

function alteraTitulo(){
    var titulo = document.querySelector("title");
    titulo.textContent = "Agora o texto do elemento mudou!";
}

