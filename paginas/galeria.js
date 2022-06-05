//Atividades no Integrado
expandeListaDeCards ('#botaoExpandeListaAtividades','#cardsAtividadesIntegrado', '#cardsTodasAtividadesIntegrado', '#botaoRecuaListaAtividades');
recuaListaDeCards ('#botaoExpandeListaAtividades','#cardsAtividadesIntegrado', '#cardsTodasAtividadesIntegrado', '#botaoRecuaListaAtividades');

//Imersão na Natureza
expandeListaDeCards ('#botaoExpandeListaViagens', '#listaViagens', '#listaTodasViagens', '#botaoRecuaListaViagens');
recuaListaDeCards ('#botaoExpandeListaViagens', '#listaViagens', '#listaTodasViagens', '#botaoRecuaListaViagens');

//Fazendo Arte
expandeListaDeCards ('#botaoExpandeListaArtes', '#ListaArtes', '#ListaTodasArtes', '#botaoRecuaListaArtes');
recuaListaDeCards ('#botaoExpandeListaArtes', '#ListaArtes', '#ListaTodasArtes', '#botaoRecuaListaArtes');

function expandeListaDeCards (botaoExpande, seletorA, seletorB, botaoRecua){
    let elementoBotaoExpande = document.querySelector(botaoExpande);
    elementoBotaoExpande.addEventListener('click', function(){
        escondeElemento(seletorA);
        mostraElemento(seletorB);
        mostraElemento(botaoRecua);
        escondeElemento(botaoExpande);
    });
       
}

function recuaListaDeCards (botaoExpande, seletorA, seletorB, botaoRecua){
    let elementoBotaoRecua = document.querySelector(botaoRecua);
    elementoBotaoRecua.addEventListener('click', function(){
        
        mostraElemento(seletorA);
        escondeElemento(seletorB);
        mostraElemento(botaoExpande);
        escondeElemento(botaoRecua);
    });
       
}

function escondeElemento (seletor) {
    let elemento = document.querySelector(seletor);
    elemento.classList.add("d-none");
}

function mostraElemento (seletor){
    let elemento = document.querySelector(seletor);
    elemento.classList.remove("d-none");
}
