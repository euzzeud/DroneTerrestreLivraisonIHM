<!DOCTYPE html>
<html>
    <head>
        <title> IHM drone terrestre</title>
        <link rel="icon" type="image/x-icon" href=logo_sti.jpg/>
        <meta charset="UTF-8"> 

    </head>

    <body>
        <?php
            /* $vitesse = 0;
            if(isset($_POST['bouton1']))
                $vitesse+;

            else if (isset($_POST['bouton2']))
                $vitesse = 0;
                
            else if (isset($_POST['bouton3']))
                $vitesse-;
            

            */
            $fichier="moteur.txt";
            if (file_exists($fichier)) {
					echo "le fichier ".$fichier." existe !";
			} else {
					echo "rien trouvé!";
				$moteur="";
				touch($fichier);
				if ($fp=fopen($fichier,"a")) {
						fwrite($fp,"moteur à 0\n");
						fclose($fp);
				} else {
						echo "Impossible ouvrir fichier".$fichier."!!";
				}
			}
            if ($_SERVER["REQUEST_METHOD"]=="POST"){
				//echo "<br />"."il s'agit bien d'une méthode post!!";
				echo "<h1>";
				echo $_POST["plus"];
				echo "  ";
				echo $_POST["moins"];
				echo "  ";
				echo $_POST["stop"];
				echo "</h1>";
				echo "<br />";
				$moteur=$_POST["moteur"];
				$compteur=$_POST["compteur"];
				$x=intval($moteur);
				if ($_POST["plus"]!=""){
					if ($x<255){
						$x+=20;
					}
				} else if ($_POST["stop"]!=""){
					$x=0;
					
				} else if ($_POST["moins"]!=""){
					if ($x>-255){
						$x-=20;
					}
					
				} 
				$moteur=strval($x);
				echo"<br />"."moteur= ".$moteur;
			}
            ?>

            <h1>contrôle vitesse &copy</h1>
            <p> vitesse actuelle : <?php echo $vitesse; ?> </p>
            
            <br>
			<form action="./isklp.php" method="post">
				<input type="hidden" name="moteur" value="<?php print $moteur?>"/>
				<input type="hidden" name="compteur" value="<?php print $compteur?>"/>
				
				<input type="hidden" name="plus" value="10"/>
				<input type="submit" name="bouton1" value="+" style="height: 75px;width:75px;margin:5px;font-size: 20px;font-weight: bold">
            </form>
            <br>
            <form action="./isklp.php" method="post">
				<input type="hidden" name="moteur" value="<?php print $moteur?>"/>
				<input type="hidden" name="compteur" value="<?php print $compteur?>"/>
				<input type="hidden" name="stop" value="0"/>
				<input type="submit" name="bouton2" value="STOP" style="height:75px;width:75px;margin:5px;font-size: 20px;font-weight: bold">
            </form>
            <br>
            <form action="./isklp.php" method="post">
				<input type="hidden" name="moteur" value="<?php print $moteur?>"/>
				<input type="hidden" name="compteur" value="<?php print $compteur?>"/>
				<input type="hidden" name="moins" value="-10"/>
                <input type="submit" name="bouton3" value="-" style="height:75px;width:75px;margin:5px;font-size: 20px;font-weight: bold">
            </form>
    </body>
</html>
