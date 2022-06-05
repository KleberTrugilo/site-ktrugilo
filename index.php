<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTrugilo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@700&family=Kdam+Thmor+Pro&family=Orbitron:wght@600&family=Quantico:wght@700&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body class="fonte-body">
    <header>
        <nav class="navbar navbar-expand-lg bg-header fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand cor-texto-especial EuKleber-fonte" href="index.php?pagina=home">KTrugilo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active text-info" aria-current="page" href="index.php?pagina=home">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="index.php?pagina=sobre">Quem sou?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="index.php?pagina=galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="index.php?pagina=contato">Contato</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-info" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Portifólio
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="index.php?pagina=projetos">Projetos</a></li>
                                <li><a class="dropdown-item" href="index.php?pagina=meus-cursos">Meus cursos</a><li>                             
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main class="mt-5">
        <?php
            $pagina = $_GET['pagina'] ?? "home";
            $arquivo = "paginas/{$pagina}.php";

            if (file_exists($arquivo)) {
                require $arquivo;
            } else {
                require "paginas/erro.php";
            }
        ?>
    </main>

    <footer class="text-white text-center footer-imagem">
        <?php require "paginas/footer.php" ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>