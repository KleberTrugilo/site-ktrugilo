<section id="carouselExampleFade" class="carousel slide carousel-fade carrossel-sombra" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagens/banner/banner02.jpg" class="d-block w-100 carrossel2" alt="...">
            <div class="carousel-caption d-md-block carrossel-box efeito-vidro mb-3">
                <a href="" class="cor-texto-especial carrossel-box-texto">Projetos int.Lab</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="imagens/banner/banner03.jpg" class="d-block w-100 carrossel3" alt="...">
            <div class="carousel-caption d-md-block carrossel-box efeito-vidro mb-3">
                <a href="index.php?pagina=sobre" class="cor-texto-especial carrossel-box-texto">Um pouco da minha história</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>
<section class="box-secao-principal my-5">
    <?php require "cards.php" ?>   
</section>
