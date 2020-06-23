<?php

echo"<form action=\"".WEBROOT."militants/create\" method=\"post\">";


echo "<table>";
    echo"<tr>";
    echo"<th class='thannonce'>NOM</th><th class='thannonce'>PRENOM</th><th class='thannonce'>GENRE</th><th class='thannonce'>DATE NAISSANCE</th>
                <th class='thannonce'>TEL</th><th class='thannonce'>PORTABLE</th><th class='thannonce'>EMAIL</th>";
    echo"</tr>";
    echo"<tr>";
        echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"nom_electeur\"></td>";
        echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"prenom_electeur\"></td>";
        echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"genre_electeur\"></td>";
        echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"dt_naissance_electeur\" placeholder=\"YYYY-MM-DD\"></td>";
        echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"tel_electeur\"></td>";
        echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"portable_electeur\"></td>";
        echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"email_electeur\"></td>";
    echo"</tr>";
    echo"<tr>";
    echo"<th class='thannonce'>N° RUE</th><th class='thannonce'>COMPLEMENT RUE</th><th class='thannonce'>ADRESSE 1</th><th class='thannonce'>ADRESSE 2</th>
                <th class='thannonce'>CODE POSTAL</th><th class='thannonce'>VILLE</th><th class='thannonce'>PAYS</th>";
    echo"</tr>";
    echo"<tr>";
         echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"norue_electeur\"></td>";
         echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"complementrue_electeur\"></td>";
         echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"adresse_electeur\"></td>";
         echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"adresse2_electeur\"></td>";
         echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"cp_electeur\"></td>";
         echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"ville_electeur\"></td>";
         echo "<td class=\"tdform\"><input class=\"fontmedium\" type=\"text\" name=\"pays_electeur\"></td>";
         echo"</tr>";
    echo "<input class=\"fontmedium\" type=\"hidden\" name=\"id_electeur\">";
    echo "<input class=\"fontmedium\" type=\"hidden\" name=\"dt_crea_electeur\" value=".date('Y-m-d').">";
    echo "<input class=\"fontmedium\" type=\"hidden\" name=\"id_bv_electeur\" >";
    echo "<input class=\"fontmedium\" type=\"hidden\" name=\"abstentionniste_electeur\">";

echo"</table>";

echo"<input type=\"submit\" value=\"Ajouter\">";
echo"</form>";
?>