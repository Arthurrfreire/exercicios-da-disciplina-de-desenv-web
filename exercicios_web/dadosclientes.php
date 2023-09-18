<?php
$host = "localhost";
$database = "seu_banco_de_dados";
$username = "seu_usuario";
$password = "sua_senha";

// Conexão com o PostgreSQL
$conn = new PDO("pgsql:host=$host;dbname=$database", $username, $password);

// Dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$data_nascimento = $_POST['data_nascimento'];

// Inserção dos dados na tabela "clientes"
$sql = "INSERT INTO clientes (nome, cpf, email, data_nascimento) VALUES (:nome, :cpf, :email, :data_nascimento)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':data_nascimento', $data_nascimento);

if ($stmt->execute()) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o cliente.";
}
?>
