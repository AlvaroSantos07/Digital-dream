<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Dream</title>
    <link rel = "website icon" type = "png" href="assets/logo.png">

</head>
    <body class = "container-fluid banner">
<!--inicio da barra com logo e nav--> 
    <div class="row align-items-center topbar">
        <div class="col-5 ps-3 pt-3 pb-3 md">
            <img src="assets/logo.png" class = "img-fluid image" alt="logo dream" width="100px"> 
        </div>
        <div class ="col-sm">
            <div class = "row justify-content-between nav">
            <div class="col">
            <button onclick="window.location.href='https://www.instagram.com/digittaldreams157?igsh=MWRqa2ZtcTdvamFyeA==';" type="button" class="btn btn-outline-primary listButton">Redes<br><ion-icon name="logo-instagram"></ion-icon></button>
        </div>
        <div class="col">
            <button onClick = "toAboutMe()" type="button" class="btn btn-outline-primary listButton">Sobre<br><ion-icon name="help-circle-outline"></ion-icon></button>
        </div>
        <div class="col">
            <button onClick = "toAboutMe()" type="button" class="btn btn-outline-primary listButton">Baixar<br><ion-icon name="arrow-down-outline"></ion-icon></button>
        </div>
        <div class="col">
            <button  onClick = "toLogin()"  type="button" class="btn btn-outline-primary listButton">Login<br><ion-icon name="person-circle"></ion-icon></button>
        </div>
        <div class="col">
            <button  onClick = "toCart()" type="button" class="btn btn-outline-primary listButton">Carrinho<br><ion-icon name="cart-outline"></ion-icon></button>
        </div>
      </div>
    </div>
</div>
<!-- apartir daqui ja inicia o texto titulo e descrição alem da imagem do pc-->
<div class = "row mt-5 justify-content-evenly">
    <div class = "col p-4 contentTitleandDescription">
        <div class = "row title">

           <p class = "fs-1">
            Alcance um <br><span class = potencial>Potencial</span> ilimitado<span class = potencial>.</a>
           </p> 
        </div>
        <div class = "row description">
            <p class = 'fs-4 title'>
                na <span class = "potencial">Digital Dream</span>, oferecemos PCs de alto desempenho<br>
                com peças reutilizadas de qualidade premium, transformando <br>sonhos digitais em realidade
                <span class = "potencial">sustentável</span>.
            </p>
        </div>
    </div>
    <div class = "col-sm contentImage">
        <img class = "" src="assets/cpu.png" alt="" width="100%">
    </div>
</div>
<div class = "row justify-content-between">
<div class = "col">
<!--botões-->
  <div class="d-grid gap-2 col-4">
    <div class="btn btn-primary gridbutton" type="button" onclick="toShop()">Compre já <ion-icon name="bag-check-outline"></ion-icon></div>
    <div class="btn btn-primary gridbutton" type="button" onClick="toBuild()">Monte seu PC <ion-icon name="desktop-outline"></ion-icon></div>
  </div>
</div>
<!--imagem do banner-->

    <div class = "col align-items-end text-end">
        <img class = "img-fluid" src="assets/border.png" width="100%">
    </div>
    
</div>







<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src = "./js/functionshome.js"></script>

</body>
</html>


