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

// Prepara uma consulta SQL para atualizar os dados na tabela
$sql = "DELETE FROM CADASTROCHROME WHERE ID='{$_GET["ID"]}'";
$sqlDel = mysqli_query($conn, $sql);

// Executa a consulta e verifica se foi bem sucedida
if ($sqlDel) {
  print "<script>alert('Cadastro excluído com sucesso!');</script>";
<<<<<<< HEAD
  print "<script>location.href='cadastrochrome.php';</script>";
=======
  print "<script>location.href='estoque.php';</script>";
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2
} else {
  print "Erro ao descadastrar: " . mysqli_error($conn);
}

// Fecha a conex���o
mysqli_close($conn);
?>
