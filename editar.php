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
// Obtém os dados do formulário
$ID = $_POST['ID'];
$aluno = $_POST['aluno'];
$atendente = $_POST['atendente'];
$idchrome = $_POST['idchrome'];
$dt_entrega = $_POST['dt_entrega'];
$contrato = $_POST['contrato'];

// Prepara uma consulta SQL para atualizar os dados na tabela
$sql = "UPDATE CADASTRO SET
            aluno='{$aluno}',
            atendente='{$atendente}',
            idchrome='{$idchrome}',
            dt_entrega='{$dt_entrega}',
            contrato='{$contrato}'
        WHERE
            ID='{$_POST["ID"]}'"; // Substitui REQUEST por POST e adiciona aspas simples

// Executa a consulta e verifica se foi bem sucedida
if (mysqli_query($conn, $sql)) {
  print "<script>alert('Cadastro editado com sucesso!');</script>";
  print "<script>location.href='buscardozero.php';</script>";
} else {
  print "Erro ao cadastrar: " . mysqli_error($conn);
}

// Fecha a conex���o
mysqli_close($conn);
?>
