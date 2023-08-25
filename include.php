
<?php
// Conecta-se ao banco de dados usando as credenciais fornecidas
$dbhost = "localhost";
$dbuser = "colegioa_chromeuser";
$dbpass = "mateus@2023";
$db = "colegioa_controlechrome";


// Cria uma vari���vel para armazenar a conex���o
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

// Verifica se a conex���o foi bem sucedida
if (!$conn) {
  die("Falha na conex���o: " . mysqli_connect_error());
}

// Obt���m os dados do formul���rio
$aluno = $_POST['aluno'];
$responsavel = $_POST['responsavel'];
$MATRICULA = $_POST['MATRICULA'];
$n_de_serie = $_POST['n_de_serie'];
$dt_entrega = $_POST['dt_entrega'];
$conservacao = $_POST['conservacao'];

// Prepara uma consulta SQL para inserir os dados na tabela
$sql = "INSERT INTO CADASTRO (aluno, responsavel, MATRICULA, n_de_serie, dt_entrega, conservacao) VALUES ('$aluno', '$responsavel', '$MATRICULA', '$n_de_serie', '$dt_entrega', '$conservacao')";

// Executa a consulta e verifica se foi bem sucedida
if (mysqli_query($conn, $sql)) {
  print "<script>alert('Cadastro realizado com sucesso!');</script>";
  print "<script>location.href='buscardozero.php';</script>";
} else {
  print "Erro ao cadastrar: " . mysqli_error($conn);
}

// Fecha a conex���o
mysqli_close($conn);
?>

