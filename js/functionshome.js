function toShop() {
    window.location.href = "pages/shopPage.php";
}
function toHome() {
  window.location.href = "../index.php";
}
function toAboutMe() {
  window.location.href = "pages/aboutMePage.php";
}
function toBuild() {
  window.location.href = "includes/buildPc.php";
}
function toCart() {
  window.location.href = "carrinho.php";
}

function toLogin() {
  window.location.href = "./pages/loginPage.php";
}

function teste() {
  document.getElementById("imagemteste").innerHTML=  "src='../../assets/logo.png"
  console.log("hello world!");
}

//function toShop2() {
//    window.location.href = "./pages/carrinho.php";
//}


const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})

const offcanvasElementList = document.querySelectorAll('.offcanvas')
const offcanvasList = [...offcanvasElementList].map(offcanvasEl => new bootstrap.Offcanvas(offcanvasEl))




var MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0px";

function menucelular () {
    if(MenuItens.style.maxHeight == "0px") {
        MenuItens.style.maxHeight = "200px";
    } else {
        MenuItens.style.maxHeight = "0px";
    }
}
function adicionarAoCarrinho(name, price) {
    const pedido = {
        nome: name,
        preco: price,
    };

    // Armazenar os dados do pedido em localStorage
    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    pedidos.push(pedido);
    localStorage.setItem('pedidos', JSON.stringify(pedidos));

    // Recarregar a lista de pedidos
    carregarPedidos();
}

// Função para carregar os pedidos do localStorage
function carregarPedidos() {
    const tableBody = document.getElementById('pedido-table-body');
    const totalPrice = document.getElementById('total-price');

    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    let totalPriceValue = 0;

    tableBody.innerHTML = '';

    pedidos.forEach((pedido, index) => {
        totalPriceValue += parseFloat(pedido.preco);
        const row = tableBody.insertRow();
        const cellNome = row.insertCell(0);
        const cellPreco = row.insertCell(1);
        const cellRemover = row.insertCell(2); // Célula para o botão de remoção

        cellNome.textContent = pedido.nome;
        cellPreco.textContent = pedido.preco;

        // Botão de remoção
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remover';
        removeButton.onclick = () => removerProduto(index); // Chama a função para remover o produto com o índice correspondente
        cellRemover.appendChild(removeButton);
    });

    totalPrice.textContent = 'Total: R$ ${totalPriceValue.toFixed(2)}';
}

// Chamar a função para carregar os pedidos ao carregar a página
window.onload = carregarPedidos;
// Função para controlar a paginação
function paginate(pageNumber) {
    const produtos = document.querySelectorAll('.col-4'); // Seleciona todos os itens de produto
    const produtosPorPagina = 8; // Define quantos produtos serão exibidos por página

    // Calcula o índice do primeiro e do último produto a serem exibidos na página atual
    const primeiroProdutoIndex = (pageNumber - 1) * produtosPorPagina;
    const ultimoProdutoIndex = primeiroProdutoIndex + produtosPorPagina;

    // Itera sobre todos os produtos e exibe apenas aqueles que estão dentro do intervalo da página atual
    produtos.forEach((produto, index) => {
        if (index >= primeiroProdutoIndex && index < ultimoProdutoIndex) {
            produto.style.display = 'block'; // Exibe o produto
        } else {
            produto.style.display = 'none'; // Oculta o produto
        }
    });
}

// Chamada inicial para exibir a primeira página de produtos
paginate(1);
let currentIndex = 0;
const cards = document.querySelectorAll('.destaque-card');

function showCard(index) {
    cards.forEach((card, i) => {
        if (i === index) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

document.addEventListener('DOMContentLoaded', function() {
    showCard(currentIndex);

    document.querySelector('.prev').addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + cards.length) % cards.length;
        showCard(currentIndex);
    });

    document.querySelector('.next').addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % cards.length;
        showCard(currentIndex);
    });
});
// Função para adicionar um produto ao carrinho
function adicionarAoCarrinho(nome, preco) {
    const pedido = { nome, preco };
    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    pedidos.push(pedido);
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
    carregarPedidos(); // Recarrega a lista de pedidos
}

// Função para carregar os pedidos do localStorage e atualizar o total
function carregarPedidos() {
    const tableBody = document.getElementById('pedido-table-body');
    const totalPrice = document.getElementById('total-price');

    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];

    tableBody.innerHTML = '';
    let totalPriceValue = 0;

    pedidos.forEach((pedido, index) => {
        totalPriceValue += parseFloat(pedido.preco);
        const row = tableBody.insertRow();
        const cellNome = row.insertCell(0);
        const cellPreco = row.insertCell(1);
        const cellRemover = row.insertCell(2); // Célula para o botão de remoção

        cellNome.textContent = pedido.nome;
        cellPreco.textContent = 'R$ ${pedido.preco}';
        
        // Botão de remoção
        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remover';
        removeButton.onclick = () => removerProduto(index); // Chama a função para remover o produto com o índice correspondente
        cellRemover.appendChild(removeButton);
    });

    totalPrice.textContent = 'Total:R$ ${totalPriceValue.toFixed(2)}';
}

// Função para adicionar um produto ao carrinho
function adicionarAoCarrinho(nome, preco, imagem) {
    let pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
    pedidos.push({ nome, preco, imagem });
    localStorage.setItem('pedidos', JSON.stringify(pedidos));
    alert('Produto adicionado ao carrinho!');
}

// Defina os itens por página e inicialize a página atual
const itemsPerPage = 4;
let currentPage = 1;

// Função para mostrar os itens da loja com base na página atual
function showItems() {
    const items = document.querySelectorAll('.card');
    const totalPages = Math.ceil(items.length / itemsPerPage);
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;

    items.forEach((item, index) => {
        if (index >= startIndex && index < endIndex) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });

    document.getElementById('currentPage').textContent = currentPage;
    document.getElementById('totalPages').textContent = totalPages;
}
function Page1() {
    window.location.href = "../pages/shopPage1.php";
}