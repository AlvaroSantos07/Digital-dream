<?php
// Verifica se o formulário de cadastro foi submetido

// Verifica se o formulário de cadastro foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados MySQL (altere essas informações conforme necessário)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "digitaldream_bd";
    
    // Crie uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    // Prepara os dados para inserção no banco de dados
    $email = $_POST["novoEmail"];
    $usuario = $_POST["novoUsuario"];
    $senha = $_POST["novaSenha"]; // Não é seguro armazenar senhas em texto simples, mas é apenas um exemplo
    
    // Insere os dados na tabela usuarios
    $sql = "INSERT INTO usuarios (email, usuario, senha) VALUES ('$email', '$usuario', '$senha')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }
    
    $conn->close();
}
?>
1