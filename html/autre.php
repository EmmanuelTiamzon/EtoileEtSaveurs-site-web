<!DOCTYPE html>
<html lang="fr">
    <head>
        
    </head>
    <body>
        <?php /*exercice 3 : */ 
            foreach($data as $person){
                echo"<tr>";
                foreach($person as $value)
                    echo "<td>$value</td>";
                $imc = round($person['Poids']/($person['Taille'] * $person[$taille])*10000,2);
                $warning = "";
                if ($imc >= 25)
                    $warning = 'warning';
                    echo "<tr class='$warning'>"
                        foreach($person as $value)
                            echo "<td>$value</td>"
                    echo "<td>$imc</td></tr>";
            }
        ?>
    </body>
</html>