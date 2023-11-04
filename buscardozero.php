<?php

include 'conexao.php';

$buscar_cadastros = " SELECT * FROM  CADASTRO";
$query_cadastros = mysqli_query($conn, $buscar_cadastros);

    ?>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="imagens/fav_icon.png" type="image/x-icon"/>
	
	<link rel="stylesheet" id="styleSheet" href="styles/diretorio.css"/>

	<title> Diretório de Contratos </title>

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

	// INICIO ACESSIBILIDADE
	function contrasteON() {
            var btnStyle = document.getElementById('ativaContraste')
            var btnActive = btnStyle.classList.contains('active')
            
            if (btnActive) {
                btnStyle.classList.remove('active') // Remova a classe 'active' se estiver presente
                mudaStyleSheet('diretorio.css')
            } else {
                btnStyle.classList.add('active') // Adicione a classe 'active' se não estiver presente
                mudaStyleSheet('diretorio_acess.css')
            }
        }
                
        function mudaStyleSheet(sheet) {
            var baseUrl = window.location.origin + '/styles/';
            var styleUrl = baseUrl + sheet;
            document.getElementById("styleSheet").setAttribute('href', styleUrl);
        }

        let tamanhoOriginal;

        function salvarTamanhoOriginal() {
            let elemento = $(".fonte");
            tamanhoOriginal = elemento.css('font-size');
        }

        function tamanhoFonte(tipo){
            let elementos = $(".fonte"); // Seleciona elementos com a classe "fonte" dentro de "font-con"
            
            elementos.each(function() {
                let fonte = $(this).css('font-size'); // Obtém o tamanho da fonte atual
                let tamanhoAtual = parseInt(fonte);
                
                if (tipo == 'mais') {
                    $(this).css("font-size", tamanhoAtual + 1 + "px");
                } else if(tipo == 'menos'){
                    $(this).css("font-size", tamanhoAtual - 1 + "px");
                } else if(tipo == 'normal'){
                    $(this).css("font-size", ""); // Restaura para o tamanho definido no CSS
                }
            });
        }
        // FIM ACESSIBILIDADE

	</script>

    <nav class="navbar-expand-md fixed-top">
        <div>
            <nav class="acessibilidade">
                <div class="row justify-content-center align-items-center p-1">
                    <ul class="navbar-nav align-items-center">
                        <li>
                            <!-- INICIO ACESSIBILIDADE -->
                            <span class="font-con">
                                <button id="ativaContraste" onclick="tamanhoFonte('menos');">A-</button>
                                <button id="ativaContraste" onclick="tamanhoFonte('normal');">A</button> 
                                <button id="ativaContraste" onclick="tamanhoFonte('mais');">A+</button>
                                <button id="ativaContraste" onclick="contrasteON()">Alto Constraste</button>
                                <a id="ativaContraste" href="mapa_site.html">Mapa do site</a>
                            </span>
                            <!-- FIM ACESSIBILIDADE -->	
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="barnav navbar navbar-expand-md">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="imagens/logo.png" alt="Logo do colégio Nahim Ahmad">
                </a>  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link link-nav fonte" href="inicio.html">Início</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle link-nav fonte" href="#" id="menuCadastro" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Cadastro
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuCadastro">
                                <a class="dropdown-item fonte" href="cadastraraluno.html">Cadastrar Aluno</a>
                                <a class="dropdown-item fonte" href="cadastrarchrome.html">Cadastrar Chromebook</a>
                                <a class="dropdown-item fonte" href="cadastrar.html">Cadastrar Contrato</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle link-nav fonte" href="#" id="menuDiretorio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Diretório
                            </a>
                            <div class="dropdown-menu" aria-labelledby="menuDiretorio">
                            <a class="dropdown-item fonte" href="diretorioaluno.php">Diretório de Alunos</a>
                            <a class="dropdown-item fonte" href="estoque.php">Diretório de Chromebooks</a>
                            <a class="dropdown-item fonte" href="buscardozero.php">Diretório de Contratos</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-nav fonte" href="duvidas.html">Dúvidas</a>
                        </li>
                        <li class="nav-item">
                            <a class="link-nav-logout ml-md-3 pl-3 pr-3 fonte" onclick="logout()">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <div class="container">
		<div class="row justify-content-center align-items-center"> <!--style="height: 100vh;"-->
			<h4 class="col-12 mt-3 mb-3 font-weight-bold text-center fonte" >
					Diretório de Contratos
			</h4>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11 col-xxl-7">
				<div class="row mb-3">
					<input name="consulta" id="txt_consulta" placeholder="Busque pelo ID, aluno, matrícula, contrato, entre outros." type="text" class="form-control input fonte">
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
								<th class="text-center align-items fonte">ID</th>
								<th class="text-center align-items fonte">Aluno</th>
								<th class="text-center align-items fonte">Núm. da matrícula</th>
								<th class="text-center align-items fonte">Ano</th>
								<th class="text-center align-items fonte">Atendente</th>
								<th class="text-center align-items fonte">ID Chromebook</th>
								<th class="text-center align-items fonte">Data de entrega</th>
								<th class="text-center align-items fonte">Contrato</th>
								<th class="text-center align-items fonte">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($receber_cadastros = mysqli_fetch_array($query_cadastros))
								{
									echo "<tr>";
									echo "<td class='text-center fonte'>".$receber_cadastros['ID']."</td>";
									echo "<td class='text-center fonte'>".$receber_cadastros['aluno']."</td>";
									echo "<td class='text-center fonte'>".$receber_cadastros['matricula']."</td>";
									echo "<td class='text-center fonte'>".$receber_cadastros['ano']."</td>";
									echo "<td class='text-center fonte'>".$receber_cadastros['atendente']."</td>";
									echo "<td class='text-center fonte'>".$receber_cadastros['idchrome']."</td>";
									echo "<td class='text-center fonte'>".$receber_cadastros['dt_entrega']."</td>";
									echo "<td class='text-center fonte'>".$receber_cadastros['contrato']."</td>";
									echo "<td class='text-center fonte'>
											<button onclick=\"location.href='editar_usuario.php?ID=$receber_cadastros[ID]';\" class='btn btn-primary btn-e'>
												<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
													<path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
												</svg>
											</button>
											<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='excluir.php?ID=$receber_cadastros[ID]';}else{false;}\" class='btn btn-danger btn-e'>
												<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
													<path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
												</svg>
											</button>
										</td>";
									echo "</tr>";
							?>
							<?php }; ?>
						</tbody>
					</table>
					<!--
					<div class="row justify-content-center">
						<nav aria-label="Navegação de página exemplo">
							<ul class="pagination justify-content-end">
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Anterior">
										<span aria-hidden="true">&laquo;</span>
										<span class="sr-only">Anterior</span>
									</a>
								</li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#" aria-label="Próximo">
										<span aria-hidden="true">&raquo;</span>
										<span class="sr-only">Próximo</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
					-->
				</div>
			</div>
		</div>
	</div>

	<script>
		$('input#txt_consulta').quicksearch('table#tabela tbody tr');
	</script>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>
</html>
