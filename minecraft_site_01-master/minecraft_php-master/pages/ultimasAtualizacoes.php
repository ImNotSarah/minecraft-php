<?php
    $arquivo = file_get_contents('../conteudo.json');
    $json = json_decode($arquivo);
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ultimas Atualizações | Minecraft</title>
        <link rel="shortcut icon" href="../images/steve.png" type="image/x-icon">
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!--CSS-->
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
            <div class="container ">
                <div class="row">
                    <div class="col-12 mb-5">
                        <h1 class="text-center tittle">Confira as últimas atualizações do jogo: Tricky Trials</h1>
                    </div>
                </div>
                    
                <div class="row">
                        <div class="principal-atualizacao at-bg-1">
                            <div class="row align-items-center">

                                <div class="col-12 col-lg-6">
                                    <div class="row">                                    
                                        <div class="background-text">
                                            <h1>A Maça: </h1>
                                            <p>
                                                Empunhe a maça, uma arma que virá com a atualização Tricky Trials. Cronometre seu ataque esmagador na hora certa para derrubar seus inimigos, pois quanto maior a queda, mais forte será o golpe. Você pode até tornar a maça mais forte com três encantamentos exclusivos.
                                            </p>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="row" >
                                        <div class="">                                       
                                            <img class="img-fluid " src="../images/maça.avif" alt="" >                                     
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>


                <div class="row padding-20">
                    <div class="principal-atualizacao at-bg-2">
                        <div class="row align-items-center">

                            <div class="col-12 col-lg-6">
                                <div class="row" >
                                    <div class="">                                       
                                        <img class="img-fluid " src="../images/desafios.avif" alt="" >                                     
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="row">                                    
                                    <div class="background-text">
                                        <h1>Câmaras de desafios: </h1>
                                        <p>
                                            Descubra as câmaras de desafios, uma estrutura subterrânea repleta de armadilhas, desafios de combate traiçoeiros e tesouros! Todas as estruturas extensas são geradas aleatoriamente, portanto, você sempre enfrentará desafios diferentes. Triunfe para colher as recompensas!
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
            </div>

            <div class="row padding-20">
                <div class="principal-atualizacao at-bg-3">
                    <div class="row align-items-center">

                        <div class="col-12 col-lg-6">
                            <div class="row">                                    
                                <div class="background-text">
                                    <h1>A Brisa: </h1>
                                    <p>
                                        Lute contra a Brisa, uma criatura travessa que habita as câmaras de desafios e cujos ataques de vento o farão voar! Ágil e imune a projéteis, essa criatura é um inimigo difícil, mas o bastão da brisa que ela deixa cair pode ser usado para criar armas com o poder do vento.
                                    </p>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="row" >
                                <div class="">                                       
                                    <img class="img-fluid " src="../images/brisa.avif" alt="" >                                     
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container margin-50">
            <div class="row">
                <div class="col-12 mb-5">
                    <h1 class="text-center tittle">Mais atualizações: </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3 mb-5">
                    <div class="">
                        <img src="../images/minecraft_at1.jpg" alt="Sobrevivência" class="card-img-top img-rd">
                        <div class="">
                            <h3 class="tittle">Novas pinturas:</h3>
                            <p class="text">
                                A atualização Tricky Trials inclui 20 novas pinturas, para que você possa moldar seu mundo (e suas paredes) como quiser.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mb-5">
                    <div class="">
                        <img src="../images/minecraft_at2.jpg" alt="Teste" class="card-img-top img-rd">
                        <div class="">
                            <h3 class="tittle">Voe!</h3>
                            <p class="text">
                                Faça seus inimigos voarem com a carga de vento, que também pode acionar armadilhas e aumentar seus saltos!
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mb-5">
                    <div class="">
                        <img src="../images/minecraft_at3.jpg" alt="Test2" class="card-img-top img-rd">
                        <div class="">
                            <h3 class="tittle">Gerador de Desafios:</h3>
                            <p class="text">
                                Derrote todas as criaturas de um gerador de desafios e você poderá ser recompensado com uma chave de desafio que pode ser usada para desbloquear recompensas!
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3 mb-5">
                    <div class="">
                        <img src="../images/minecraft_at4.jpg" alt="Test3" class="card-img-top img-rd">
                        <div>
                            <h3 class="tittle">Ataques com maça:</h3>
                            <p class="text">
                                Cronometre seu ataque com a maça para lançar seus inimigos pelos ares: quanto maior a queda, mais forte será o golpe!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div class="container">
            <div id="carousel-itensAtualizacao-computador" class="carousel slide d-none d-lg-block" data-ride="carousel">
                <div class="carousel-inner">
                    <!--Para computador-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4">
                                <div class="card card-item">
                                    <?php
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao1.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Bancada Automática</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao1;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-item">
                                    <?php
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao2.'" alt="Teste" class="card-img-top" height="350px">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Armadura Para Lobo</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao2;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-item">
                                    <?php
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao3.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Ovo Gerador</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao3;
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
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao4.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Chave do Desafio</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao4;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-item">
                                    <?php
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao5.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Efeito Infestação (Poção)</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao5;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card card-item">
                                    <?php
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao6.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Vara de Vórtice</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao6;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#carousel-itensAtualizacao-computador" class="carousel-control-next" data-slide="next">
                    <img src="../images/botao-avancar.png" width="50px">
                </a>
                <a href="#carousel-itensAtualizacao-computador" class="carousel-control-prev" data-slide="prev">
                    <img src="../images/botao-avancar.png" width="50px">
                </a>
            </div>
            <div id="carousel-itensAtualizacao-celular" class="carousel slide d-block d-lg-none p-5" data-ride="carousel">
                <div class="carousel-inner">
                    <!--Para celular-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-12">
                                <div class="card card-item">
                                    <?php
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao1.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Bancada Automática</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao1;
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
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao2.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Armadura Para Lobo</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao2;
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
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao3.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Ovo Gerador</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao3;
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
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao4.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Chave do Desafio</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao4;
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
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao5.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Efeito Infestação (Poção)</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao5;
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
                                        echo '<img src="'.$json->imagem->img_itemAtualizacao6.'" alt="Teste" class="card-img-top">';
                                    ?>
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Vara de Vórtice</h4>
                                        <p class="card-text text-justify">
                                            <?php
                                                echo $json->texto->txt_itemAtualizacao6;
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#carousel-itensAtualizacao-celular" class="carousel-control-next" data-slide="next">
                    <img src="../images/botao-avancar.png" width="50px">
                </a>
                <a href="#carousel-itensAtualizacao-celular" class="carousel-control-prev" data-slide="prev">
                    <img src="../images/botao-avancar.png" width="50px">
                </a>
            </div>
        </div>
    </main>


        <footer class="">
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
                                <a target="blank" href="https://www.facebook.com/minecraft/?locale=pt_BR"><img class="social-media" src="../images/facebook.png" alt="" ></a>
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