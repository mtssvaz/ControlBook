
<?php
 $dbhost = "chromelocalhost.mysql.database.azure.com";
 $dbuser = "colegioa_chromeuser";
 $dbpass = "mateus@2023";
 $db = "colegioacontrolechrome";

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "https://chrome.vault.azure.net/certificates/Controlbook/8020b26d86554f648c977c6d1cd978ec", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'chromelocalhost.mysql.database.azure.com', 'colegioa_chromeuser', 'mateus@2023', 'colegioacontrolechrome', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

// Obtém os dados do formulário e previne ataques de injeção de SQL
$aluno = mysqli_real_escape_string($conn, $_POST['aluno']);
$responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);
$MATRICULA = mysqli_real_escape_string($conn, $_POST['MATRICULA']);
$n_de_serie = mysqli_real_escape_string($conn, $_POST['n_de_serie']);
$dt_entrega = mysqli_real_escape_string($conn, $_POST['dt_entrega']);
$conservacao = mysqli_real_escape_string($conn, $_POST['conservacao']);

// Prepara uma consulta SQL segura para inserir os dados na tabela
$sql = "INSERT INTO cadastro (aluno, responsavel, MATRICULA, n_de_serie, dt_entrega, conservacao) VALUES ('$aluno', '$responsavel', '$MATRICULA', '$n_de_serie', '$dt_entrega', '$conservacao')";

// Executa a consulta e verifica se foi bem-sucedida
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
    echo "<script>location.href='buscardozero.php';</script>";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conn);
}

// Fecha a conexão
mysqli_close($conn);
?>
