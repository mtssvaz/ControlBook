<?php
$servername = "chromelocalhost.mysql.database.azure.com";
$username = "colegioa_chromeuser";
$password = "mateus@2023";
$database = "colegioacontrolechrome";

// Estabeleça a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";
$conn->close();
?>
