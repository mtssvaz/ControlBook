<?php

    if(!empty($_GET['ID']))
    {

        include 'conexao.php';
        
        $ID = $_GET['ID'];
        
        $buscar_cadastros = " SELECT * FROM  CADASTRO WHERE ID=$ID";
        $query_cadastros = mysqli_query($conn, $buscar_cadastros);
        
        if($query_cadastros->num_rows > 0)
        {
        	while($receber_cadastros = mysqli_fetch_array($query_cadastros))
        	{
            	$aluno = $receber_cadastros['aluno'];
            	$responsavel = $receber_cadastros ['responsavel'];
            	$conservacao = $receber_cadastros['conservacao'];
            	$dt_entrega = $receber_cadastros['dt_entrega'];
            	$MATRICULA = $receber_cadastros['MATRICULA'];
            	$n_de_serie = $receber_cadastros['n_de_serie'];
        	}
        }
        else{
            header('Location: buscardozero.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="shortcut icon" href="imagens/fav_icon.png" type="image/x-icon"/>

    <link rel="stylesheet" href="/styles/cadastrar.css" />

    <title>Editar Cadastro</title>

</head>

<body>

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #324572;">
        <a class="navbar-brand" href="#">
            <img class="logo" src="imagens/logo.png" alt="Logo do colégio Nahim Ahmad">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                      <li class="nav-item">
                    <a class="nav-link link-nav" href="inicio.html">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="cadastrar.html">Cadastrar Contrato</a>
                </li>
		 <li class="nav-item">
                    <a class="nav-link link-nav" href="cadastrarchrome.html">Cadastrar Chromebook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="buscardozero.php">Diretório de Contratos</a>
                </li>
		<li class="nav-item">
                    <a class="nav-link link-nav" href="estoque.php">Diretório de Chromebooks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="duvidas.html">Dúvidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav-logout ml-md-3 pl-3 pr-3" onclick="logout()">Sair</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center align-items-center"> <!--style="height: 100vh;"-->
            <div class="col-12 col-sm-9 col-md-6 col-lg-7 col-xl-7 pt-1 pb-1 pr-5 pl-5">
                <h4 class="col-12 mt-3 mb-3 font-weight-bold text-center " >
                    Editar Cadastro
                </h4>
            </div>
        
        
            
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7 pt-2 pb-4 pr-3 pr-sm-4 pr-md-5 pl-3 pl-sm-4 pl-md-5 mb-1 container-form">
                <form action="editar.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <label for="usuario" class="pt-3 font-weight-bold">Nome do aluno</label>
                            <input type="text" name="aluno" class="form-control input" value="<?php echo $aluno ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="password" class="pt-3 font-weight-bold">Responsável financeiro</label>
                            <input type="text" name="responsavel" class="form-control input" value="<?php echo $responsavel ?>"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="usuario" class="pt-3 font-weight-bold">Núm. da matrícula</label>
                            <input type="text" name="MATRICULA" class="form-control input" value="<?php echo $MATRICULA ?>" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="password" class="pt-3 font-weight-bold">Serial</label>
                            <input type="text" name="n_de_serie" class="form-control input" value="<?php echo $n_de_serie ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="dt_entrega" class="pt-3 font-weight-bold">Data de entrega</label>
                            <input type="date" name="dt_entrega" class="form-control input" value="<?php echo $dt_entrega ?>" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="status" class="pt-3">Status</label>
                            <select id="status" name="conservacao" class="form-control input" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="em_uso" <?php echo ($conservacao == 'em_uso') ? 'selected' : '' ?> >Em uso</option>
                                <option value="manutenção" <?php echo ($conservacao == 'manutenção') ? 'selected' : '' ?> >Em manutenção</option>
                                <option value="quebrado" <?php echo ($conservacao == 'quebrado') ? 'selected' : '' ?> >Quebrado</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="ID" value="<?php echo $ID ?>">
                    <div class="row justify-content-center align-items-center">
                        
                        <input class="col-7 mt-4 button" type="submit" value="Salvar Alterações">
                    </div>
                </form>
            </div>
        </div>
    </div>

  

</body>

</html>
