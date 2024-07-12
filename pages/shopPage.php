<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/shopPage.css">
    <link rel="website icon" type="png" href="../assets/logo.png">
</head>
 
<body>
<div class="container-fluid">
    <div class="row navigation align-items-center py-3">
        <div class="col-lg-6 d-flex align-items-center"> 
            <img class="img-fluid logo me-3" onclick="toHome()" src="../assets/logo.png" alt="logo.png" width="120px">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Como posso ajudar?..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit" style="background-color: white; color: blue; border-color: blue;">Pesquisar</button>
            </form>
        </div>
        <div class="col-lg-6 d-flex align-items-center justify-content-end">
            <div class="btn-group mx-auto">

<a href="../pages/shopPage.php">
<button class="btn btn-primary me-2">PC/KIT</button>
</a>
<a href="../pages/shopPage1.php">
    <button class="btn btn-primary me-2" type="button">MOUSE</button>
</a>
<a href="../pages/shopPage2.php">
    <button class="btn btn-primary me-2">PEÇAS</button>
</a>
<a href="../pages/shopPage3.php">
    <button class="btn btn-primary me-2">FONES/TECLADO</button>
</a>
            </div>
            <a href="carrinho.php">
    <ion-icon name="cart-outline" class="cart-icon" style="font-size: 2.5em; color: white;"></ion-icon>
    </a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row content1 p-4 text-center justify-content-space-around">
        <!--inicio card 1-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/pc1.png" alt="" class="rounded" width="160">
                    <h5>Pc 1</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">30,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('Poseidon', '30.00', '../assets/poseidon.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 1-->

        <!--inicio card 2-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/pc2.png" alt="" class="rounded" width="160">
                    <h5>Pc 2</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">700,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('hercules', '700.00', '../assets/pc.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 2-->
        <!--inicio card 3-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/pc3.png" alt="" class="rounded" width="120">
                    <br><br><br>
                    <h5>Pc 3</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">800,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('invictus', '1850.00', '../assets/invictus.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 3-->
        <!--inicio card 4-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/pc4.png" alt="" class="rounded" width="125">
                    <br><br><br>
                    <h5>Pc 4</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">850,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('ventoinha', '850.00', '../assets/transferir.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 4-->
    </div>
    <!--fim da linha-->

    <div class="todos-Title mt-4 ms-4">
        <h1>TODOS</h1>
    </div>
    <hr>
    <!--inicio da fase todos-->
    <!--linha-->
    <div class="row content1 p-4 text-center justify-content-space-around">
        <!--inicio card 1-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/kit1.png" alt="" class="rounded" width="160">
                    <h5>kit</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">30,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('teclado', '30.00', '../assets/kit1.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 1-->

        <!--inicio card 2-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/kit2.png" alt="" class="rounded" width="160">
                    <h5>kit</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">700,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('hercules', '700.00', '../assets/kit2.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 2-->
        <!--inicio card 3-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/kit3.png" alt="" class="rounded" width="160">
                    <h5>kit</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">800,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('placa mãe', '800.00', '../assets/kit3.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 3-->
        <!--inicio card 4-->
        <div class="col-md m-4 card">
            <div class="Ucard mt-3">
                <div class="product align-items-center p-2 text-center">
                    <img src="../assets/kit4.png" alt="" class="rounded" width="160">
                    <h5>kit</h5>
                    <div class="info mt-3"></div>
                    <span class="text d-block">Todas</span>
                    <span class="text">Informações</span>
                </div>
                <div class="cost mt-3 text-dark">850,00R$</div>
                <div class="star mt-3 align-items-center">
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-sharp"></ion-icon>
                    <ion-icon name="star-half-sharp"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                </div>
            </div>
            <div class="p-3 productbutton text-center text-white mt-3 cursor">
                <div class="text-uppercase" onclick="adicionarAoCarrinho('placa mãe', '800.00', '../assets/kit4.png')">Carrinho</div>
            </div>
        </div>
        <!--fim card 4-->
      
    <!--fim da linha-->
</div>
<script src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/functionshome.js"></script>
</body>
</html>
