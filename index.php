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
    
    <link rel="stylesheet" id="styleSheet" href="styles/tela_login.css">
    
    <title>Gerenciador de Chromebooks - Nahim Ahmad</title>
</head>

<body>
    <script>
        function mostrarSenha(){
            var inputPass = document.getElementById('password')
            var bntShowPass = document.getElementById('btn-password')

            if(inputPass.type == 'password'){
                inputPass.setAttribute('type','text')
                bntShowPass.classList.replace('bi-eye','bi-eye-slash')
            }else{
                inputPass.setAttribute('type','password')
                bntShowPass.classList.replace('bi-eye-slash','bi-eye')
            }
        }
        
        function logar() {
            var login = document.getElementById('usuario').value;
            var senha = document.getElementById('password').value;
            var manterConectado = document.getElementById('manterConectado').checked;
        
            if (login == "admin" && senha == "admin") {
            sessionStorage.setItem("loggedIn", "true");

            if (manterConectado) {
                localStorage.setItem("loggedIn", "true");
            } else {
                localStorage.removeItem("loggedIn");
            }
            
            window.location.href = "inicio.html";
            
            } else {
            alert('Usuário e/ou senha incorretos, tente novamente!');
            }
        }
        
        function verificarAcesso() {
            var loggedIn = sessionStorage.getItem("loggedIn");
        
            // Verifica se o usuário não está logado no sessionStorage
            if (loggedIn !== "true") {
            loggedIn = localStorage.getItem("loggedIn");
            }
        
            // Verifica se o usuário não está logado no localStorage
            if (loggedIn !== "true") {
            window.location.href = "index.php";
            }
        }
        
        function logout() {
            sessionStorage.removeItem("loggedIn");
            localStorage.removeItem("loggedIn");
            window.location.href = "index.php";
            }

        // INICIO ACESSIBILIDADE
        function contrasteON() {
            var btnStyle = document.getElementById('ativaContraste')
            var btnActive = btnStyle.classList.contains('active')
            
            if (btnActive) {
                btnStyle.classList.remove('active') // Remova a classe 'active' se estiver presente
                mudaStyleSheet('tela_login.css')
            } else {
                btnStyle.classList.add('active') // Adicione a classe 'active' se não estiver presente
                mudaStyleSheet('tela_login_acess.css')
            }
        }
                
        function mudaStyleSheet(sheet) {
            var baseUrl = window.location.origin + '/projeto/styles/';
            var styleUrl = baseUrl + sheet;
            document.getElementById("styleSheet").setAttribute('href', styleUrl);
        }

        function tamanhoFonte(tipo){
            let elemento = $(".col-12");
            let fonte = elemento.css('font-size');
            
            if (tipo == 'mais') {
                elemento.css("fontSize", parseInt(fonte) + 1 + "px");
            } else if(tipo == 'menos'){
                elemento.css("fontSize", parseInt(fonte) - 1 + "px");
            } else if(tipo == 'normal'){
                elemento.css("fontSize", "24px");
            }
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
                            </span>
                            <!-- FIM ACESSIBILIDADE -->	
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-11 col-md-9 col-lg-7 col-xl-6 col-xxl-5 pt-4 pb-5 pr-5 pl-5 container-login">
                <div class="row justify-content-center">
                    <img class="imagem" src="imagens/logo.png" alt="Logo do colégio Nahim Ahmad">
                </div>
                <div class="row justify-content-center">
                    <div class="col-autos login-form-title mt-3 mb-3">
                        <p>
                            Faça o Login
                        </p>
                    </div>
                </div>
                <form>
                    <div class="form-group">
                        <label for="usuario" class="row justify-content-center label">Usuário</label>
                        <input type="usuario" class="form-control input" id="usuario" aria-describedby="emailHelp" placeholder="Digite seu usuário">
                    </div>
                    <div class="form-group mb-2">
                        <label for="password" class="row justify-content-center label">Senha</label>
                        <input type="password" class="form-control input" id="password" placeholder="Digite sua senha">
                        <i class="bi bi-eye eye" id="btn-password" onclick="mostrarSenha()"></i>
                    </div>
                    <div class="row mb-3 mt-3">
                        <div class="col">
                            <div class="form-check">
                                <input type="checkbox" name="manterConectado" id="manterConectado" class="form-check-input">
                                <label for="remember" class="form-check-label remember">Manter conectado</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-items-center">
                        <button class="btn-primary button_a" type="button" onclick="logar()">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</body>
</html>