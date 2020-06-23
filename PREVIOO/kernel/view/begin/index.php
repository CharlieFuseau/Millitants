<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv_DeKLQjrLUcTBzo3qpDN02rNg_Gi-s0&callback=initMap">
    </script>
</head>
<body>
<?php
//appel des script situé dans le dossier <<js>> à la racine grâce à des constantes de chemins	
echo"<script src=\"".JS."maps.js\"></script>";
echo"<script src=\"".JS."openMilitant.js\"></script>";
echo"<script src=\"".JS."search.js\"></script>";

//verification que la base contient des données
if(isset($begin))
{		
	//non fonctionnel
	echo"<input class='inputname' type='text' id='searchall' onkeyup='searchall()' placeholder='Sélectionner un militant'>";
	// echo"<p class='inputname'>Sélectionner un militant</p>";
	
	foreach ($begin as $k => $val)
	{
		extract($val);
		//liste des militants 
		echo"<div id='tab'>";
			echo"<button id='sortButton' class='tablinks' onclick=\"openMilitants(event, '$id_electeur')\">$nom_electeur $prenom_electeur</button>";
		echo"</div>";
		// content du militant
		echo"<div id='$id_electeur' class='tabcontent'>";
			// echo"<h2 class='center' >Pointer les endroits où $nom_electeur $prenom_electeur devra coller les affiches</h2>";
			echo"<h2 class='center' >Cliquer sur l'icone pour assigner la tâche coller des affiches aux militants</h2>";

			echo"<a href=\"".WEBROOT."collerlesaffiches/createForm\"><img class=\"iconban\" src=\"".IMG."icons8-créer-un-nouveau-64.png\"></a>";
		echo"</div>";	
	}
	
	echo"<div id='map'>";
		//API Google Maps
	echo"</div>";
	
	
}
else
{
	echo"BDD vide";
}
	
	
	

?>

</body>
</html> 
