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
$responsavel = $_POST['responsavel'];
$ano = $_POST['ano'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];

// Prepara uma consulta SQL para atualizar os dados na tabela
$sql = "UPDATE CADASTROALUNO SET
            aluno='{$aluno}',
            responsavel='{$responsavel}',
            ano='{$ano}',
            rua='{$rua}',
            numero='{$numero}',
            cep='{$cep}'
            bairro='{$bairro}',
            cidade='{$cidade}'
            uf='{$uf}'
        WHERE
            ID='{$_POST["ID"]}'"; // Substitui REQUEST por POST e adiciona aspas simples

// Executa a consulta e verifica se foi bem sucedida
if (mysqli_query($conn, $sql)) {
  print "<script>alert('Cadastro editado com sucesso!');</script>";
  print "<script>location.href='diretorioaluno.php';</script>";
} else {
  print "Erro ao cadastrar: " . mysqli_error($conn);
}

// Fecha a conex���o
mysqli_close($conn);
?>
