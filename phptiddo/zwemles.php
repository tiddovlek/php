<style>
td {
    border: 1px solid black;
    }
    table {
    border-collapse: collapse;    
        margin:auto;
    } 
    
</style>
<?php
$aantalPlaaatjes = 0;
$club = array(
    array("naam" => "De spartelkuikens","aantal" => 25),
    array("naam" => "De waterbuffels","aantal" => 32),
    array("naam" => "Plonsmderin","aantal" => 11),
    array("naam" => "Bommetje","aantal" => 23)
    );
echo "<table>";


foreach ($club as $enkele) {
    echo "<tr>";   
        echo " <td>";
            echo $enkele["naam"]."";
        echo "</td>";
        echo "<td>";
            echo $enkele["aantal"].""; 
            $nImages = ($enkele["aantal"]-($enkele["aantal"]%5))/5;
            for ($i = 0; $i < $nImages; $i++) {
                echo "<img src = 'opdracht4.jpg' > ";
            }
        echo "</td>
    </tr>";
}

echo "</table>";