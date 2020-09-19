<?php
include '../connection.php';
  include 'confirmaSession.php';
?>

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
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="../js/jquery.mask.js"></script>  
    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body  style="text-align: -webkit-center;" class="animsition text-light">
    <div>
        <div>
            <div >
                <div >
                    <div class="login-content"> 
                        <br>
                        <br>
                        <br>
                       <div class="login-form">
                       <div class="card-header bg-secondary col-md-6 text-center">
                                        <strong class="card-title text-light">Produto</strong>
                        </div>
                            <div class="card-body col-md-6 bg-primary">
                            <form action="" method="POST">

                            <div class="text-center">
                                <span >Nome Produto</span>
                                </div>
                            <input class="form-control nome"/>
                            
                            <div class="ErroNome"></div>
                            <br>
                            <div class="text-center">
                                <span >Preço da Unidade</span>
                                </div>
                            <input type="number" class="form-control preco" />
                           
                            <div class="ErroPreco"></div>
                            <br>
                            <button id="submit" type="button" class="au-btn au-btn--block au-btn--green m-b-20 salvar" >Cadastrar Produto</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
            $(".loader").hide();
            
            $(".salvar").click(function () {
            
                if ($('.nome').val() == "") {
				$('.ErroNome').html('<div class="alert alert-danger"><p>Digite o Nome do Produto!</p></div>');
				$('.nome').focus();
				return false;
			} else {
				$('.ErroNome').html(' ');
            }    
            
            if ($('.preco').val() == "") {
				$('.ErroPreco').html('<div class="alert alert-danger"><p>Digite o preço do Produto!</p></div>');
				$('.preco').focus();
				return false;
			} else {
				$('.ErroPreco').html(' ');
			}   
            $.post('inserirProduto.php', {
				nome: $('.nome').val(),
				preco: $('.preco').val(),
			}, function (resposta) {
				if (resposta == 1) {
					window.location.href = 'verProdutos.php';
				} else {
					window.location.href = 'verProdutos.php';
				}
			});
		});
		
    }); 
</script>

    <!-- Jquery JS-->
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->