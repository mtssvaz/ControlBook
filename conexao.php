<?php
 $dbhost = "chromelocalhost.mysql.database.azure.com";
 $dbuser = "colegioa_chromeuser";
 $dbpass = "mateus@2023";
 $db = "colegioacontrolechrome";

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "https://chrome.vault.azure.net/certificates/Controlbook/8020b26d86554f648c977c6d1cd978ec", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $dbhost, $dbuser, $dbpass, $db, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>


