<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/build.css">
    <title>DreamBuild</title>
    <link rel="icon" type="image/png" href="../assets/logo.png">
</head>
<body>
    <div class="container-fluid banner">
        <div class="row align-items-center">
            <div class="col-2">
                <img class="mb-4 image" src="../assets/logo.png" alt="logoDD" width="150px" onclick="toHome()">
            </div>
            <div class="col-xl text-start">
                <div class="row">
                    <div class="col">
                        <span class="title fs-1 fw-bold">
                            Monte seu <span class="titlee">Computador</span>
                        </span>
                    </div>
                    <div class="col text-end fs-1 text-light exit" onclick="toHome()">
                        <ion-icon name="exit-outline"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row align-items-center">
            <div class="col">
                <img class="img-fluid imageAs" src="../assets/astronauta.png" alt="" height="100%">
            </div>
            <div class="col-md mt-4 p-4 text-start teste2">
                <span class="fs-4 textB">
                    Construa um sonho: <br> <br>
                </span>
                <span class="mx-4 text-light">
                    Construir um PC oferece uma série de vantagens que vão além do simples ato de montar um sistema. Primeiro, há a liberdade de personalização, permitindo escolher cada componente de acordo com suas necessidades e orçamento. Isso resulta em um sistema sob medida, otimizado para suas necessidades específicas, seja para jogos, trabalho ou qualquer outra finalidade.
                </span>
            </div>
            <div class="col-md text-end">
                <img class="img-fluid imageAs" src="../assets/rocket.png" alt="">
            </div>
        </div>
        <hr>

        <div class="container-fluid build">
            <div class="row fs-1 fw-bold align-items-end text-end">
                <div class="col text-start">
                    <span class="mt-4">Monte o PC Aqui</span>
                </div>
                <div class="col">
                    <div class="logo mt-4">
                        <img src="../assets/logo.png" alt="" class="imgfluid" width="80px">
                    </div>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center">
                <div class="col-4 ms-4">
                    <div class="row titleBuild fs-3 text-green">
                        <?php
                        include("as.php");
                        $teste->adicionarTituloComponente();
                        echo $teste->title;
                        ?>
                    </div>
                    <hr>
                    <div class="row">
                        <?php
                        $teste->adicionarDescricaoComponente();
                        echo $teste->descricao;
                        ?>
                    </div>
                </div>
                <div class="col-md">
                    <div class="container-fluid m-4 blocoBuild">
                        <?php
                        $teste->incluirComponente();
                        include($teste->url);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../js/functionshome.js"></script>
</body>
</html>