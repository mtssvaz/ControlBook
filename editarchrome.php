<<?php
if (!empty($_GET['ID'])) {
    include 'conexao.php';

    $ID = $_GET['ID'];

    $buscar_cadastros = "SELECT * FROM CADASTROCHROME WHERE ID=$ID";
    $query_cadastros = mysqli_query($conn, $buscar_cadastros);

    if ($query_cadastros->num_rows > 0) {
        while ($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
            $serial = $receber_cadastros['serial'];
            $modelo = $receber_cadastros['modelo'];
            $ID_chrome = $receber_cadastros['ID']; // Renomeie a variável para evitar conflito com a variável $ID
            $dt_entrada = $receber_cadastros['dt_entrada'];
            $localizacao = $receber_cadastros['localizacao'];
        }
    } else {
        header('Location: estoque.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- ... (cabeçalho HTML) ... -->
</head>

<body>
    <!-- ... (conteúdo HTML) ... -->
    <form action="aeditarchrome.php" method="post">
        <div class="row">
            <div class="col-12">
                <label for="usuario" class="pt-3 font-weight-bold">Serial</label>
                <input type="text" name="serial" class="form-control input" value="<?php echo $serial ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <label for="password" class="pt-3 font-weight-bold">Modelo</label>
                <input type="text" name="modelo" class="form-control input" value="<?php echo $modelo ?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <label for="usuario" class="pt-3 font-weight-bold">ID</label>
                <input type="text" name="ID" class="form-control input" value="<?php echo $ID_chrome ?>" required>
            </div>
            <!-- ... (restante do formulário) ... -->
        </div>
        <!-- ... (restante do formulário) ... -->
    </form>
    <!-- ... (restante do HTML) ... -->
</body>

</html>
