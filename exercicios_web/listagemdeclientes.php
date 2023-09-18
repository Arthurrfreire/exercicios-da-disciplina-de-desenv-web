<?php
$host = "localhost";
$database = "seu_banco_de_dados";
$username = "seu_usuario";
$password = "sua_senha";

// Conexão com o PostgreSQL
$conn = new PDO("pgsql:host=$host;dbname=$database", $username, $password);

// Consulta dos clientes cadastrados
$sql = "SELECT * FROM clientes";
$stmt = $conn->prepare($sql);
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Clientes</title>
</head>
<body>
    <h2>Listagem de Clientes</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Data de N
