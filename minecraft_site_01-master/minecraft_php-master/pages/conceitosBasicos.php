<?php
    $arquivo = file_get_contents('../conteudo.json');
    $json = json_decode($arquivo);
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Conceitos Básicos | Minecraft</title>
        <link rel="shortcut icon" href="../images/steve.png" type="image/x-icon">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="../css/atualizacoes.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
                <div class="container">
                    
                    <a href="index.html" class="navbar-brand">
                        <img src="../images/mine_logo.png" width="150" alt="">
                    </a>

                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                        <img src="../images/creeper.jpg" alt="" width="30px">
                    </button>

                    <div class="collapse navbar-collapse" id="nav-principal">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.html">Sobre o jogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="conceitosBasicos.php">Conceitos básicos</a>
                            </li>
                            <li class="nav-item"></li>
                                <a class="nav-link" href="ultimasAtualizacoes.php">Ultimas atualizações</a>
                            </li>
                            <li class="nav-item"></li>
                                <a class="nav-link" href="nomes.html">Nomes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h1 class="text-center tittle">Conheça mais sobre o Minecraft!</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-3 mb-5">
                        <div class="card">
                            <?php
                                echo '<img src="'.$json->imagem->img1.'" alt="Teste" class="card-img-top">';
                            ?>
                            <div class="card-body">
                                <h4 class="card-title text-center">Modo Sobrevivência</h4>
                                <p class="card-text text-justify">
                                    <?php
                                        echo $json->texto->txt1;
                                    ?>
                                </p>
                                <div class="collapse card-text" id="leiaMais1">
                                    <p class="text-justify">
                                        <?php
                                            echo $json->texto->txt1_2;
                                        ?> 
                                    </p>
                                </div>
                                <button class="btn botao-teste btn-ler-mais" type="button" data-toggle="collapse" data-target="#leiaMais1" aria-expanded="false" aria-controls="leiaMais1">Leia mais</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mb-5">
                        <div class="card">
                            <img src="../images/minecraft_criativo.avif" alt="Teste" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title text-center">Modo Criativo</h4>
                                <p class="card-text text-justify">
                                    <?php
                                        echo $json->texto->txt2;
                                    ?>
                                </p>
                                <div class="collapse card-text" id="leiaMais2">
                                    <p class="text-justify">
                                        <?php
                                            echo $json->texto->txt2_2;
                                        ?>
                                    </p>
                                </div>
                                <button class="btn botao-teste btn-ler-mais" type="button" data-toggle="collapse" data-target="#leiaMais2" aria-expanded="false" aria-controls="leiaMais2">Leia mais</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mb-5">
                        <div class="card">
                            <img src="../images/server.webp" alt="Test2" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title text-center">Servidores</h4>
                                <p class="card-text text-justify">
                                    <?php
                                        echo $json->texto->txt3;
                                    ?>
                                </p>
                                <div class="collapse card-text" id="leiaMais3">
                                    <p class="text-justify">
                                        <?php
                                            echo $json->texto->txt3_2;
                                        ?>
                                    </p>
                                </div>
                                <button class="btn botao-teste btn-ler-mais" type="button" data-toggle="collapse" data-target="#leiaMais3" aria-expanded="false" aria-controls="leiaMais3">Leia mais</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 mb-5">
                        <div class="card">
                            <img src="../images/mods_minecraft.jpg" alt="Test3" class="card-img-top">
                            <div class="card-body">
                                <h4 class="card-title text-center">Mods</h4>
                                <p class="card-text text-justify">
                                    <?php
                                        echo $json->texto->txt4;
                                    ?>
                                </p>
                                <div class="collapse card-text" id="leiaMais4">
                                    <p class="text-justify">
                                        <?php
                                            echo $json->texto->txt4_2;
                                        ?>
                                    </p>
                                </div>
                                <button class="btn botao-teste btn-ler-mais" type="button" data-toggle="collapse" data-target="#leiaMais4" aria-expanded="false" aria-controls="leiaMais4">Leia mais</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-5">
                        <h1 class="text-center tittle">Itens básicos do jogo</h1>
                    </div>
                </div>
                <div id="carousel-itensBasicos-computador" class="carousel slide d-none d-lg-block" data-ride="carousel">
                        <div class="carousel-inner">
                            <!--Para computador-->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card card-item">
                                            <?php
                                                echo '<img src="'.$json->imagem->img_itemBasico1.'" alt="Teste" class="card-img-top">';
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title text-center">Crafting Table</h4>
                                                <p class="card-text text-justify">
                                                    <?php
                                                        echo $json->texto->txt_itemBasico1;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card card-item">
                                            <?php
                                                echo '<img src="'.$json->imagem->img_itemBasico2.'" alt="Teste" class="card-img-top">';
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title text-center">Fornalha</h4>
                                                <p class="card-text text-justify">
                                                    <?php
                                                        echo $json->texto->txt_itemBasico2;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card card-item">
                                            <?php
                                                echo '<img src="'.$json->imagem->img_itemBasico3.'" alt="Teste" class="card-img-top">';
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title text-center">Cama</h4>
                                                <p class="card-text text-justify">
                                                    <?php
                                                        echo $json->texto->txt_itemBasico3;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row ">
                                    <div class="col-4">
                                        <div class="card card-item">
                                            <?php
                                                echo '<img src="'.$json->imagem->img_itemBasico4.'" alt="Teste" class="card-img-top">';
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title text-center">Espada de Ferro</h4>
                                                <p class="card-text text-justify">
                                                    <?php
                                                        echo $json->texto->txt_itemBasico4;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card card-item">
                                            <?php
                                                echo '<img src="'.$json->imagem->img_itemBasico5.'" alt="Teste" class="card-img-top" height="387px">';
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title text-center">Escudo</h4>
                                                <p class="card-text text-justify">
                                                    <?php
                                                        echo $json->texto->txt_itemBasico5;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card card-item">
                                            <?php
                                                echo '<img src="'.$json->imagem->img_itemBasico6.'" alt="Teste" class="card-img-top">';
                                            ?>
                                            <div class="card-body">
                                                <h4 class="card-title text-center">Pão</h4>
                                                <p class="card-text text-justify">
                                                    <?php
                                                        echo $json->texto->txt_itemBasico6;
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#carousel-itensBasicos-computador" class="carousel-control-next" data-slide="next">
                            <img src="../images/botao-avancar.png" width="50px">
                        </a>
                        <a href="#carousel-itensBasicos-computador" class="carousel-control-prev" data-slide="prev">
                            <img src="../images/botao-avancar.png" width="50px">
                        </a>
                    </div>

                    
                </div>
                <div id="carousel-itensBasicos-celular" class="carousel slide d-block d-lg-none p-5" data-ride="carousel">
                    <div class="carousel-inner">

                        <!--Para celular-->
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-item">
                                        <?php
                                            echo '<img src="'.$json->imagem->img_itemBasico1.'" alt="Teste" class="card-img-top">';
                                        ?>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Crafting Table</h4>
                                            <p class="card-text text-justify">
                                                <?php
                                                    echo $json->texto->txt_itemBasico1;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-item">
                                        <?php
                                            echo '<img src="'.$json->imagem->img_itemBasico2.'" alt="Teste" class="card-img-top">';
                                        ?>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Fornalha</h4>
                                            <p class="card-text text-justify">
                                                <?php
                                                    echo $json->texto->txt_itemBasico2;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-item">
                                        <?php
                                            echo '<img src="'.$json->imagem->img_itemBasico3.'" alt="Teste" class="card-img-top">';
                                        ?>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Cama</h4>
                                            <p class="card-text text-justify">
                                                <?php
                                                    echo $json->texto->txt_itemBasico3;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-item">
                                        <?php
                                            echo '<img src="'.$json->imagem->img_itemBasico4.'" alt="Teste" class="card-img-top">';
                                        ?>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Espada de Ferro</h4>
                                            <p class="card-text text-justify">
                                                <?php
                                                    echo $json->texto->txt_itemBasico4;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-item">
                                        <?php
                                            echo '<img src="'.$json->imagem->img_itemBasico5.'" alt="Teste" class="card-img-top"  height="387px">';
                                        ?>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Escudo</h4>
                                            <p class="card-text text-justify">
                                                <?php
                                                    echo $json->texto->txt_itemBasico5;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-item">
                                        <?php
                                            echo '<img src="'.$json->imagem->img_itemBasico6.'" alt="Teste" class="card-img-top">';
                                        ?>
                                        <div class="card-body">
                                            <h4 class="card-title text-center">Pão</h4>
                                            <p class="card-text text-justify">
                                                <?php
                                                    echo $json->texto->txt_itemBasico6;
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#carousel-itensBasicos-celular" class="carousel-control-next" data-slide="next">
                        <img src="../images/botao-avancar.png" width="50px">
                    </a>
                    <a href="#carousel-itensBasicos-celular" class="carousel-control-prev" data-slide="prev">
                        <img src="../images/botao-avancar.png" width="50px">
                    </a>
                </div>
            </div>
        </main>
        
        <footer>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-5 mb-md-0 d-flex justify-content-center bg">
                                <img src="../images/microsoft_logo.png" alt="" width="150px">
                            </div>
                            <div class="col-12 col-md-6 mb-5 mb-md-0 d-flex justify-content-center">
                                <img src="../images/mojang_logo.png" alt="" width="150px" height="100px">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center bg">
                        <div>
                            <h6 class="text-social-media">Redes Sociais</h6>
                            <p class="text">Para mais informações, siga as redes sociais oficiais do Minecraft!</p>
                            <div class="icones">
                                <a target="blank" href="https://www.instagram.com/minecraft/?hl=pt"><img class="social-media" src="../images/insta.jpg" alt=""></a>
                                <a target="blank" href="https://www.reddit.com/r/Minecraft/?rdt=43834"><img class="social-media" src="../images/reddit.png" alt="" ></a>
                                <a  target="blank" href="https://www.facebook.com/minecraft/?locale=pt_BR"><img class="social-media" src="../images/facebook.png" alt="" ></a>
                            </div>
                            <p class="text-direitos-autorais">Todos os direitos autorais são reservados pela Mojang, site apenas com fins educativos.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Parte do JS Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>