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
<html>
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

    <link rel="stylesheet" href="styles/cadastrar.css"/>

    <title>Editar dados de aluno</title>

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
        
        function limpa_formulário_cep() {
        // Limpa valores do formulário de CEP.
        document.getElementById('rua').value = "";
        document.getElementById('bairro').value = "";
        document.getElementById('cidade').value = "";
        document.getElementById('uf').value = "";
    }
    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            // Atualiza os campos com os valores.
            document.getElementById('rua').value = conteudo.logradouro;
            document.getElementById('bairro').value = conteudo.bairro;
            document.getElementById('cidade').value = conteudo.localidade;
            document.getElementById('uf').value = conteudo.uf;
        } else {
            // CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {
        var cep = valor.replace(/\D/g, '');

        if (cep != "") {
            var validacep = /^[0-9]{8}$/;

            if (validacep.test(cep)) {
                // Preenche os campos com "..." enquanto consulta o webservice.
                document.getElementById('rua').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";

                // Cria um elemento javascript.
                var script = document.createElement('script');

                // Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                // Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);
            } else {
                // CEP é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } else {
            // CEP sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

    <nav class="navbar-expand-md fixed-top">
        <div>
            <nav>
                <div class="row justify-content-center align-items-center p-1" style="background-color: #FFFFFF;">
                    <ul class="navbar-nav align-items-center">
                        <li>
                            <!-- INICIO ACESSIBILIDADE -->
                            <span class="font-con">
                                <button id="ativaContraste" onClick="tamanhoFonte('menos');">A-</button>
                                <button id="ativaContraste" onClick="tamanhoFonte('normal');">A</button> 
                                <button id="ativaContraste" onClick="tamanhoFonte('mais');">A+</button>
                                <button id="ativaContraste" onClick="contrasteON()">Alto Constraste</button>
                                <a id="ativaContraste" href="mapa_site.html">Mapa do site</a>
                            </span>
                            <!-- FIM ACESSIBILIDADE -->	
                        </li>
                    </ul>
                </div>
            </nav>
            <nav class="navbar navbar-expand-md" style="background-color: #324572;">
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
                            <a class="link-nav-logout ml-md-3 pl-3 pr-3" onclick="logout()">Sair</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-11 col-sm-9 col-md-7 col-lg-7 col-xl-6 pt-1 pb-1 pr-5 pl-5">
                <h4 class="col-12 mt-3 mb-3 font-weight-bold text-center " >
                    Cadastro de Aluno
                </h4>
            </div>
            <div class="col-12 col-md-11 col-lg-9 col-xl-8 col-xxl-7 pt-2 pb-4 pr-3 pr-sm-4 pr-md-5 pl-3 pl-sm-4 pl-md-5 mb-1 container-form">
                <form method="post" action="includealuno.php">
                    <div class="row">
                        <div class="col-12">
                            <label for="usuario" class="pt-3 font-weight-bold">Nome do aluno</label>
                            <input type="text" name="aluno" class="form-control input">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="responsavel" class="pt-3 font-weight-bold">Nome do responsável</label>
                            <input type="text" name="responsavel" class="form-control input">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="forano" class="pt-3">Ano</label>
                            <select id="idano" name="ano" class="form-control input" required>
                                <option value="" selected disabled>Selecione</option>
                                <option value="6">6º ano</option>
                                <option value="7">7º ano</option>
                                <option value="8">8º ano</option>
                                <option value="9">9º ano</option> 
                                <option value="8">8º ano</option>
                                <option value="1">1° Ano - Ensino Médio</option> 
                                <option value="2">2° Ano - Ensino Médio</option> 
                                <option value="3">3° Ano - Ensino Médio</option> 
                            </select>
                        </div>    
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="cep" class="pt-3">CEP:</label>
                            <input type="text" name="cep" class="form-control input" id="cep" onblur="pesquisacep(this.value);">
                        </div>  
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="rua" class="pt-3 font-weight-bold">Logradouro</label>
                            <input type="text" name="rua" class="form-control input" id="rua">
                        </div>  
                        <div class="col-12 col-sm-12 col-md-6">
                            <label for="numero" class="pt-3 font-weight-bold">Nº</label>
                            <input type="number" name="numero" class="form-control input" id="numero">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="bairro" class="pt-3 font-weight-bold">Bairro</label>
                            <input type="text" name="bairro" class="form-control input" id="bairro">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="cidade" class="pt-3 font-weight-bold">Cidade</label>
                            <input type="text" name="cidade" class="form-control input" id="cidade" >
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 font-weight-bold">
                            <label for="uf" class="pt-3 font-weight-bold">Estado</label>
                            <input type="text" name="uf" class="form-control input" id="uf">
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <input class="btn-primary button_a" type="submit" value="Cadastrar">
                    </div>
                </form>
            </div>
        </div>
    </div>   
</body>
</html>
