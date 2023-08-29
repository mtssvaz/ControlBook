<?php
 $dbhost = "chromelocalhost.mysql.database.azure.com";
 $dbuser = "colegioa_chromeuser";
 $dbpass = "mateus@2023";
 $db = "colegioacontrolechrome";

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $dbhost, $dbuser, $dbpass, $db, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>


