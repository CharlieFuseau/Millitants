
<?php
//Charlie Fuseau
// updateForm pour collerlesaffiches


		echo"<form action=\"".WEBROOT."collerlesaffiches/update\" method=\"post\">";

		extract($collerlesaffiches);
echo "<table>";
		echo"<tr>";
            echo"<th class='thannonce'>ID</th><th class='thannonce'>DATE</th><th class='thannonce'>ADRESSE</th><th class='thannonce'>ID ELECTEUR</th>";
        echo"</tr>";
        echo"<tr>";
			echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"hidden\" name=\"nom_electeur\" value=".$id_collerlesaffiches.">".$id_collerlesaffiches."</td>";
			echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"prenom_electeur\" value=".$date_collerlesaffiches."></td>";
            echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"genre_electeur\" value=".$adresse_collerlesaffiches."></td>";
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

echo"</table>";

echo"<input type=\"submit\" value=\"Modifier\">";
echo"</form>";
?>