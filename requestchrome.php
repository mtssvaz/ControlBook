  <?php
$dbhost = "chromelocalhost.mysql.database.azure.com";
$dbuser = "chromelocalhost";
$dbpass = "mateus@2023";
$db = "colegiocontrolechrome";

// Inicializa o MySQLi
$conn = mysqli_init();

// Estabelece a conexão
if (mysqli_real_connect(
    $conn,
    $dbhost,
    $dbuser,
    $dbpass,
    $db,
    3306,
    NULL,
    0 // Sem SSL
)) {
    // Execute a consulta SQL para buscar os IDs da tabela CADASTROCHROME
    $sql = "SELECT ID FROM CADASTROCHROME";
    $result = mysqli_query($conn, $sql);

    // Verifique se a consulta foi bem-sucedida
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo '<option class="fonte" value="" selected disabled>Selecione</option>';
            while ($row = mysqli_fetch_assoc($result)) {
                $ID = $row['ID'];
                echo '<option class="fonte" value="' . $ID . '">' . $ID . '</option>';
            }
        } else {
            echo 'Nenhum resultado encontrado na tabela CADASTROCHROME.';
        }
    } else {
        echo 'Erro na consulta: ' . mysqli_error($conn);
    }

    // Feche a conexão com o banco de dados
    mysqli_close($conn);
} else {
    echo 'Falha na conexão com o MySQL: ' . mysqli_connect_error();
}
?>
