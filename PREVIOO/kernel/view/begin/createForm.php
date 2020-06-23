<?php
echo "<table>
		<tr>
			<th class='thannonce'>Date</th>
			<th class='thannonce'>Adresse où coller les affiches</th>
			<th class='thannonce'>id_collerlesaffiches</th>
		</tr>";

echo"<form action=\"".WEBROOT."begin/create\" method=\"post\">";

echo"<tr>";
			echo "<td class=\"tdform\"><input type=\"text\" name=\"date_collerlesaffiches\" value=".date('Y-m-d')."></td>";
			echo "<td class=\"tdform\"><input type=\"text\" name=\"adresse_collerlesaffiches\"></td>";
			echo "<td class=\"tdform\"><input type=\"text\" name=\"idelecteur_collerlesaffiches\"></td>";
			echo "<input type=\"hidden\" name=\"id_collerlesaffiches\">";
		echo"</tr>";
echo"</table>";

echo"<input type=\"submit\" value=\"Ajouter\">";
echo"</form>";
?>