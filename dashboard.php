<?php

// Arquivo dashboard.php


// Lógica para conectar ao banco de dados e recuperar dados

$dbhost = "chromelocalhost.mysql.database.azure.com";
$dbuser = "chromelocalhost";
$dbpass = "mateus@2023";
$db = "colegiocontrolechrome";

// Inicializa o MySQLi
$conn = mysqli_init();

// Estabelece a conexão
mysqli_real_connect(
    $conn,
    $dbhost,
    $dbuser,
    $dbpass,
    $db,
    3306,
    NULL,
    0 // Sem SSL
);

// Se a conexão falhar, exibe o erro
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());

// ...


// Preencha variáveis com dados do banco de dados

$dadosGrafico
 = 
obterDadosGraficoDoBanco
();

// Exiba o HTML

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- Inclua links para bibliotecas e estilos necessários -->
</head>
<body>

    <!-- Seção para exibir gráfico -->
    <div id=
"grafico"
></div>

    <!-- Inclua scripts JavaScript para manipulação e exibição dos dados -->
    <script>
        
// Use dados PHP diretamente no JavaScript

        
var
 dadosGrafico = 
<?php
 
echo
 
json_encode
(
$dadosGrafico
); 
?>
