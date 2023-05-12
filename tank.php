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
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="stop_motor_left" value="0"/>
                    <input type="button" value="stop" class="stop_button button">
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="substract_motor_left" value="-10"/>
                    <input type="button" value="➖" class="substract_button button">
                </form>
            </div>
            <div id="buttons_right">
                <form action="./tank.php" method="post">
                    <input type="hidden" name="plus_motor_right" value="10"/>
                    <input type="button" value="➕" class="plus_button button">
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="stop_motor_right" value="0"/>
                    <input type="button" value="stop" class="stop_button button">
                </form>
                <form action="./tank.php" method="post">
                    <input type="hidden" name="substract_motor_right" value="-10"/>
                    <input type="button" value="➖" class="substract_button button">
                </form>
                
                <?php
		$fichier="motorsStates.txt";
		if (file_exists($fichier)) {
			echo "Le fichier ".$fichier." existe.";
		} else {
			echo "Fichier introuvable...";
			$moteur=0;
			touch($fichier);
			if ($fp=fopen($fichier,"a")) {
				fwrite($fp,"moteur à 0\n");
			} else {
				echo "<br />Impossible d'ouvrir le fichier ".$fichier.".";
			}
		}
        
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
			echo "<br />"."il s'agit bien d'une méthode POST.";
			echo $_POST["plus_motor_left"];
			echo "  ";
			echo $_POST["stop_motor_left"];
			echo "  ";
			echo $_POST["substract_motor_left"];
            echo $_POST["plus_motor_right"];
			echo "  ";
			echo $_POST["stop_motor_right"];
			echo "  ";
			echo $_POST["substract_motor_right"];
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
</body>
</html>
