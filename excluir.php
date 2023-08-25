<?php
// Conecta-se ao banco de dados usando as credenciais fornecidas
$dbhost = "localhost";
$dbuser = "colegioa_chromeuser";
$dbpass = "mateus@2023";
$dbname = "colegioa_controlechrome"; // Nome do banco de dados

// Cria uma variável para armazenar a conexão
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

// Prepara uma consulta SQL para atualizar os dados na tabela
$sql = "DELETE FROM CADASTRO WHERE ID='{$_GET["ID"]}'";
$sqlDel = mysqli_query($conn, $sql);

// Executa a consulta e verifica se foi bem sucedida
if ($sqlDel) {
  print "<script>alert('Cadastro excluído com sucesso!');</script>";
  print "<script>location.href='buscardozero.php';</script>";
} else {
  print "Erro ao descadastrar: " . mysqli_error($conn);
}

// Fecha a conex���o
mysqli_close($conn);
?>