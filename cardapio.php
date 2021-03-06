<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>La Sorella - O melhor restaurante da região.</title>
    <meta name="description" content="La Sorella">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel= "stylesheet" href="vendor/fade/fade.css"> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head> 	
</div>	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cardapio.php">Nosso Cardápio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="reservar.html">Reservar Mesa</a>
                    </li>					
                </div>
            </ul>
            
			<center>
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <h2 style="color:Black;">La Sorella</h2>
            </a></center>
        </div>
    </div>
</nav>
<section id="gtco-menu" class="section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row mb-5">
                <div class="col-md-12">
                    <div class="heading-section text-center">
                        <h2>
                            Nosso Cardápio
                        </h2>
                    </div>  
                </div>
            </div>
            <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'admin/gerenciador/banco.php';
                        $pdo = Banco::conectar();
                        $sql = 'SELECT * FROM cardapios';

                        foreach($pdo->query($sql)as $row)
                        {
                            echo '<tr>';
                            echo '<td>'. $row['prato'] . '</td>';
                        }
                        Banco::desconectar();
                        ?>
                    </tbody>
                </table>
            </div>
</section>
<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-4">
         		<div class="footer-widget pr-lg-5 pr-0">
         			<img src="" class="img-fluid footer-logo mb-3" alt="">
	         		<p>Trabalho feito por: Ryan, Luis, Luisa, Breno, Vinicius e Gabriel.</p>
         		</div>
         		
         	</div>
         	<div class="col-lg-4">
         		<div class="footer-widget px-lg-5 px-0">
                 </br>
         			<h4>Horários:</h4>
	         		<ul class="list-unstyled open-hours">
		                <li class="d-flex justify-content-between"><span>Segunda</span><span>13:00 - 20:30</span></li>
		                <li class="d-flex justify-content-between"><span>Terça</span><span>13:00 - 20:30</span></li>
		                <li class="d-flex justify-content-between"><span>Quarta</span><span>13:00 - 20:30</span></li>
		                <li class="d-flex justify-content-between"><span>Quinta</span><span>13:00 - 20:30</span></li>
		                <li class="d-flex justify-content-between"><span>Sexta</span><span>18:00 - 02:00</span></li>
		                <li class="d-flex justify-content-between"><span>Sabado</span><span>18:00 - 02:00</span></li>
		                <li class="d-flex justify-content-between"><span>Domingo</span><span>Fechado</span></li>
		              </ul>
         		</div>
             </div> 
            
             <div class="col-lg-4">
                <div class="footer-widget pl-lg-5 pl-0">
                </br>
                    <h4>Endereço</h4>
                    <p>R. Visc. de Pirajá, 666 - Ipanema, Rio de Janeiro - RJ</p>
                </div>   
        </div>
    </div>
</footer>	</div>
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>