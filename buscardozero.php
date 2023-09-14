<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>
	

    <link rel="shortcut icon" href="imagens/fav_icon.png" type="image/x-icon"/>
	
	<link rel="stylesheet" href="/styles/buscar.css"/>

	<title>Diretório de Chromebooks</title>

</head>
<body>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link link-nav" href="inicio.html">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="cadastrar.html">Cadastrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-nav" href="buscardozero.php">Diretório</a>
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
        <div class="row justify-content-center align-items-center">
            <h4 class="col-12 mt-4 mb-4 font-weight-bold text-center" >
                Diretório de Chromebooks
            </h4>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-7">
                <div class="row justify-content-center align-items-center container-busca mb-3 pt-3 pr-2 pl-2 pb-4" >
                    <div class="col-12 col-sm-12 col-md-6">
                        <label for="usuario" class="mt-2 font-weight-bold">Consultar informações:</label>
                        <input name="consulta" id="txt_consulta" placeholder="Busque pelo nome do aluno" type="text" class="form-control input">
                    </div>
                	<div class="col-12 col-sm-12 col-md-2">
                		<label for="usuario" class="mt-2 font-weight-bold">Data entrega</label>
                        <input name="consulta" id="txt_consulta_dt" placeholder="AAAA-MM-DD" type="date" class="form-control input">
            		</div>
                	<div class="col-12 col-sm-12 col-md-2">
                		<label for="usuario" class="mt-2 font-weight-bold">Matrícula</label>
                		<input name="consulta" id="txt_consulta_mat" placeholder="Matrícula" type="text" class="form-control input">
                	</div>
                	<div class="col-12 col-sm-12 col-md-2">
                		<label for="usuario" class="mt-2 font-weight-bold">Serial</label>
            			<input name="consulta" id="txt_consulta_ser" placeholder="Serial" type="text" class="form-control input">
                	</div>
                </div>
            </div>
            <div>
                <div id="resultado" class="row justify-content-center pb-3"></div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-7 container-busca">
    		    <div class="row justify-content-center align-items-center">
    		        <div class="col table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
    		                		            <div id="resultado" class="row justify-content-center p-2"></div>
    		            <table id="tabela" class="table table-hover table-sm">
            				<thead>
            					<tr>
            					    <th class="text-center align-items">ID</th>
            						<th class="text-center align-items">Aluno</th>
            						<th class="text-center align-items">Resp. Financeiro</th>
            						<th class="text-center align-items">Contrato</th>
            						<th class="text-center align-items">Data de entrega</th>
            						<th class="text-center align-items">Matricula</th>
            						<th class="text-center align-items">Serial</th>
            						<th class="text-center align-items">Ações</th>
            					</tr>
            				</thead> 
    		                <tbody>
    		                        		                    <tr>
    		                        <td class="text-center">2</td>
    		                        <td id="aluno">Ana Sofia Santos </td>
    		                        <td>Carolina Santos</td>
    		                        <td class="text-center">Inativo</td>
    		                        <td id="data" class="text-center">2023-08-15</td>
    		                        <td id="matricula" class="text-center">24583</td>
    		                        <td id="serial" class="text-center">929723959</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=2';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=2';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">3</td>
    		                        <td id="aluno">Klaus Peter Müller</td>
    		                        <td>André Santos Müller</td>
    		                        <td class="text-center">Ativo</td>
    		                        <td id="data" class="text-center">2022-12-05</td>
    		                        <td id="matricula" class="text-center">25802</td>
    		                        <td id="serial" class="text-center">929723523</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=3';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=3';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">4</td>
    		                        <td id="aluno">Maria Fernanda Costa Zimmerer</td>
    		                        <td>Marcela Costa Grassi</td>
    		                        <td class="text-center">Ativo</td>
    		                        <td id="data" class="text-center">2022-11-17</td>
    		                        <td id="matricula" class="text-center">26644</td>
    		                        <td id="serial" class="text-center">929223958</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=4';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=4';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">5</td>
    		                        <td id="aluno">Luca Gabriel Barbosa</td>
    		                        <td>Ricardo Pereira</td>
    		                        <td class="text-center">Inativo</td>
    		                        <td id="data" class="text-center">2023-02-14</td>
    		                        <td id="matricula" class="text-center">24961</td>
    		                        <td id="serial" class="text-center">929723924</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=5';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=5';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">6</td>
    		                        <td id="aluno">Sofia Isabella Silva</td>
    		                        <td>Juliana Silva</td>
    		                        <td class="text-center">Ativo</td>
    		                        <td id="data" class="text-center">2023-04-14</td>
    		                        <td id="matricula" class="text-center">26299</td>
    		                        <td id="serial" class="text-center">929723957</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=6';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=6';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">7</td>
    		                        <td id="aluno">Luisa Valentina Almeida</td>
    		                        <td>Pedro Gomes</td>
    		                        <td class="text-center">Ativo</td>
    		                        <td id="data" class="text-center">2023-03-28</td>
    		                        <td id="matricula" class="text-center">26573</td>
    		                        <td id="serial" class="text-center">929723954</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=7';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=7';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">8</td>
    		                        <td id="aluno">Luca Matteo Wagner</td>
    		                        <td>Fernanda Rocha</td>
    		                        <td class="text-center">Ativo</td>
    		                        <td id="data" class="text-center">2023-02-27</td>
    		                        <td id="matricula" class="text-center">25427</td>
    		                        <td id="serial" class="text-center">929723965</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=8';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=8';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">9</td>
    		                        <td id="aluno">Gabriela Carolina Oliveira</td>
    		                        <td>Diego Cardoso</td>
    		                        <td class="text-center">Inativo</td>
    		                        <td id="data" class="text-center">2023-03-17</td>
    		                        <td id="matricula" class="text-center">24753</td>
    		                        <td id="serial" class="text-center">929723973</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=9';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=9';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">10</td>
    		                        <td id="aluno">Pietro Antonio Schmitt</td>
    		                        <td>Priscila Souza</td>
    		                        <td class="text-center">Ativo</td>
    		                        <td id="data" class="text-center">2023-03-28</td>
    		                        <td id="matricula" class="text-center">25582</td>
    		                        <td id="serial" class="text-center">929723981</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=10';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=10';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                    <tr>
    		                        <td class="text-center">11</td>
    		                        <td id="aluno">Lorenzo André Pires</td>
    		                        <td>Marcos Lima</td>
    		                        <td class="text-center">Ativo</td>
    		                        <td id="data" class="text-center">2023-05-04</td>
    		                        <td id="matricula" class="text-center">26789</td>
    		                        <td id="serial" class="text-center">929723959</td>
    		                        <td class="text-center">
                                        <button onclick="location.href='editar_usuario.php?ID=11';" class='btn btn-primary btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                        <button style="width="4" height="14"" onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=11';}else{false;}" class='btn btn-danger btn-e'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </td>
    		                    </tr>
    		                        		                </tbody>

                            <?php
						while($receber_cadastros = mysqli_fetch_array($query_cadastros))
						{
						
						$ID = $receber_cadastros['ID'];
						$aluno = $receber_cadastros['aluno'];
						$responsavel = $receber_cadastros ['responsavel'];
						$contrato = $receber_cadastros['contrato'];
						$dt_entrega = $receber_cadastros['dt_entrega'];
						$matricula = $receber_cadastros['matricula'];
						$serial = $receber_cadastros['serial'];
						
					?>
						
					<tr>
						<td scope="row"> <?php echo $ $ID; ?></td>
						<td>             <?php echo $aluno; ?></td>
						<td>             <?php echo $responsavel; ?></td>
						<td>             <?php echo $contrato; ?></td>
						<td>             <?php echo $dt_entrega; ?></td>
						<td>             <?php echo $matricula; ?></td>
						<td>             <?php echo $serial; ?></td>
					</tr>
					<?php }; ?>
    		            </table>
    		            
    		            <div class="row justify-content-center">
    			            <nav aria-label="Navegação de página exemplo">
                              <ul class="pagination">
                                <li class="page-item">
                                  <a class="page-link" href="buscardozero.php?pagina=0" aria-label="Anterior">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Anterior</span>
                                  </a>
                                </li>
                                                                <li class="page-item active"><a class="page-link" href="buscardozero.php?pagina=0">1</a></li>
                                                                <li ><a class="page-link" href="buscardozero.php?pagina=1">2</a></li>
                                                                <li ><a class="page-link" href="buscardozero.php?pagina=2">3</a></li>
                                                                <li class="page-item">
                                  <a class="page-link" href="buscardozero.php?pagina=2" aria-label="Próximo">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Próximo</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
    		                		        </div>
    		    </div>
    	    </div>
        </div>
    </div>

	<script>
      $('input#txt_consulta').quicksearch('table#tabela tbody tr', {
        selector: 'td#aluno',
        onAfter: function() {
          if ($('table#tabela tbody tr:visible').length === 0) {
            $('#resultado').text('Nenhum resultado encontrado.');
          } else {
            $('#resultado').text('');
          }
        }
      });
    
      $('input#txt_consulta_mat').quicksearch('table#tabela tbody tr', {
        selector: 'td#matricula',
        onAfter: function() {
          if ($('table#tabela tbody tr:visible').length === 0) {
            $('#resultado').text('Nenhum resultado encontrado.');
          } else {
            $('#resultado').text('');
          }
        }
      });
    
      $('input#txt_consulta_dt').quicksearch('table#tabela tbody tr', {
        selector: 'td#data',
        onAfter: function() {
          if ($('table#tabela tbody tr:visible').length === 0) {
            $('#resultado').text('Nenhum resultado encontrado.');
          } else {
            $('#resultado').text('');
          }
        }
      });
    
      $('input#txt_consulta_ser').quicksearch('table#tabela tbody tr', {
        selector: 'td#serial',
        onAfter: function() {
          if ($('table#tabela tbody tr:visible').length === 0) {
            $('#resultado').text('Nenhum resultado encontrado.');
          } else {
            $('#resultado').text('');
          }
        }
      });
    </script>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
