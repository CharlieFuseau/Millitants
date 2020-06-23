
<!-- Charlie Fuseau -->
<!-- index collerlesaffiches -->


<?php

// echo"<a href=\"".WEBROOT."militants/createForm\"><img class=\"iconban\" src=\"".IMG."icons8-créer-un-nouveau-64.png\"></a>";

if(isset($collerlesaffiches))
{
	echo "<table class='tableannonce' id='sortTable'>";
	
	echo"<tr>";
		echo"<th class='thannonce'>";
			echo"<input type='text' id='inputName' onkeyup='searchname()' placeholder='Recherche par dates'>";
		echo"</th>";
		echo"<th class='thannonce'>";
			echo"<input type='text' id='inputFirstname' onkeyup='searchfirstname()' placeholder='Recherche par adresses'>";
		echo"</th>";
		echo"<th class='thannonce'>";
			echo"<input type='text' id='inputAdress' onkeyup='searchaddress()' placeholder='Recherche par electeurs'>";
		echo"</th>";
	echo"</tr>";
	
	echo"
	<tr>
	<th class='thannonce' onclick='sortTable(0)'>DATE</th>
	<th class='thannonce' onclick='sortTable(1)'>ADRESSE</th>
	<th class='thannonce' onclick='sortTable(2)'>ID ELECTEUR</th>
	<th class='thannonce' onclick='sortTable(3)'>ID</th>
	<th class='thannonce'>MODIFIER</th>
	<th class='thannonce'>SUPPRIMER</th>
	</tr>";
	
	
	
	foreach ($collerlesaffiches as $k => $val)
	{
		extract($val);
		
		
		
		echo"<tr class=\"trannonce fontmedium\">";
		
		
			echo"<td class=\"tdannonce fontmedium\" >$date_collerlesaffiches</a></td>";
	
			echo"<td class=\"tdannonce fontmedium\" >$adresse_collerlesaffiches</a></td>";
		
			echo"<td class=\"tdannonce fontmedium\" >$idelecteur_collerlesaffiches</a></td>";
			
			echo"<td class=\"tdannonce fontmedium\" >$id_collerlesaffiches</a></td>";
			
			
			echo "<td class=\"tdannonce\" ><a href=\"".WEBROOT."collerlesaffiches/updateForm/$id_collerlesaffiches\"><img alt=\"Modifier\" class=\"icon\" src=\"".IMG."icons8-modifier-64.png\"></a></td>";
			echo "<td class=\"tdannonce\" ><a href=\"".WEBROOT."collerlesaffiches/delete/$id_collerlesaffiches\"><img alt=\"Supprimer\" class=\"icon\" src=\"".IMG."icons8-effacer-50.png\"></a></td>";
			
		echo"</tr>";
	}
	echo "</table>";
}
else
{
	echo"BDD vide";
}
echo"<script src=\"".JS."sorttable.js\"></script>";
echo"<script src=\"".JS."search.js\"></script>";		
?>
