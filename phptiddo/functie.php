<?php
$celcius = 1;
$fahrenheid = 1;
echo"Van Celsius naar Fahrenheit
<table>
    <tr> ";
for($i = 1; $i < 11; $i++) {
   echo" <td>". $i;echo"</td>";
        $fahrenheid = $i * 9 /5 + 32;
    echo"<td>". $fahrenheid; echo"</td>";
    echo"</tr> <tr>";
}
echo"</table>";

echo"Van Fahrenheit naar Celsius
<table>
    <tr> ";
for($i = 1; $i < 11; $i++) {
   echo" <td>". $i;echo"</td>";
        $celcius = ($i -32) * 5/9;
    echo"<td>". round($celcius, 2); echo"</td>";
    echo"</tr> <tr>";
}
echo"</table>";


echo"<br>Deelbaar door 3<br>";
for($i = 1; $i < 20; $i++) {
 echo"". $i;
    if(($i %2)==0) {
        echo"    deelbaar door 3 <br>";
    } else {
          echo"     niet deelbaar door 3 <br>";  
        }
    }


echo"<br><br>Tekstomkeren";
echo"<br>";
echo strrev("Hello world!");