<?php require "conecta.php" ?>
<section class="bg-principal">
    <div class="box-secao-principal">
        <h1 class="cor-texto-especial EuKleber-fonte pt-5 mb-5">Galeria</h1>

    <!-- Atividades no Integrado -->

        <h2 class="text-center EuKleber-fonte cor-texto-especial pt-5 mb-5">Atividades no Integrado</h2>
        <a href="" data-bs-toggle="modal" data-bs-target="#modalCardsImagens" class="text-decoration-none">
            <div class="row row-cols-1 row-cols-md-3 g-4" id="cardsAtividadesIntegrado">
                <?php 
                    $sql1 = "select imagem, titulo, texto from cards where tipo = 'galeria' and subtipo = 'integrado' order by rand() limit 3";

                    $consulta = $pdo->prepare($sql1);
                    $consulta->execute();

                    while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                        $imagem = $dados->imagem;
                        $titulo = $dados->titulo;
                        $texto = $dados->texto;

                        echo 
                            "<div class='col'>
                                <div class='card h-100 border border-secondary'>
                                    <img src='imagens/img-galeria/{$imagem}' class='card-img-top' alt='Projetos'>
                                    <div class='card-body'>
                                        <h5 class='card-title text-decoration-none'>{$titulo}</h5>
                                        <p class='card-text text-decoration-none'>{$texto}.</p>
                                    </div>
                                </div>
                            </div>"
                        ;
                    }
                ?>
            </div>
        </a>
        <div class="row row-cols-1 row-cols-md-3 g-4 d-none" id="cardsTodasAtividadesIntegrado">
            <?php 
                $sql1 = "select imagem, titulo, texto from cards where tipo = 'galeria' and subtipo = 'integrado' order by titulo";

                $consulta = $pdo->prepare($sql1);
                $consulta->execute();

                while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                    $imagem = $dados->imagem;
                    $titulo = $dados->titulo;
                    $texto = $dados->texto;

                    echo 
                        "<div class='col'>
                            <div class='card h-100 border border-secondary'>
                                <img src='imagens/img-galeria/{$imagem}' class='card-img-top' alt='Projetos'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$titulo}</h5>
                                    <p class='card-text'>{$texto}.</p>
                                </div>
                            </div>
                        </div>"
                    ;
                }
            ?>
        </div>
        <button id="botaoExpandeListaAtividades" class="botao">Mais fotos</button>
        <button id="botaoRecuaListaAtividades" class="botao d-none">Menos fotos</button>

    <!-- Imersão na natureza -->

        <h2 class="text-center EuKleber-fonte cor-texto-especial pt-5 mb-5">Imersão na Natureza</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="listaViagens">
            <?php 
                $sql = "select imagem, titulo, texto from cards where tipo = 'galeria' and subtipo in ('viagem', 'trilha') order by rand() limit 3";

                $consulta = $pdo->prepare($sql);
                $consulta->execute();

                while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                    $imagem = $dados->imagem;
                    $titulo = $dados->titulo;
                    $texto = $dados->texto;

                    echo
                        "<div class='col'>
                            <div class='card h-100 border border-secondary'>
                                <img src='imagens/img-galeria/{$imagem}' class='card-img-top' alt='Projetos'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$titulo}</h5>
                                    <p class='card-text'>{$texto}.</p>
                                </div>
                            </div>
                        </div>"
                    ;
                }
            ?>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 d-none" id="listaTodasViagens">
            <?php 
                $sql = "select imagem, titulo, texto from cards where tipo = 'galeria' and subtipo in ('viagem', 'trilha') order by titulo";

                $consulta = $pdo->prepare($sql);
                $consulta->execute();

                while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                    $imagem = $dados->imagem;
                    $titulo = $dados->titulo;
                    $texto = $dados->texto;

                    echo
                        "<div class='col'>
                            <div class='card h-100 border border-secondary'>
                                <img src='imagens/img-galeria/{$imagem}' class='card-img-top' alt='Projetos'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$titulo}</h5>
                                    <p class='card-text'>{$texto}.</p>
                                </div>
                            </div>
                        </div>"
                    ;
                }
            ?>
        </div>
        <button id="botaoExpandeListaViagens" class="botao">Mais fotos</button>
        <button id="botaoRecuaListaViagens" class="botao d-none">Menos fotos</button>

    <!-- Fazendo Arte -->

        <h2 class="text-center EuKleber-fonte cor-texto-especial pt-5 mb-5">Fazendo arte</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="ListaArtes">
            <?php 
                $sql = "select imagem, titulo, texto from cards where tipo = 'galeria' and subtipo = 'pintura' order by rand() limit 3";

                $consulta = $pdo->prepare($sql);
                $consulta->execute();

                while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                    $imagem = $dados->imagem;
                    $titulo = $dados->titulo;
                    $texto = $dados->texto;

                    echo
                        "<div class='col'>
                            <div class='card h-100 border border-secondary'>
                                <img src='imagens/img-galeria/{$imagem}' class='card-img-top' alt='Projetos'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$titulo}</h5>
                                    <p class='card-text'>{$texto}.</p>
                                </div>
                            </div>
                        </div>"
                    ;
                }
            ?>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 d-none" id="ListaTodasArtes">
            <?php 
                $sql = "select imagem, titulo, texto from cards where tipo = 'galeria' and subtipo = 'pintura' order by titulo";

                $consulta = $pdo->prepare($sql);
                $consulta->execute();

                while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                    $imagem = $dados->imagem;
                    $titulo = $dados->titulo;
                    $texto = $dados->texto;

                    echo
                        "<div class='col'>
                            <div class='card h-100 border border-secondary'>
                                <img src='imagens/img-galeria/{$imagem}' class='card-img-top' alt='Projetos'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$titulo}</h5>
                                    <p class='card-text'>{$texto}.</p>
                                </div>
                            </div>
                        </div>"
                    ;
                }
            ?>
        </div>
        <button id="botaoExpandeListaArtes" class="botao">Mais fotos</button>
        <button id="botaoRecuaListaArtes" class="botao d-none">Menos fotos</button>
    </div>
    <?php require "paginas/cards-modal.php" ?>
    <script src="paginas/galeria.js"></script>
</section>
