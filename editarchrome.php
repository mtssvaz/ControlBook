<?php
if (!empty($_GET['ID'])) {
    include 'conexao.php';

    $ID = $_GET['ID'];

    $buscar_cadastros = "SELECT * FROM CADASTROCHROME WHERE ID=$ID";
    $query_cadastros = mysqli_query($conn, $buscar_cadastros);

    if ($query_cadastros->num_rows > 0) {
        while ($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
            $serial = $receber_cadastros['serial'];
            $modelo = $receber_cadastros['modelo'];
            $ID = $receber_cadastros['ID'];
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
    <!-- ... (seu código anterior) ... -->
</head>

<body>
    <!-- ... (seu código anterior) ... -->

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- ... (seu código anterior) ... -->
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
                        <input type="text" name="ID" class="form-control input" value="<?php echo $ID ?>" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <label for="dt_entrega" class="pt-3 font-weight-bold">Data de entrada</label>
                        <input type="date" name="dt_entrada" class="form-control input" value="<?php echo $dt_entrada ?>" required>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                        <label for="status" class="pt-3">Status</label>
                        <select id="status" name="localizacao" class="form-control input" required>
                            <option value="" selected disabled>Selecione</option>
                            <option value="Ativo" <?php echo ($localizacao == 'Ativo') ? 'selected' : '' ?>>Ativo</option>
                            <option value="Manutencao" <?php echo ($localizacao == 'Manutencao') ? 'selected' : '' ?>>Manutenção</option>
                            <option value="Estoque" <?php echo ($localizacao == 'Estoque') ? 'selected' : '' ?>>Estoque</option>
                        </select>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center">
                    <input class="col-7 mt-4 button" type="submit" value="Salvar Alterações">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
