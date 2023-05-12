<html>
	<head>
		<meta charset="utf-8" />
		<title>IHM drone</title>
	</head>
	<body>
		<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."<br />";?>
		<?php echo $_SERVER["REQUEST_METHOD"]."<br />";?>
		<?php
		// ceci est un commentaire
		$jour=date("d");
		$mois=date("m");
		$an=date("Y");
		echo "Nous sommes le ".$jour."/".$mois."/".$an."<br />";
		echo "Il est " . date("h:i:s a");
		?>
		<br><br><br>
		<?php
		$fichier="moteur.txt";
		if (file_exists($fichier)) {
			echo "le fichier ".$fichier." existe !";
		} else {
			echo "rien trouvé!";
			$moteur=0;
			touch($fichier);
			if ($fp=fopen($fichier,"a")) {
				fwrite($fp,"moteur à 0\n");
			} else {
				echo "<br />Impossible d'ouvrir le fichier ".$fichier."!!";
			}
		}
		// traitement suite à méthode POST
		if ($_SERVER["REQUEST_METHOD"]=="POST") {
			echo "<br />"."il s'agit bien d'une méthode post!! ";
			echo $_POST["plus"];
			echo "  ";
			echo $_POST["stop"];
			echo "  ";
			echo $_POST["moins"];
		}
		?>
		<form action="./index.php" method="post">
			<input type="hidden" name="plus" value="10"/>
			<input type="submit" value="...+..." />	
		</form>
		<form action="./index.php" method="post">
			<input type="hidden" name="stop" value="0"/>
			<input type="submit" value=".STOP." />
		</form>
		<form action="./index.php" method="post">
			<input type="hidden" name="moins" value="-10"/>
			<input type="submit" value=" ...-... " />
		</form>
	</body>
</html>