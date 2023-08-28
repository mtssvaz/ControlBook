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
    		                        
    		                        		                  
    		                        		                </tbody>
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
                                                                <li ><a class="page-link" href="buscardozero.php?pagina=3">4</a></li>
                                                                <li class="page-item">
                                  <a class="page-link" href="buscardozero.php?pagina=3" aria-label="Próximo">
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
