<?php
$dbhost = "chromelocalhost.mysql.database.azure.com";
$dbuser = "colegioa_chromeuser";
$dbpass = "mateus@2023";
$db = "colegioacontrolechrome";

// Initializes MySQLi
$conn = mysqli_init();

// Configura a conexão SSL
mysqli_ssl_set(
    $conn,
    NULL, // Deve ser NULL se você não tem seu próprio arquivo de certificado
    NULL,
    "/var/www/html/ca-certificate.crt", // Caminho para o arquivo de certificado CA
    NULL,
    NULL
);

// Estabelece a conexão
mysqli_real_connect(
    $conn,
    $dbhost,
    $dbuser,
    $dbpass,
    $db,
    3306,
    NULL,
    MYSQLI_CLIENT_SSL
);

// Se a conexão falhar, exibe o erro
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>



