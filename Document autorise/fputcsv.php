<!DOCTYPE html>
<!--
//http://localhost/lo07_tp/tp05/tp05_exo3_inscription_form.php
-->
<html>
    <head>
        <title>tp05_exo3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <Meta name="Author" Content="chengjie.zhang@utt.fr">
        <?php
            function listeJour(){
                $listeJour=array("lundi","mardi","mercredi","jeudi","vendredi","samedi","dimache");
                foreach($listeJour as $elem){
                    print("<option value=$elem>$elem</option>");
                } ;
            }
            function listeDate(){
                for ($i = 1; $i <= 31; $i++) {
                    $listeDate[]=$i;
                }
                foreach($listeDate as $elem){
                    print("<option value=$elem>$elem</option>");
                } ;
            }
            function listeMois(){
                $listeMois=array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Dimanche");
                foreach($listeMois as $elem){
                    print("<option value=$elem>$elem</option>");
                } ;
            }
            function listeHeure(){
                $minute = array("00","20","40");
                for ($i = 8; $i <= 15; $i++) {
                    for ($j = 0; $j < count($minute); $j++) {
                        $listeHeure[]=$i."h".$minute[$j];
                    }
                }
                foreach($listeHeure as $elem){
                    print("<option value=$elem>$elem</option>");
                } ;
            }
?>
    </head>
	<body>
	<!--表单form-->
	<form method="post" name="form1" action = '#'>
        <label for="Nom">Nom</label>
        <input type="text" name="Nom">
        <br/>
        <label for="Prenom">Prenom</label>
        <input type="text" name="Prenom">
        <br/>
        <!--下拉框-->
        <label for="Jour">Jour</label>
		<select name="Jour">
        <?php
            listeJour();
        ?>
        </select><br><br>

        <label for="Date">Date</label>
		<select name="Date">
        <?php
            listeDate();
        ?>
        </select><br><br>

        <label for="Mois">Mois</label>
		<select name="Mois">
        <?php
            listeMois();
        ?>
        </select><br><br>

        <label for="Heure">Heure</label>
		<select name="Heure">
        <?php
            listeHeure();
        ?>
        </select><br><br>
		<!--按钮-->
		<input type="submit" value="Submit">
		<input type="reset" value="reset">
		<button type="button" onclick="alert('Yeah, u clicked me')">click me!</button>
    </form>
    
    <?php
        if (isset($_POST['Date'])){
            echo "Submit successful";
            $file = fopen("./exo3.csv","a");
            fputcsv($file,$_POST);
            fclose($file);    
        }
    ?>
	</body>
</html>