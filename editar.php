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
<<<<<<< HEAD
$responsavel = $_POST['responsavel'];
$MATRICULA = $_POST['MATRICULA'];
$n_de_serie = $_POST['n_de_serie'];
$dt_entrega = $_POST['dt_entrega'];
$conservacao = $_POST['conservacao'];
=======
$matricula = $_POST['matricula'];
$ano = $_POST['ano'];
$atendente = $_POST['atendente'];
$idchrome = $_POST['idchrome'];
$dt_entrega = $_POST['dt_entrega'];
$contrato = $_POST['contrato'];
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2

// Prepara uma consulta SQL para atualizar os dados na tabela
$sql = "UPDATE CADASTRO SET
            aluno='{$aluno}',
<<<<<<< HEAD
            responsavel='{$responsavel}',
            MATRICULA='{$MATRICULA}',
            n_de_serie='{$n_de_serie}',
            dt_entrega='{$dt_entrega}',
            conservacao='{$conservacao}'
=======
            matricula='{$matricula}',
            ano='{$ano}',
            atendente='{$atendente}',
            idchrome='{$idchrome}',
            dt_entrega='{$dt_entrega}',
            contrato='{$contrato}'
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2
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
