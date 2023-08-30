<?php
$host = 'chromelocalhost.mysql.database.azure.com';
$username = 'colegioa_chromeuser';
$password = 'mateus@2023';
$db_name = 'colegioacontrolechrome';


// Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn, NULL, NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

// If connection failed, show the error
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

echo "Connection successful!";
mysqli_close($conn);

?>
