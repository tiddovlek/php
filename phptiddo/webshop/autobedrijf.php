

<?php include 'autolijst.php';
include 'mystyle.php';
            
          
              if(!isset($_GET["min"]) || !is_numeric($_GET["min"])){
                  $min = 0;
              } else {
                  $min = $_GET["min"];
              }
            if(!isset($_GET["max"]) || !is_numeric($_GET["max"])){
                  $max = 214700000;
              } else {
                  $max = $_GET["max"];
              }


            ?>
<body>
	<form action="autobedrijf" method="get">

		<label>Kies Merk</label> <select name="merk" id="merk">
			<option value="Alle">alle merken</option>
			<option value="Ford">Ford</option>
			<option value="Opel">Opel</option>
			<option value="Sabaru">Subaru</option>
			<option value="Mercedes">Mercedes</option>
			<option value="Ferrari">Ferrari</option>
			<option value="Mini">Mini</option>
        
		</select> <br> Minimum Prijs <input type="text" name="min" value="<?php echo"".$min; ?>"> 
		Maximum Prijs <input type="text" name="max" value="<?php echo"".$max; ?>"> 

        <input	type="submit" id="" name="ok" value="Oke" method="POST">

	</form>
	<?php
          
      if(!isset($_GET["ok"])) {
          foreach($lijst as $auto) {
            ?> 
				    <div class="autokader">
                        <p class="merktype">
                            <?php
                                echo "".$auto->getMerk()." ".$auto->getType();
                            ?> 
                        </p>
                            <p class="prijs">	       
                        <?php
                            echo "&euro;".$auto->getPrijs();
                        ?> 
                        </p>
                            <?php
                            echo "<img src =\"".$auto->getFoto()."\">";
                    echo "</div>";
              ?>
                                
    <?php

            }
        } else {
              if(!isset($_GET["min"]) || !is_numeric($_GET["min"])){
                  $min = 0;
              } else {
                  $min = $_GET["min"];
              }
            if(!isset($_GET["max"]) || !is_numeric($_GET["max"])){
                  $max = 214700000;
              } else {
                  $max = $_GET["max"];
              }


                  foreach($lijst as $auto) {
            if((($auto->getPrijs() >=$min && $auto->getPrijs() <= $max) &&
                ($_GET["merk"]) == Alle) || ($auto->getPrijs() >=$min && $auto->getPrijs() <= $max && $_GET["merk"] == $auto->getMerk())){
            ?> 
				    <div class="autokader">
                        <p class="merktype">
                            <?php
                                echo "".$auto->getMerk()." ".$auto->getType();
                            ?> 
                        </p>
                            <p class="prijs">	       
                        <?php
                            echo "&euro;".$auto->getPrijs();
                        ?> 
                        </p>
                            <?php
                            echo "<img src =\"".$auto->getFoto()."\">";
                    echo "</div>";
              ?>
                                
    <?php

          }
        }
      }
          
          ?>
</body>

