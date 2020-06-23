<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv_DeKLQjrLUcTBzo3qpDN02rNg_Gi-s0&callback=initMap">
    </script>
<?php
//Charlie Fuseau
//createForm collerlesaffiches

echo"<script src=\"".JS."maps2.js\"></script>";
echo "<table>
		<tr>
			<th class='thannonce'>Date</th>
			<th class='thannonce'>Adresse où coller les affiches</th>
			<th class='thannonce'>Militant</th>
		</tr>";

echo"<form action=\"".WEBROOT."collerlesaffiches/create\" method=\"post\">";

echo"<tr>";
			echo "<td class=\"tdform\"><input type=\"text\" name=\"date_collerlesaffiches\" value=".date('Y-m-d')."></td>";
			echo "<td class=\"tdform\"><input type=\"text\" name=\"adresse_collerlesaffiches\"></td>";
			// projet faire une boucle sur les militants pour recuperer les id et nom/prenom automatiquement
			echo "<td class=\"tdform\">
				<select class='max' name='idelecteur_collerlesaffiches'>
					<option value='' selected>Choisisez un militant</option>
					<option value='1'>DURAND Jeanne</option>
					<option value='2'>MARTIN Claire	</option>
					<option value='3'>CERCLE Georges</option>
					<option value='4'>SIMONET Marie	</option>
					<option value='5'>DORTIN Rémi</option>
					<option value='6'>DUPUIS Josette	</option>
					<option value='7'>LACROIX Jean-Michel</option>
					<option value='8'>LACROIX Michelle	</option>
					<option value='9'>TIBRE	Claude</option>
					<option value='10'>YVES	Marie</option>
					<option value='11'>DUPONT Jean</option>
					<option value='12'>Fuseau Charlie</option>
				</select>";
			echo"</td>";
		echo"</tr>";
echo"</table>";



echo"<input type=\"submit\" value=\"Ajouter\">";
echo"</form>";


echo"<div id='mapp'>";
		//API Google Maps
	echo"</div>";
?>