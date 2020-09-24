<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Registrar</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="js/jquery.mask.js"></script>  
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div >
        <div >
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                       <div class="login-form"> <form id="cadUsuario" action="" method="post"> <div class="row"> <div class="form-group col-md-6"> <label>Nome</label> <input class="au-input au-input--full nome" type="text" name="nome" placeholder="Nome"> <div class="ErroNome"> </div> </div> <div class="form-group col-md-6"> <label>Sobrenome</label> <input class="au-input au-input--full sobrenome" type="text" name="sobrenome" placeholder="Sobrenome"> <div class="ErroSobrenome"> </div> </div> </div> <div class="form-group"> <label>Data de Nascimento</label> <input class="au-input au-input--full dataNasc" type="date" name="dataNasc" > <div class="ErroDataNascimento"> </div> </div> <div class="form-group"> <label>CPF</label> <input class="au-input au-input--full cpf" type="text" name="cpf" placeholder="CPF"> <div class="ErroCpf"> </div> </div> <div class="form-group"> <label> CEP </label> <input  class="au-input au-input--full cep" type="text" name="cep" placeholder="Cep"> <div class="ErroCep"> </div> </div> <div class="form-group"> <label> Estado </label> <input  class="au-input au-input--full estado" type="text" name="estado" placeholder="Estado"> </div> <div class="form-group"> <label> Cidade </label> <input  class="au-input au-input--full cidade" type="text" name="cidade" placeholder="Cidade"> </div> <div class="form-group"> <label> Logradouro </label> <input  class="au-input au-input--full logradouro" type="text" name="logradouro" placeholder="Logradouro"> </div> <div class="form-group"> <label> Complemento </label> <input  class="au-input au-input--full complemento" type="text" name="complemento" placeholder="Complemento"> <div class="ErroComplemento"> </div> </div> <div class="form-group"> <label> Número </label> <input  class="au-input au-input--full numero" type="text" name="numero" placeholder="Número"> <div class="ErroNumero"> </div> </div> <div class="form-group"> <label>Nome de Usuário</label> <input class="au-input au-input--full usuario" type="text" name="usuario" placeholder="Usuario"> <div class="ErroUsuario"> </div> </div> <div class="form-group"> <label>Email</label> <input class="au-input au-input--full email" type="email" name="email" placeholder="Email"> <div class="ErroEmail"> </div> </div> <div class="form-group"> <label>Senha</label> <input class="au-input au-input--full senha" type="password" name="senha" placeholder="Senha"> <div class="ErroSenha"> </div> </div>  <button id="submit" type="button" class="au-btn au-btn--block au-btn--green m-b-20 salvar" >Registrar</button> </form> <div class="register-link"> <p> Possuí conta? <a href="login.php">Entre já</a> </p> </div> </div> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
            $(".loader").hide();
            $(".cep").mask("99999-999");
            $(".cpf").mask("999.999.999-99");

            function limpa_formulário_cep() {
                $(".estado").val("");
                $(".cidade").val("");
                $(".logradouro").val("");
            }
            $("#submit").click(function () {
			if ($('.nome').val() == "") {
				$('.ErroNome').html('<div class="alert alert-danger"><p>Digite o seu Nome!</p></div>');
				$('.nome').focus();
				return false;
			} else {
				$('.ErroNome').html(' ');
			}
			if ($('.sobrenome').val() == "") {
				$('.ErroSobrenome').html('<div class="alert alert-danger"><p>Digite o seu Sobrenome!</p></div>');
				$('.sobrenome').focus();
				return false;
			} else {
				$('.ErroSobrenome').html(' ');
			}
			if ($('.cpf').val() == "") {
				$('.ErroCpf').html('<div class="alert alert-danger"><p>Digite o seu CPF!</p></div>');
				$('.cpf').focus();
				return false;
			} else {
				$('.ErroCpf').html(' ');
			}
			if ($('.dataNasc').val() == "") {
				$('.ErroDataNascimento').html('<div class="alert alert-danger"><p>Insira a sua Data de Nascimento!</p></div>');
				$('.dataNasc').focus();
				return false;
			} else {
				$('.ErroDataNascimento').html(' ');
			}
			if ($('.cep').val() == "") {
				$('.ErroCep').html('<div class="alert alert-danger"><p>Digite o seu CEP!</p></div>');
				$('.cep').focus();
				return false;
			} else {
				$('.ErroCep').html(' ');
			}
			if ($('.usuario').val() == "") {
				$('.ErroUsuario').html('<div class="alert alert-danger"><p>Digite o seu Usuário!</p></div>');
				$('.usuario').focus();
				return false;
			} else {
				$('.ErroUsuario').html(' ');
			}
			if ($('.email').val() == "") {
				$('.ErroEmail').html('<div class="alert alert-danger"><p>Digite o seu Email!</p></div>');
				$('.email').focus();
				return false;
			} else {
				$('.ErroEmail').html(' ');
			}
			if ($('.senha').val() == "") {
				$('.ErroSenha').html('<div class="alert alert-danger"><p>Digite a senha!</p></div>');
				$('.senha').focus();
				return false;
			} else {
				$('.ErroSenha').html(' ');
			}		
			$.post('salvar.php', {
				nome: $('.nome').val(),
				sobrenome: $('.sobrenome').val(),
				cep: $('.cep').val(),
				logradouro: $('.logradouro').val(),
				complemento: $('.complemento').val(),
				numero: $('.numero').val(),
				cpf: $('.cpf').val(),
				senha: $('.senha').val(),
				email: $('.email').val(),
				usuario: $('.usuario').val(),
				estado: $('.estado').val(),
				cidade: $('.cidade').val(),
				nasc: $('.dataNasc').val(),
			}, function (resposta) {
				if (resposta == 1) {
					window.location.href = 'login.php'
				} else {
					window.location.href = 'login.php'
				}
			});
		});
		$(".cep").blur(function () {
			var cep = $(this).val().replace(/\D/g, '');
			if (cep != "") {
				var validacep = /^[0-9]{8}$/;
				if (validacep.test(cep)) {
					$(".estado").val("...");
					$(".cidade").val("...");
					$(".logradouro").val("...");
					$.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
						if (!("erro" in dados)) {
							$('.ErroCep').html(' ');
							$(".estado").val(dados.uf);
							$(".estado").prop('disabled', true);
							$(".cidade").val(dados.localidade);
							$(".cidade").prop('disabled', true);
							$(".logradouro").val(dados.logradouro);
							$(".logradouro").prop('disabled', true);
						} else {
							$('.ErroCep').html('<div class="alert alert-danger"><p>CEP Não Encontrado!</p></div>');
							$('.cep').focus();
							limpa_formulário_cep();
						}
					});
				} else {
					$('.ErroCep').html('<div class="alert alert-danger"><p>Formato de CEP inválido!</p></div>');
					$('.cep').focus();
					limpa_formulário_cep();
				}
			} else {
				limpa_formulário_cep();
			}
		});
    }); 
</script>

    <!-- Jquery JS-->
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->