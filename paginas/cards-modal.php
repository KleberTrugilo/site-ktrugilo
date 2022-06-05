<div class="modal fade" id="modalCardsImagens" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row row-cols-1 row-cols-md-3 g-4" id="cardsAtividadesIntegrado">
                    <?php
                        echo
                        "<div class='col'>
                                    <div class='card h-100 border border-secondary'>
                                        <img src='imagens/img-galeria/{$imagem}' class='card-img-top' alt='Projetos'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>{$titulo}</h5>
                                            <p class='card-text'>{$texto}.</p>
                                        </div>
                                    </div>
                                </div>";
                    ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>