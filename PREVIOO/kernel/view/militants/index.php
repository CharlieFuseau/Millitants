<!-- Charlie Fuseau -->
<!-- index militants -->


<?php

echo"<a href=\"".WEBROOT."militants/createForm\"><img class=\"iconban\" src=\"".IMG."icons8-créer-un-nouveau-64.png\"></a>";

if(isset($militants))
{
	echo "<table class='tableannonce' id='sortTable'>";
	
	echo"<tr>";
		echo"<th class='thannonce'>";
			echo"<input type='text' id='inputName' onkeyup='searchname()' placeholder='Recherche par noms'>";
		echo"</th>";
		echo"<th class='thannonce'>";
			echo"<input type='text' id='inputFirstname' onkeyup='searchfirstname()' placeholder='Recherche par prenoms'>";
		echo"</th>";
		echo"<th class='thannonce'>";
			echo"<input type='text' id='inputAdress' onkeyup='searchaddress()' placeholder='Recherche par adresses'>";
		echo"</th>";
	echo"</tr>";
	
	echo"
	<tr>
	<th class='thannonce' onclick='sortTable(0)'>NOM</th>
	<th class='thannonce' onclick='sortTable(1)'>PRENOM</th>
	<th class='thannonce' onclick='sortTable(2)'>ADRESSE</th>
	<th class='thannonce' onclick='sortTable(3)'>CODE POSTAL</th>
	<th class='thannonce' onclick='sortTable(4)'>VILLE</th>
	<th class='thannonce' onclick='sortTable(5)'>PAYS</th>
	<th class='thannonce' onclick='sortTable(6)'>TEL</th>
	<th class='thannonce' onclick='sortTable(7)'>PORTABLE</th>
	<th class='thannonce' onclick='sortTable(8)'>EMAIL</th>
	<th class='thannonce' onclick='sortTable(8)'>MODIFIER</th>
	<th class='thannonce' onclick='sortTable(8)'>SUPPRIMER</th>
	</tr>";
	
	
	
	foreach ($militants as $k => $val)
	{
		extract($val);
		
		
		
		echo"<tr class=\"trannonce fontmedium\">";
		
		
			echo"<td class=\"tdannonce fontmedium\" >".$nom_electeur."</a></td>";
	
			echo"<td class=\"tdannonce fontmedium\" >".$prenom_electeur."</a></td>";
		
			echo"<td class=\"tdannonce fontmedium\" >".$norue_electeur." ".$complementrue_electeur." ".$adresse_electeur."</a></td>";
		
			echo"<td class=\"tdannonce fontmedium\" >".$cp_electeur."</a></td>";

			echo"<td class=\"tdannonce fontmedium\" >".$ville_electeur."</a></td>";
	
			echo"<td class=\"tdannonce fontmedium\" >".$pays_electeur."</a></td>";

			echo"<td class=\"tdannonce fontmedium\" >".$tel_electeur."</a></td>";

			echo"<td class=\"tdannonce fontmedium\" >".$portable_electeur."</a></td>";

			echo"<td class=\"tdannonce fontmedium\" >".$email_electeur."</a></td>";
			
			echo "<td class=\"tdannonce\" ><a href=\"".WEBROOT."militants/updateForm/$id_electeur\"><img alt=\"Modifier\" class=\"icon\" src=\"".IMG."icons8-modifier-64.png\"></a></td>";
			echo "<td class=\"tdannonce\" ><a href=\"".WEBROOT."militants/delete/$id_electeur\"><img alt=\"Supprimer\" class=\"icon\" src=\"".IMG."icons8-effacer-50.png\"></a></td>";
			
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
