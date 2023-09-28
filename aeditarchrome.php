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
$serial = $_POST['serial'];
$modelo = $_POST['modelo'];
$dt_entrada = $_POST['dt_entrada'];
$localizacao = $_POST['localizacao'];

// Prepara uma consulta SQL segura para atualizar os dados na tabela
$sql = "UPDATE CADASTRO SET
            serial=?,
            modelo=?,
            dt_entrada=?,
            localizacao=?
        WHERE
            ID=?";

// Prepara a declaração
$stmt = mysqli_prepare($conn, $sql);

// Verifica se a preparação foi bem sucedida
if ($stmt) {
    // Associa as variáveis aos parâmetros da declaração
    mysqli_stmt_bind_param($stmt, "ssssi", $serial, $modelo, $dt_entrada, $localizacao, $ID);

    // Executa a declaração
    if (mysqli_stmt_execute($stmt)) {
        print "<script>alert('Cadastro editado com sucesso!');</script>";
        print "<script>location.href='estoque.php';</script>";
    } else {
        print "Erro ao cadastrar: " . mysqli_stmt_error($stmt);
    }

    // Fecha a declaração
    mysqli_stmt_close($stmt);
} else {
    print "Erro na preparação da declaração: " . mysqli_error($conn);
}

// Fecha a conexão
mysqli_close($conn);
