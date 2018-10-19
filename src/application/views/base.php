
<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RPG Manager</title>

	<!-- CSS FILES-->
	<link href="<?= base_url("assets/css/bootstrap.css") ?>" rel="stylesheet" type="text/css" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="<?= base_url("assets/css/semantic.min.css") ?>" rel="stylesheet" type="text/css" media="all"/>


	<!-- Custom CSS -->
	<link href="<?= base_url("assets/css/home.css") ?>" rel="stylesheet" type="text/css" media="all"/>
	<link href="<?= base_url("assets/css/style.css") ?>" rel="stylesheet">

	<!-- JAVA SCRIPT FILES -->
	<!-- Jquery JS -->
	<script src="<?= base_url("assets/js/jquery-3.3.1.js") ?>"></script>
	
	<!-- Popper JS -->
	<script src="<?= base_url("assets/js/popper.js") ?>"></script>
	
	<script src="<?= base_url("assets/js/bootstrap.js")?>"> </script>
	<script src="<?= base_url("assets/js/semantic.min.js")?>"> </script>

	
	<!-- Quick search -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>

    <!-- Toggle button -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	
	<!-- Custom JS -->
	<script src="<?= base_url("assets/js/main.js") ?>"></script>

</head>
<body>

<div class = "content">
		<div class = "row">
			<!-- Left nav -->
			<div class = "col-md-2 side-bar" id = "side-bar">

				<div id = "conteudo-nav">
					<div class='navigation'>
						<h3>Dashboard</h3>
						<ul class = '<?php if(isset($cor_ul_inicio)) echo $cor_ul_inicio;?>'>
							<li><a href='home'><i class='fa fa-home icon-espaco'></i></a></li>
							<li><a href='home'>Início</a></li>
						</ul>
						<ul class = '<?php if(isset($cor_ul_campanhas)) echo $cor_ul_campanhas;?>'>
							<li><a href='campanha'><i class='fa fa-magic icon-espaco'></i></a></li>
							<li><a href='campanha'>Campanhas</a></li>
						</ul>

					</div>
				</div>
			</div>
			<!-- Left nav -->

			<!-- Conteúdo -->
			<div class = "col-md-9" id = "conteudo">
				<div class="clearfix"></div>
 