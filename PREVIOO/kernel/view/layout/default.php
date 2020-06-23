<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
<title>Coller des affiches</title>

<link rel="icon" href="<?php echo IMG.'logo.png';?>" />
<link rel="stylesheet"  href="<?php echo CSS.'style.css';?>"/>
</head>
<body>
	<div class="topnav">
		<?php echo"<a class='imgtopnav' href=\"".WEBROOT."\"><img class=\"imgtopnav\"src=\"".IMG."\logo.png\"></a>"; ?>
		 <div class="topnav-right">
			<?php echo"<a class=\"aban none\" href=\"".WEBROOT."militants\">MILITANTS</a>";?>
			<?php echo"<a class=\"aban none\" href=\"".WEBROOT."collerlesaffiches\">AFFICHES A COLLER</a>";?>
		</div>
		
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">Menu</a>
	</div>
	
	<div class="content">
		<?php echo $content;?>
	</div>
	
	<div class="footer">
		<h5 class="white center paddingggg" >
			PREVIOO
			COMMUNAUTÉ
			À PROPOS
			PREVIOO
			<br>
			Fonctionnalités
			Blog
			Plebiscit
			Un service édité par Plebiscit
			96 rue de la Muse - BP 92 061
			17 010 LA ROCHELLE Cedex 1
			<br>
			Tarifs
			Youtube
			CGU - CGV
			<br>
			Connexion
			Twitter
			Mentions légales
			hello@previoo.com
			<br>
			RGPD
			Newsletter
			Contactez nous
			<br>
			Logiciels de campagne électorale et Big Data - Annoncer sa candidature - La communication politique - Désigner un mandataire financier - Le fonctionnement d'un bureau de vote - Rendre accessible sa campagne électorale - Previoo vs Cinquante plus un - Previoo vs NationBuilder - Soutiens, membres et partenaires - Municipales 2020
			<br>
			
			Copyright Previoo 2019 ©
			<button class="none white bold" onclick="scrollToTop(600)">Haut de la page</button>
		</h5>
	</div>
</body>
</html>
	<?php	
	echo"<script src=\"".JS."scrolltopnav.js\"></script>";	
	?>


