
<?php
// Conexão ao banco de dados usando as credenciais fornecidas
 $dbhost = "chromelocalhost.mysql.database.azure.com";
 $dbuser = "colegioa_chromeuser";
 $dbpass = "mateus@2023";
 $db = "colegioacontrolechrome";

// Cria uma conexão com o banco de dados
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

// Verifica se a conexão foi bem-sucedida
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Obtém os dados do formulário e previne ataques de injeção de SQL
$aluno = mysqli_real_escape_string($conn, $_POST['aluno']);
$responsavel = mysqli_real_escape_string($conn, $_POST['responsavel']);
$MATRICULA = mysqli_real_escape_string($conn, $_POST['MATRICULA']);
$n_de_serie = mysqli_real_escape_string($conn, $_POST['n_de_serie']);
$dt_entrega = mysqli_real_escape_string($conn, $_POST['dt_entrega']);
$conservacao = mysqli_real_escape_string($conn, $_POST['conservacao']);

// Prepara uma consulta SQL segura para inserir os dados na tabela
$sql = "INSERT INTO CADASTRO (aluno, responsavel, MATRICULA, n_de_serie, dt_entrega, conservacao) VALUES ('$aluno', '$responsavel', '$MATRICULA', '$n_de_serie', '$dt_entrega', '$conservacao')";

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
