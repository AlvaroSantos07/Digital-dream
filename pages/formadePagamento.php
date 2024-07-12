<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma de Pagamento</title>
    <!-- Link para o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        /* Adicione estilos personalizados aqui */
        .container {
            margin-top: 50px;
        }

        .total-price {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Escolha a forma de pagamento:</h2>
        <form>
            <div class="mb-3">
                <label for="nomeCompleto" class="form-label">Nome Completo:</label>
                <input type="text" class="form-control" id="nomeCompleto" placeholder="Seu nome completo" required>
            </div>
            <div class="mb-3">
                <label for="numeroCartao" class="form-label">Número do Cartão:</label>
                <input type="text" class="form-control" id="numeroCartao" placeholder="Número do seu cartão" required>
            </div>
            <div class="mb-3">
                <label for="validadeCartao" class="form-label">Validade do Cartão:</label>
                <input type="text" class="form-control" id="validadeCartao" placeholder="MM/AA" required>
            </div>
            <div class="mb-3">
                <label for="cvv" class="form-label">CVV:</label>
                <input type="text" class="form-control" id="cvv" placeholder="Código de segurança" required>
            </div>
            <div class="mb-3">
                <label for="totalCarrinho" class="form-label">Total do Carrinho:</label>
                <input type="text" class="form-control" id="totalCarrinho" placeholder="R$0.00" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Finalizar Compra</button>
        </form>

        <!-- Seção para mostrar o cálculo total do carrinho -->
        <div class="total-price" id="total-price"></div>
    </div>

    <!-- Link para o Bootstrap Bundle (JS) no final do corpo para melhor desempenho -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Simulando o cálculo total do carrinho
        // Substitua isso pela sua lógica real de cálculo
        function calcularTotal() {
                const pedidos = JSON.parse(localStorage.getItem('pedidos')) || [];
                let totalPriceValue = 0;

                pedidos.forEach(pedido => {
                    totalPriceValue += parseFloat(pedido.preco);
                });

                return totalPriceValue.toFixed(2);
            }

        // Função para atualizar o valor do campo "Total do Carrinho"
        function atualizarTotalCarrinho() {
            const totalCarrinhoInput = document.getElementById('totalCarrinho');
            const totalCarrinho = calcularTotalCarrinho();
            totalCarrinhoInput.value = `R$ ${totalCarrinho}`;
            
        }

        // Chamando a função para atualizar o total do carrinho ao carregar a página
        window.onload = atualizarTotalCarrinho;
    </script>
</body>

</html>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 main-login">
                <img src="../assests/computer2.png" alt="animation">
            </div>
            <div class="col-md-6 right-login">
                <div id="login-form" class="card-login">
                    <img src="assets/logo.png" alt="logotype" class="img-fluid" width="100px">
                    <h2>Login</h2>
                    <div class="form-group">
                        <label for="Usuario">Usuário</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Digite seu usuário">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>
                    <button id="login-btn" type="submit" class="btn btn-primary btn-login">Login</button>
                    <br> <!-- Adiciona um espaço -->
                    <button id="cadastro-btn" class="btn btn-secondary btn-cadastro">Não tem uma conta? Cadastre-se</button>
                </div>
                <div id="cadastro-form" class="card-login" style="display: none;">
                    <img src="assets/logo.png" alt="logotype" class="img-fluid" width="100px">

                    <h2>Cadastro</h2>
                    
                    <form id="cadastro-form" method="post" action="cadastro.php">
                        <div class="form-group">
                            <label for="novoEmail">Email</label>
                            <input type="email" class="form-control" id="novoEmail" name="novoEmail" placeholder="Digite seu email">
                        </div>
                        <div class="form-group">
                            <label for="novoUsuario">Novo Usuário</label>
                            <input type="text" class="form-control" id="novoUsuario" name="novoUsuario" placeholder="Digite seu novo usuário">
                        </div>
                        <div class="form-group">
                            <label for="novaSenha">Nova Senha</label>
                            <input type="password" class="form-control" id="novaSenha" name="novaSenha" placeholder="Digite sua nova senha">
                        </div>
                        <button type="submit" class="btn btn-primary btn-login">Cadastrar</button>
                    </form>
                    <br> <!-- Adiciona um espaço -->
                    <button id="voltar-login-btn" class="btn btn-secondary btn-cadastro">Voltar ao Login</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        // Adiciona um listener de evento de clique no botão de cadastro
        document.getElementById("cadastro-btn").addEventListener("click", function() {
            document.getElementById("login-form").style.display = "none"; // Oculta o formulário de login
            document.getElementById("cadastro-form").style.display = "block"; // Exibe o formulário de cadastro
        });
        
        // Adiciona um listener de evento de clique no botão de voltar ao login
        document.getElementById("voltar-login-btn").addEventListener("click", function() {
            document.getElementById("cadastro-form").style.display = "none"; // Oculta o formulário de cadastro
            document.getElementById("login-form").style.display = "block"; // Exibe o formulário de login
        });

        // Adiciona um listener de evento de clique no botão de cadastrar dentro do formulário de cadastro
        document.getElementById("cadastrar-btn").addEventListener("click", function() {
            // Aqui você pode adicionar a lógica de conexão com o banco de dados e o redirecionamento para a página de cadastro
            // Neste exemplo, evitamos o redirecionamento ao método de envio do formulário
            event.preventDefault();
        });

        // Adiciona um listener de evento de clique no botão de login
        document.getElementById("login-btn").addEventListener("click", function() {
            // Verifica se os campos de usuário e senha estão preenchidos
            if (document.getElementById("usuario").value === "" || 
                document.getElementById("senha").value === "") {
                alert("Por favor, preencha todos os campos antes de fazer login.");
            } else {
                // Redireciona o usuário para outra página
                window.location.href = "../index.php";
            }
        });
    </script>
</body>
</html>