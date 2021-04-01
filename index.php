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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/estiloform.css">
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
<div class="hero">
  <div class="container">
	<div class="row d-flex align-items-center">
		<div class="col-lg-6 hero-left">
		    <h1 class="display-4 mb-5">La Sorella é conhecido como o <br>"melhor da região".</h1>
		    <div class="mb-2">
		    	<a class="btn btn-primary btn-shadow btn-lg" href="cardapio.html" role="button">Nosso Cardápio</a>
		    </div>
		   
		    <ul class="hero-info list-unstyled d-flex text-center mb-0">
		    	<li class="border-right">
		    		<span class="lnr lnr-rocket"></span>
		    		<h5>
		    			Atendimento Rápido
		    		</h5>
		    	</li>
		    	<li class="border-right">
		    		<span class="lnr lnr-leaf"></span>
		    		<h5>
		    			Melhores Comidas
		    		</h5>
		    	</li>
		    </ul>

	    </div>
	    <div class="col-lg-6 hero-right">
	    	<div class="owl-carousel owl-theme hero-carousel">
			    <div class="item">
			    	<img class="img-fluid" src="img/branco.jpg" alt="">
			    </div>
			</div>
	    </div>
	</div>
  </div>
</div>
<section id="gtco-welcome" class="bg-white section-padding">
    <div class="container">
        <div class="section-content">
            <div class="row">
                <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2" style="background-image: url(img/restaurante.jpg);">
                    
                </div>
                <div class="col-sm-7 py-5 pl-md-0 pl-4">
                    <div class="heading-section pl-lg-5 ml-md-5">
                        <span class="subheading">
                            Nosso Restaurante
                        </span>
                        <h2>
                            Bem vindo ao La Sorella
                        </h2>
                    </div>
                    <div class="pl-lg-5 ml-md-5">
                        <p>La Sorella oferece uma variedade de tamanhos, tipos e sabores de comidas. A nossa comida é feita na hora com um sabor irresistível. Faça sua reserva imeditamente e venha conhecer nosso restaurante, estamos aguardando você. :)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gtco-special-dishes" class="bg-grey section-padding">
</br>
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <h2>
                    Nossas Especialidades
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center py-5">
                    <h2 class="special-number">01.</h2>
                </br>
                    <?php
                    include 'admin/gerenciador/banco.php';
                    $pdo = Banco::conectar();
                    $sql = 'SELECT * FROM especialidades where ID = 1';

                    foreach($pdo->query($sql)as $row)
                    {
                        echo '<tr>';
                        echo '<h3>'. $row['especial'] . '</h3>';
                        echo '<td>'. $row['descricao'] . '</td>';
                    }
                    ?>
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="img/prato1.jpg" alt="" class="img-fluid shadow w-100">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="img/bife.jpg" alt="" class="img-fluid shadow w-100">
                </div>
                <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                    <h2 class="special-number">02.</h2>
                </br>
                    <?php
                    $sql = 'SELECT * FROM especialidades where ID = 2';

                    foreach($pdo->query($sql)as $row)
                    {
                        echo '<tr>';
                        echo '<h3>'. $row['especial'] . '</h3>';
                        echo '<td>'. $row['descricao'] . '</td>';
                    }
                    ?>
                </br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gtco-testimonial" class="overlay bg-fixed section-padding" style="background-image: url(img/testi-bg.jpg);">
</br>
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">
                <h2>
                    Avalie o nosso restaurante, obrigado. :)
                </h2>
            </div>
                    <form method="post" name="Comentario" action="comentario.php">
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="comentario" name="comentario" placeholder="Digite seu comentário." rows="3" required>
                            </div>
                        </br>
                    </br>
                            <div class="col-md-12 form-group">
                                <center><h5>Estrelas</h5></center>
                            <center>
                            <div class="estrelas">    
                            <input type="radio" id="vazio" name="estrela" value="" checked>
				            <label for="estrela_um"><i class="fa"></i></label>
				            <input type="radio" id="estrela_um" name="estrela" value="1">
				            <label for="estrela_dois"><i class="fa"></i></label>
				            <input type="radio" id="estrela_dois" name="estrela" value="2">
				            <label for="estrela_tres"><i class="fa"></i></label>
				            <input type="radio" id="estrela_tres" name="estrela" value="3">
				            <label for="estrela_quatro"><i class="fa"></i></label>
				            <input type="radio" id="estrela_quatro" name="estrela" value="4">
				            <label for="estrela_cinco"><i class="fa"></i></label>
				            <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
                            </div>
                            </center>
                            <div class="col-md-12 text-center">
                            <button class="btn btn-primary btn-shadow btn-lg" type="submit" name="submit">Enviar</button>
                            </div>
                        </div>
                    </form>
<div style="overflow: auto; width: 640px">
<table class="table table-borderless">
<thead>
<tr>
<th scope="col">Nome</th>
<th scope="col">Comentário</th>
<th scope="col">Estrelas</th>
</tr>
</thead>
<tbody>
<?php
$sql = 'SELECT * FROM avaliacoes ORDER BY id DESC';
foreach($pdo->query($sql)as $row)
{
echo '<tr>';
echo '<div style="overflow:auto;">';
echo '<td>'. $row['nome'] . '</td>';
echo '<td>'. $row['comentario'] . '</td>';
echo '<td>'. $row['estrelas'] . '</td>';
echo '</div>';
echo '</td>';
echo '</tr>';
}
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
         			</br>
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
</html>
