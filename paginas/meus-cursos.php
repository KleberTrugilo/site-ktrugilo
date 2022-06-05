<?php require "conecta.php" ?>
<section class="bg-principal">
    <div class="box-secao-principal">
        <h1 class="cor-texto-especial EuKleber-fonte pt-5 mb-5 mx-3">Meus cursos</h1>
        <h2 class="text-center EuKleber-fonte cor-texto-especial pt-5 mb-5 mx-3">Durante o int.Lab</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
                $sql = "select imagem, titulo, texto from cards where tipo = 'certificado' order by titulo";

                $consulta = $pdo->prepare($sql);
                $consulta->execute();

                while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                    $imagem = $dados->imagem;
                    $titulo = $dados->titulo;
                    $texto = $dados->texto;

                    echo 
                        "<div class='col'>
                            <div class='card h-100 border border-secondary'>
                                <img src='imagens/img-certificados/{$imagem}' class='card-img-top' alt='Projetos'>
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
    </div>
</section>