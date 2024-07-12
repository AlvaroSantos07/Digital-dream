<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigitalDream</title>
    <link rel="stylesheet" href="../css/carrinho.css">
    <link rel="website icon" type="png" href="../assets/logo.png">
</head>

<body>

    <div class="novoMenu">
        <div class="container">
            <div class="navbar2">
                <img onClick="toHome()" src="../assets/logo.png" alt="logo digital dream" width="150px"> 
                <ul id="MenuItens" class="menu-top-right">
                    <li><a href="aboutMePage.php" title="">sobre nos</a></li>
                    <li><a href="shopPage.php" title="">Produtos</a></li>
                    <li><a href="loginPage.php" title="">login</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="corpo-categorias carrinho-compras">
        <section class="cart-items" id="cart-items">
            <h2>Seu Carrinho de Compras</h2>
            <table>
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th></th> <!-- Cabeçalho para o botão de remoção -->
                    </tr>
                </thead>
                <tbody id="pedido-table-body">
                    <!-- Os pedidos serão adicionados aqui -->
                </tbody>
            </table>
            <div class="total-price" id="total-price"></div>
            <button class="checkout-button" onclick="finalizarPedido()">Finalizar Pedido</button>
        </section>

        <script>
          function toHome() {
              window.location.href = "../index.php";
          }

          // Função para calcular o total dos produtos
          function calcularTotal() {
              const pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
              let totalPriceValue = 0;

              pedidos.forEach(pedido => {
                  totalPriceValue += parseFloat(pedido.preco);
              });

              return totalPriceValue.toFixed(2);
          }

          // Função para carregar os pedidos do localStorage e atualizar o total
          function carregarPedidos() {
              const tableBody = document.getElementById('pedido-table-body');
              const totalPrice = document.getElementById('total-price');

              let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];

              tableBody.innerHTML = '';

              pedidos.forEach((pedido, index) => {
                  const row = tableBody.insertRow();
                  const cellImg = row.insertCell(0); // Célula para a imagem
                  const cellNome = row.insertCell(1);
                  const cellPreco = row.insertCell(2);
                  const cellRemover = row.insertCell(3); // Célula para o botão de remoção

                  cellImg.innerHTML = `<img src="${pedido.imagem}" width="100">`; // Insere a imagem
                  cellNome.textContent = pedido.nome;
                  cellPreco.textContent = `R$ ${pedido.preco}`;
                  const removeIcon = document.createElement('img');
                  removeIcon.src = '../assets/lixeira.png';
                  removeIcon.alt = 'Remover';
                  removeIcon.classList.add('remove-button');
                  removeIcon.onclick = () => removerProduto(index);
                  cellRemover.innerHTML = '';
                  cellRemover.appendChild(removeIcon);
              });

              totalPrice.textContent = `Total: R$ ${calcularTotal()}`;
          }

          // Função para remover o produto do carrinho
          function removerProduto(index) {
              let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
              pedidos.splice(index, 1); // Remove o produto com o índice especificado
              localStorage.setItem('pedidos', JSON.stringify(pedidos));
              carregarPedidos(); // Recarrega a lista de pedidos
          }

          // Função para finalizar o pedido
          function finalizarPedido() {
              localStorage.removeItem('pedidos');
              alert('Este é um projeto futuro, não haverá compras reais.');
          
          }

          // Chamando a função para carregar os pedidos ao carregar a página
          window.onload = carregarPedidos;
        </script>    

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </div>
</body>
</html>
