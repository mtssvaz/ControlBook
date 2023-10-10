<?php

    if(!empty($_GET['ID']))
    {

        include 'conexao.php';
        
        $ID = $_GET['ID'];
        
        $buscar_cadastros = " SELECT * FROM  CADASTROCHROME WHERE ID=$ID";
        $query_cadastros = mysqli_query($conn, $buscar_cadastros);
        
        if($query_cadastros->num_rows > 0)
        {
        	while($receber_cadastros = mysqli_fetch_array($query_cadastros))
        	{
            	$serial = $receber_cadastros['serial'];
            	$modelo = $receber_cadastros ['modelo'];
<<<<<<< HEAD
            	$ID = $receber_cadastros['ID'];
=======
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2
            	$dt_entrada = $receber_cadastros['dt_entrada'];
            	$localizacao = $receber_cadastros['localizacao'];
        	}
        }
        else{
            header('Location: estoque.php');
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

<<<<<<< HEAD
    <link rel="stylesheet" href="styles/cadastrar.css" />
=======
    <link rel="stylesheet" href="/styles/cadastrar.css" />
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2

    <title>Editar Cadastro</title>

</head>

<body>

<<<<<<< HEAD
    <script>
        function verificarAcesso() {
            var loggedIn = sessionStorage.getItem("loggedIn");
        
            if (loggedIn !== "true") {
                loggedIn = localStorage.getItem("loggedIn");
            }
        
            if (loggedIn !== "true") {
                window.location.href = "index.php";
            }
        }
    
        function logout() {
            sessionStorage.removeItem("loggedIn");
            localStorage.removeItem("loggedIn");
            window.location.href = "index.php";
        }
        verificarAcesso();
        
    </script>

    <nav class="navbar navbar-expand-md fixed-top" style="background-color: #324572;">
        <a class="navbar-brand" href="#">
            <img class="logo" src="imagens/logo.png" alt="Logo do colégio Nahim Ahmad">
        </a>
=======
   <nav class="navbar navbar-expand-md fixed-top" style="background-color: #324572;">
        <a class="navbar-brand" href="#">
            <img class="logo" src="imagens/logo.png" alt="Logo do colégio Nahim Ahmad">
        </a>
		<!-- INICIO ACESSIBILIDADE -->
		<span class="font-con"><button id="ativaContraste" onClick="contrasteON()" class="btn btn-secondary btn-sm">Alto Constraste</button>
		<button onClick="tamanhoFonte('mais');">A+</button>
		<button onClick="tamanhoFonte('menos');">A-</button>
		</span>
		<!-- FIM ACESSIBILIDADE -->			
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
<<<<<<< HEAD
                <li class="nav-item">
                    <a class="nav-link link-nav" href="inicio.html">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-nav" href="#" id="menuCadastro" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cadastro
                    </a>
                    <div class="dropdown-menu" aria-labelledby="menuCadastro">
                        <a class="dropdown-item" href="cadastrar.html">Cadastrar Contrato</a>
                        <a class="dropdown-item" href="cadastrarchrome.html">Cadastrar Chromebook</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle link-nav" href="#" id="menuDiretorio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Diretório
                    </a>
                <div class="dropdown-menu" aria-labelledby="menuDiretorio">
                    <a class="dropdown-item" href="buscardozero.php">Diretório de Contratos</a>
                    <a class="dropdown-item" href="estoque.php">Diretório de Chromebooks</a>
                </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="duvidas.html">Dúvidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav-logout ml-md-3 pl-3 pr-3" onclick="logout()">Sair</a>
                </li>
=======
                   <li class="nav-item">
    <a class="nav-link link-nav" href="inicio.html">Início</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle link-nav" href="#" id="menuCadastro" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cadastro
    </a>
    <div class="dropdown-menu" aria-labelledby="menuCadastro">
	<a class="dropdown-item" href="cadastraraluno.html">Cadastrar Aluno</a>
	<a class="dropdown-item" href="cadastrarchrome.html">Cadastrar Chromebook</a>
        <a class="dropdown-item" href="cadastrar.html">Cadastrar Contrato</a>
      
	 
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle link-nav" href="#" id="menuDiretorio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Diretório
    </a>
    <div class="dropdown-menu" aria-labelledby="menuDiretorio">
	<a class="dropdown-item" href="diretorioaluno.php">Diretório de Alunos</a>
	<a class="dropdown-item" href="estoque.php">Diretório de Chromebooks</a>
        <a class="dropdown-item" href="buscardozero.php">Diretório de Contratos</a>
      
    </div>
</li>
<li class="nav-item">
    <a class="nav-link link-nav" href="duvidas.html">Dúvidas</a>
</li>
<li class="nav-item">
    <a class="nav-link link-nav-logout ml-md-3 pl-3 pr-3" onclick="logout()">Sair</a>
</li>

>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2
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
                <form action="aeditarchrome.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <label for="usuario" class="pt-3 font-weight-bold">Serial</label>
                            <input type="text" name="serial" class="form-control input" value="<?php echo $serial ?>" required>
                        </div>
                    </div>
                    <div class="row">
<<<<<<< HEAD
                        <div class="col-12">
                            <label for="password" class="pt-3 font-weight-bold">Modelo</label>
                            <input type="text" name="modelo" class="form-control input" value="<?php echo $Modelo ?>"required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="usuario" class="pt-3 font-weight-bold">ID</label>
                            <input type="text" name="ID" class="form-control input" value="<?php echo $ID ?>" required>
                        
                    </div>
=======
                         <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="status" class="pt-3">Modelo</label>
                            <select id="status" name="modelo" class="form-control input" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Samsung XE310XBA" <?php echo ($modelo == 'Samsung XE310XBA') ? 'selected' : '' ?> >Samsung XE310XBA</option>
                                <option value="Lenovo 100E 81MA001TBR" <?php echo ($modelo == 'Lenovo 100E 81MA001TBR') ? 'selected' : '' ?> >Lenovo 100E 81MA001TBR</option>
                            </select>
                        </div>
                    </div>
                   
>>>>>>> c704b0bc3e234a9f3b4b3b7ed31e56c1d28dceb2
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="dt_entrega" class="pt-3 font-weight-bold">Data de entrada</label>
                            <input type="date" name="dt_entrada" class="form-control input" value="<?php echo $dt_entrada ?>" required>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="status" class="pt-3">Status</label>
                            <select id="status" name="localizacao" class="form-control input" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="Ativo" <?php echo ($localizacao == 'Ativo') ? 'selected' : '' ?> >Ativo</option>
                                <option value="Manutencao" <?php echo ($localizacao == 'Manutencao') ? 'selected' : '' ?> >Manutenção</option>
                                <option value="Estoque" <?php echo ($localizacao == 'Estoque') ? 'selected' : '' ?> >Estoque</option>
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
