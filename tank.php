<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tank.css">
    <title>Drone terrestre de livraison</title>
    
    <script>
        function changeSelectedMode() {
    var droneModeSwitch = document.getElementById("drone_mode_switch");
    var seletedMode = document.getElementById("selected_mode");
    
    if (droneModeSwitch.checked == true) {
        seletedMode.innerHTML = "mode automatique".toUpperCase();

    } else {
        seletedMode.innerHTML = "mode manuel".toUpperCase();
    }
}
    </script>
    
</head>
<body>
    <header id="header">
        <h1 id="title">Drone terrestre de livraison</h1>
    </header>
    <div id="drone_mode">
        <h4 class="container_title">Mode du drone</h4>
        <form action="" method="post">
            <input type="checkbox" id="drone_mode_switch" onchange="changeSelectedMode()">
            <label class="drone_mode_switch_label" for="drone_mode_switch">Toggle</label>
            <p id="selected_mode">MODE MANUEL</p>
        </form>
    </div>
    </div>
    <div id="buttons_container">
        <h4 class="container_title">Boutons de commandes</h4>
        <div class="commands_container">
            <div id="buttons_left">
                <form action="./tank.php" method="post">
                    <input type="hidden" name="plus_motor_left" value="10"/>
                    <input type="button" value="➕" class="plus_button button">
                    <input type="hidden" name="leftMotor" value="<?php print $leftMotor?>"/>
			        <input type="hidden" name="rightMotor" value="<?php print $rightMotor?>"/>
			        <input type="hidden" name="counter" value="<?php print $counter?>"/>
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="stop_motor_left" value="0"/>
                    <input type="button" value="stop" class="stop_button button">
                    <input type="hidden" name="leftMotor" value="<?php print $leftMotor?>"/>
			        <input type="hidden" name="rightMotor" value="<?php print $rightMotor?>"/>
			        <input type="hidden" name="counter" value="<?php print $counter?>"/>
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="substract_motor_left" value="-10"/>
                    <input type="button" value="➖" class="substract_button button">
                    <input type="hidden" name="leftMotor" value="<?php print $leftMotor?>"/>
			        <input type="hidden" name="rightMotor" value="<?php print $rightMotor?>"/>
			        <input type="hidden" name="counter" value="<?php print $counter?>"/>
                </form>
            </div>
            <div id="buttons_right">
                <form action="./tank.php" method="post">
                    <input type="hidden" name="plus_motor_right" value="10"/>
                    <input type="button" value="➕" class="plus_button button">
                    <input type="hidden" name="leftMotor" value="<?php print $leftMotor?>"/>
			        <input type="hidden" name="rightMotor" value="<?php print $rightMotor?>"/>
			        <input type="hidden" name="counter" value="<?php print $counter?>"/>
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="stop_motor_right" value="0"/>
                    <input type="button" value="stop" class="stop_button button">
                    <input type="hidden" name="leftMotor" value="<?php print $leftMotor?>"/>
			        <input type="hidden" name="rightMotor" value="<?php print $rightMotor?>"/>
			        <input type="hidden" name="counter" value="<?php print $counter?>"/>
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="substract_motor_right" value="-10"/>
                    <input type="button" value="➖" class="substract_button button">
                    <input type="hidden" name="leftMotor" value="<?php print $leftMotor?>"/>
			        <input type="hidden" name="rightMotor" value="<?php print $rightMotor?>"/>
			        <input type="hidden" name="counter" value="<?php print $counter?>"/>
                </form>
                
        <?php
		$file="motorsStates.txt";
		if (file_exists($file)) {
			echo "Le fichier ".$file." existe.";
        } else {
            echo "Aucun fichier trouvé.";
            $rightMotor="0";
            $leftMotor="0";
            touch($file);
            if ($fp=fopen($fichier, "w")) {
                fwrite($fp, ("0 0 0\n"));
                fclose($fp);
            } else {
                echo "Impossible d'ouvrir le fichier ".$file.".";
            }
            }
        
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
			$leftMotor=$_POST["left_motor"];
            $rightMotor=$_POST["right_motor"];
            $counter=$_POST["counter"];

            /* LEFT MOTOR */

            $x=intval($leftMotor);
            if ($_POST["plus_motor_left"]!="");
            if (x<100) {
                $x += $y;
            }

            } else if ($_POST["stop_motor_left"]!="") {
                $x = 0;

            } else if ($_POST["substract_motor_left"]!="") {
                $y=intval($_POST["substract_motor_left"]);
                if ($x>-100) {
                    $x += $y;
                }
            }

            $leftMotor=strval($x);

            /* RIGHT MOTOR */

            $x=intval($rightMotor);
            if ($_POST["plus_motor_right"]!="");
            if (x<100) {
                $x += $y;
                
            } else if ($_POST["stop_motor_right"]!="") {
                $x = 0;
                
            } else if ($_POST["substract_motor_right"]!="") {
                $y=intval($_POST["substract_motor_right"]);
                if ($x>-100) {
                    $x += $y;
                }
            }

            $rightMotor=strval($x);

            /* COUNTER */

            $x=intval($counter);
            $x+=1;
            $counter=strval(x);
            if ($fp=fopen($file, "w")) {
                fwrite($fp, $counter." ".$leftMotor." ".$rightMotor&."\n");
				fclose($fp);
            } else {
                echo "Impossible d'ouvrir le fichier ".$file.".";
            }


		}
		?>
        </div>
        </div>

        <div id="coordinates_container">
        <h4 class="container_title">Coordonnées de départ</h4>
        <form action="">
            <label for="latitude">Latitude :</label>
            <input type="text" name="latitude" id="latitude_input">
            <br>
            <br>
            <label for="longitude">Longitude :</label>
            <input type="text" name="longitude" id="longitude_input">
            <br>
            <br>
            <input type="button" value="Valider" id="submit_button">
        </form>
    </div>

        <?php echo "<br>" .htmlspecialchars($_SERVER["PHP_SELF"])."<br>";?>
        <?php echo $_SERVER["REQUEST_METHOD"]."<br>";?>

        <?php
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
			echo "<br>"."leftMotor = ".$leftMotor;
			echo " "."rightMoteur = ".$rightMotor;
			echo "<br>"."counter = ".$counter;
		}
		?>
</body>
</html>
