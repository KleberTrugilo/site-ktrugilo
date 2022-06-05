<?php require "conecta.php" ?>
<section>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100 border border-secondary">
                <?php
                    $sql = "select id, imagem, texto, tipo, titulo from cards where tipo = 'projeto' order by rand() limit 1";

                    $consulta = $pdo->prepare($sql);
                    $consulta->execute();

                    while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                        $imagem = $dados->imagem;
                        $titulo = $dados->titulo;
                        $texto = $dados->texto;
                    ?>
                <img src="imagens/img-projetos/<?= $imagem ?>" class="card-img-top" alt="Projetos">
                <a href="" class="card-header fw-bold fs-3 text-center bg-secondary text-decoration-none">Projetos</a>
                <div class="card-body">
                    <h5 class="card-title"><?= $titulo ?></h5>
                    <p class="card-text"><?= $texto ?>.</p>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border border-secondary">
                <?php
                    $sql = "select id, imagem, texto, tipo, titulo from cards where tipo = 'certificado' order by rand() limit 1";

                    $consulta = $pdo->prepare($sql);
                    $consulta->execute();

                    while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                        $imagem = $dados->imagem;
                        $titulo = $dados->titulo;
                        $texto = $dados->texto;
                    ?>
                    <img src="imagens/img-certificados/<?= $imagem ?>" class="card-img-top" alt="Projetos">
                    <a href="index.php?pagina=meus-cursos" class="card-header fw-bold fs-3 text-center bg-secondary text-decoration-none">Cursos</a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $titulo ?></h5>
                        <p class="card-text"><?= $texto ?>.</p>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>
        <div class="col">
            <div class="card h-100 border border-secondary">
                <?php
                    $sql = "select imagem, texto, titulo from cards where tipo = 'galeria' order by rand() limit 1";

                    $consulta = $pdo->prepare($sql);
                    $consulta->execute();

                    while($dados = $consulta->fetch(PDO::FETCH_OBJ)){
                        $imagem = $dados->imagem;
                        $titulo = $dados->titulo;
                        $texto = $dados->texto;
                    ?>
                    <img src="imagens/img-galeria/<?= $imagem ?>" class="card-img-top" alt="Imagem da galeria">
                    <a href="index.php?pagina=galeria" class="card-header fw-bold fs-3 text-center bg-secondary text-decoration-none">Galeria</a>
                    <div class="card-body">
                        <h5 class="card-title"><?= $titulo ?></h5>
                        <p class="card-text"><?= $texto ?>.</p>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>