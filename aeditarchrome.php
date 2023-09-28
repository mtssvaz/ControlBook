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
    MYSQLI_CLIENT_SSL // Use MYSQLI_CLIENT_SSL para SSL
);

// Verifica a conexão
if (mysqli_connect_errno()) {
    die('Falha na conexão com o MySQL: ' . mysqli_connect_error());
}

// Obtém os dados do formulário e previne ataques de injeção de SQL
$serial = mysqli_real_escape_string($conn, $_POST['serial']);
$modelo = mysqli_real_escape_string($conn, $_POST['modelo']);
$ID = mysqli_real_escape_string($conn, $_POST['ID']);
$dt_entrada = mysqli_real_escape_string($conn, $_POST['dt_entrada']);
$localizacao = mysqli_real_escape_string($conn, $_POST['localizacao']);

// Prepara uma consulta SQL segura para atualizar os dados na tabela
$sql = "UPDATE CADASTRO SET
            serial='{$serial}',
            modelo='{$modelo}',
            dt_entrada='{$dt_entrada}',
            localizacao='{$localizacao}'
        WHERE
            ID='{$ID}'";

// Executa a consulta e verifica se foi bem-sucedida
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Cadastro editado com sucesso!');</script>";
    echo "<script>location.href='estoque.php';</script>";
} else {
    echo "Erro ao editar cadastro: " . mysqli_error($conn);
}

// Fecha a conexão
mysqli_close($conn);
?>
