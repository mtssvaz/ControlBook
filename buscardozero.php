<!doctype html>
<html lang="pt-br">
<head>
    <!-- Cabeçalho e metadados -->
</head>
<body>
    <!-- Seu código HTML existente -->

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <!-- ... outros elementos HTML ... -->
            <table id="tabela" class="table table-hover table-sm">
                <thead>
                    <tr>
                        <th class="text-center align-items">ID</th>
                        <th class="text-center align-items">Aluno</th>
                        <th class="text-center align-items">Resp. Financeiro</th>
                        <th class="text-center align-items">Contrato</th>
                        <th class="text-center align-items">Data de entrega</th>
                        <th class="text-center align-items">Matrícula</th>
                        <th class="text-center align-items">Serial</th>
                        <th class="text-center align-items">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($receber_cadastros = mysqli_fetch_array($query_cadastros)) {
                        $ID = $receber_cadastros['ID'];
                        $aluno = $receber_cadastros['aluno'];
                        $responsavel = $receber_cadastros['responsavel'];
                        $contrato = $receber_cadastros['contrato'];
                        $dt_entrega = $receber_cadastros['dt_entrega'];
                        $matricula = $receber_cadastros['matricula'];
                        $serial = $receber_cadastros['serial'];
                    ?>
                    <tr>
                        <td scope="row"><?php echo $ID; ?></td>
                        <td><?php echo $aluno; ?></td>
                        <td><?php echo $responsavel; ?></td>
                        <td><?php echo $contrato; ?></td>
                        <td><?php echo $dt_entrega; ?></td>
                        <td><?php echo $matricula; ?></td>
                        <td><?php echo $serial; ?></td>
                    </tr>
                    <?php }; ?>
                </tbody>
            </table>
            <!-- ... outros elementos HTML ... -->
        </div>
    </div>

    <!-- Seu código HTML existente -->

    <!-- Seus scripts JavaScript -->
</body>
</html>
