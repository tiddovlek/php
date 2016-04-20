<?php

$kappersagenda = array(
    array("naam" => "Mevr. Pietersen","tijdstip" => "9:15"),
    array("naam" => "Mevr. Willems","tijdstip" => "9:30"),
    array("naam" => "","tijdstip" => "9:45"),
    array("naam" => "Paul ven den Broek","tijdstip" => "10:00"),
    array("naam" => "Karel de Meeuw","tijdstip" => "10:15"),
    array("naam" => "","tijdstip" => "10:30"),
    );
echo"Dit is uw agenda:   <br>";
foreach($kappersagenda as $tijd ) {
if($tijd["naam"] != "") {   
            print("<li>".$tijd["tijdstip"].""); print("".$tijd["naam"]."</li>");    
}
    else {

    }
        
}
print("</ul>");
echo"<br>";
echo"De volgende momenten zijn nog beschikbaar:";

foreach($kappersagenda as $tijd ) {
if($tijd["naam"] == "") {   
  print("<li>".$tijd["tijdstip"]."");
}
}
print("</ul>");