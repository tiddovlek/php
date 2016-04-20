<style>
    body {
        text-align: center;
    }


</style>

<?php

$lijn = 10;

for($i = 0; $i < $lijn; $i++) {
    
    for($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}