<?php
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
}

// Obtém os dados do formulário e previne ataques de injeção de SQL
$serial = mysqli_real_escape_string($conn, $_POST['serial']);
$modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
<<<<<<< HEAD
$ID = mysqli_real_escape_string($conn, $_POST['ID']);
=======
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2
$dt_entrada = mysqli_real_escape_string($conn, $_POST['dt_entrada']);
$localizacao = mysqli_real_escape_string($conn, $_POST['localizacao']);

// Prepara uma consulta SQL segura para inserir os dados na tabela
<<<<<<< HEAD
$sql = "INSERT INTO cadastrochrome (serial, modelo, ID, dt_entrada, localizacao) VALUES ('$serial', '$modelo', '$ID', '$dt_entrada', '$localizacao')";
=======
$sql = "INSERT INTO CADASTROCHROME (serial, modelo, dt_entrada, localizacao) VALUES ('$serial', '$modelo', '$dt_entrada', '$localizacao')";
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2

// Executa a consulta e verifica se foi bem-sucedida
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
    echo "<script>location.href='estoque.php';</script>";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conn);
}

// Fecha a conexão
mysqli_close($conn);
?>
