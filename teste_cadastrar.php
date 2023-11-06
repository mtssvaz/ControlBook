<?php
    //TESTE CONSULTA ID CHROMEBOOK
    include 'conexao.php';
    
    $buscar_cb = " SELECT * FROM CADASTROCHROME WHERE LOCALIZACAO='Estoque'";
    $query_cb = mysqli_query($conn, $buscar_cb);
    // FIM TESTE CONSULTA ID CHROMEBOOK
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="imagens/fav_icon.png" type="image/x-icon"/>

    <link rel="stylesheet" id="styleSheet" href="styles/cadastrar.css"/>

    <title>Cadastro de Contrato</title>

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
                mudaStyleSheet('cadastrar.css')
            } else {
                btnStyle.classList.add('active') // Adicione a classe 'active' se não estiver presente
                mudaStyleSheet('cadastrar_acess.css')
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
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-7 col-xl-6 pt-1 pb-1 pr-5 pl-5">
                <h4 class="col-12 mt-3 mb-3 font-weight-bold text-center fonte" >
                    Cadastro de Contrato
                </h4>
            </div>
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7 pt-2 pb-4 pr-3 pr-sm-4 pr-md-5 pl-3 pl-sm-4 pl-md-5 mb-1 container-form">
                <form action="include.php" method="post">
                    <div class="row">
                        <div class="col-12">
                            <label for="usuario" class="pt-3 font-weight-bold fonte">Nome do aluno</label>
                            <input type="text" name="aluno" class="form-control input fonte">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="usuario" class="pt-3 font-weight-bold fonte">Núm. da matrícula</label>
                            <input type="number" name="matricula" class="form-control input fonte">
                        </div>
                       
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="foraten" class="pt-3 fonte">Atendente</label>
                            <select id="idaten" name="atendente" class="form-control input fonte" required>
                                <option class="fonte" value="" selected disabled>Selecione</option>
                                <option class="fonte" value="Mateus Vaz">Mateus Vaz</option>
                                <option class="fonte" value="Patrick Rocha">Patrick Rocha</option>
                                <option class="fonte" value="Patrick Manzo">Patrick Manzo</option>
                                <option class="fonte" value="Solange Mendonça">Solange Mendonça</option> 
                                <option class="fonte" value="Renato Vieira">Renato Vieira</option>
                                <option class="fonte" value="Rosana Rosanita">Rosana Rosanita</option> 
                                <option class="fonte" value="Valdiney Costa">Valdiney Costa</option> 
                            </select>
                        </div>    
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="password" class="pt-3 font-weight-bold fonte">ID do Chromebook</label>
                            <select id="idchrome" name="IdCB" class="form-control input fonte" required>
                                <option class="fonte" value="" selected disabled>Selecione</option>
                                <?php 
                                    while ($CB = mysqli_fetch_array($query_cb)):; 
                                    ?>
                                        <option value="<?php echo $CB["ID"];
                                        ?>">
                                        <?php echo $CB["serial"];
                                        ?>
                                        </option>
                                    <?php 
                                    endwhile; 
                                ?> 
                            </select>
                            <!--<input type="number" name="idchrome" class="form-control input fonte" required>-->
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="dt_entrega" class="pt-3 font-weight-bold fonte">Data de entrega</label>
                            <input type="date" name="dt_entrega" class="form-control input fonte">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="statuscontrato" class="pt-3 fonte">Contrato</label>
                            <select id="idcontrato" name="contrato" class="form-control input fonte" required>
                                <option class="fonte" value="" selected disabled>Selecione</option>
                                <option class="fonte" value="Ativo">Ativo</option>
                                <option class="fonte" value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <input class="btn-primary button_a fonte" type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
