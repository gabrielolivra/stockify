<?php 
session_start();

// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estoque";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o usuário está logado
if (!isset($_SESSION["user_id"])) {
  header("Location: ..\login.php");
  exit;
}

$id_do_usuario = $_SESSION["user_id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home.css">
  <title>Home</title>
</head>
<body>
<div class="navbar">
  <div class="logo">
    <img src=".\img-authenticated\icon-logo.svg" alt="">
    <p>Stockify</p>
  </div>
  <div class="caixa-nav">
    <span><img src=".\img-authenticated\icon-home.svg" alt=""></span>
    <a href="./home.php" class='fromLeft'>Home</a></div>
    <div class="caixa-nav">
    <span><img src=".\img-authenticated\icon-cadastro.svg" alt=""></span>
    <a href="#" class='fromLeft'>Cadastro de produtos</a></div>
    <div class="caixa-nav">
    <span><img src=".\img-authenticated\icon-vendas.svg" alt=""></span>
    <a href="#" class='fromLeft'>Vendas</a></div>
    <div class="caixa-nav">
    <span><img src=".\img-authenticated\icon-estoque.svg" alt=""></span>
    <a href="#" class='fromLeft'>Estoque</a></div>
    <div class="caixa-nav">
    <span><img src=".\img-authenticated\icon-sair.svg" alt=""></span>
    <a href="./logout.php" class='fromLeft'>Sair</a></div>
  </div>
</body>
</html>