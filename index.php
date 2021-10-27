<?php
	include("config.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Hidraliso | Alisamento de Chuveiro</title>
	<meta name="description" content="HIDRALISO é um produto que foi desenvolvido para facilitar a vida de quem quer ter cabelos sempre LISOS e LINDOS em CASA. CABELOS DE SALÃO SEM SAIR DE CASA, PARA TODOS OS CABELOS, AÇÃO ANTI-FRIZZ, SEM DANOS AOS FIOR, HIDRATAÇÃO INTENSA, MÁXIMA DURAÇÃO, MAIS BRILHO E MACIEZ, QUERO MEU CABELO LISO.">
	<meta name="keywords" content="hidraliso,cabelos,de,salão,para,todos,os,cabelos,sem,danos,alisamento,de,chuveiro,cabelos,lisos,sem,sair,de,casa">
	<meta name="author" content="Mulher Mais Bela">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<meta property="og:title" content="Hidraliso | Alisamento de Chuveiro">
	<meta property="og:description" content="HIDRALISO é um produto que foi desenvolvido para facilitar a vida de quem quer ter cabelos sempre LISOS e LINDOS em CASA. CABELOS DE SALÃO SEM SAIR DE CASA, PARA TODOS OS CABELOS, AÇÃO ANTI-FRIZZ, SEM DANOS AOS FIOR, HIDRATAÇÃO INTENSA, MÁXIMA DURAÇÃO, MAIS BRILHO E MACIEZ, QUERO MEU CABELO LISO.">
	<meta property="og:image" content="<?php echo INCLUDE_PATH?>img/icon.jpg">
	<meta property="og:url" content="<?php echo INCLUDE_PATH?>">
	<link rel="shortcut icon" href="<?php echo INCLUDE_PATH?>img/icon.jpg" type="image/jpg">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800;900&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>css/slick.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>css/all.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH?>css/style.css" rel="stylesheet">
</head>
<body>

	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			include('pages/home.php');
		}
	?>

	<footer>
		<div class="container">
			<p>Copyright Hidraliso&copy <?php echo date('Y')?> - Mulher mais bela Cosmeticos&reg</p>
		</div><!--container-->
	</footer>

<script src="<?php echo INCLUDE_PATH?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH?>js/slick.js"></script>
<script src="<?php echo INCLUDE_PATH?>js/code.js"></script>

</body>
</html>