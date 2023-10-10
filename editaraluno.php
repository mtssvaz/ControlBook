<?php
if (!empty($_GET['ID'])) {
    include 'conexao.php';

    $ID = $_GET['ID'];

    $buscar_cadastros = "SELECT * FROM CADASTROALUNO WHERE ID=$ID";
    $query_cadastros = mysqli_query($conn, $buscar_cadastros);

    if ($query_cadastros->num_rows > 0) {
        while ($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
            $aluno = $receber_cadastros['aluno'];
            $responsavel = $receber_cadastros['responsavel'];
            $ano = $receber_cadastros['ano'];
            $cep = $receber_cadastros['cep'];
            $numero = $receber_cadastros['numero'];
            $rua = $receber_cadastros['rua'];
            $bairro = $receber_cadastros['bairro'];
            $cidade = $receber_cadastros['cidade'];
            $uf = $receber_cadastros['uf'];
        }
    } else {
        header('Location: diretorioaluno.php');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Restante das suas importações de CSS e JavaScript permanecem inalteradas -->

    <title>Editar Cadastro</title>
</head>

<body>
    <!-- Restante do seu código HTML permanece inalterado -->

    <form action="aeditaraluno.php" method="post">
        <label>Aluno:
            <input name="aluno" type="text" id="aluno" size="60" value="<?php echo $aluno; ?>" /></label><br />
        <label>Responsável:
            <input name="responsavel" type="text" id="responsavel" size="60" value="<?php echo $responsavel; ?>" /></label><br />
        <label>Ano:
            <select id="ano" name="ano" class="form-control input" required>
                <option value="" selected disabled>Selecione</option>
                <option value="6" <?php if ($ano == "6") echo "selected"; ?>>6º ano</option>
                <option value="7" <?php if ($ano == "7") echo "selected"; ?>>7º ano</option>
                <option value="8" <?php if ($ano == "8") echo "selected"; ?>>8º ano</option>
                <option value="9" <?php if ($ano == "9") echo "selected"; ?>>9º ano</option>
                <option value="1" <?php if ($ano == "1") echo "selected"; ?>>1° Ano - Ensino Médio</option>
                <option value="2" <?php if ($ano == "2") echo "selected"; ?>>2° Ano - Ensino Médio</option>
                <option value="3" <?php if ($ano == "3") echo "selected"; ?>>3° Ano - Ensino Médio</option>
            </select>
        </label><br />
        <label>Cep:
            <input name="cep" type="text" id="cep" value="<?php echo $cep; ?>" size="10" maxlength="8"
                   onblur="pesquisacep(this.value);" /></label><br />
        <label>Nº:
            <input name="numero" type="number" id="numero" value="<?php echo $numero; ?>" size="60" /></label><br />
        <label>Rua:
            <input name="rua" type="text" id="rua" value="<?php echo $rua; ?>" size="60" /></label><br />
        <label>Bairro:
            <input name="bairro" type="text" id="bairro" value="<?php echo $bairro; ?>" size="40" /></label><br />
        <label>Cidade:
            <input name="cidade" type="text" id="cidade" value="<?php echo $cidade; ?>" size="40" /></label><br />
        <label>Estado:
            <input name="uf" type="text" id="uf" value="<?php echo $uf; ?>" size="2" /></label><br />

        <div class="row justify-content-center align-items-center">
            <input class="btn-primary button_a" type="submit" value="Cadastrar">
        </div>
        <input type="hidden" name="ID" value="<?php echo $ID; ?>">
        <div class="row justify-content-center align-items-center">
            <input class="col-7 mt-4 button" type="submit" value="Salvar Alterações">
        </div>
    </form>
</body>

</html>
