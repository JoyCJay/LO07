<!DOCTYPE html>
<!--
//http://localhost/lo07_tp/tp06_contexte/tp06_exo6_soutenance_session.php
-->
<html>
    <head>
        <title>tp05_exo2</title>
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
        <!--下拉框-->
        <label for="Jour">Votre Jour</label><br/>
		<select name="Jour">
        <?php
            listeJour();
        ?>
        </select><br><br>

        <label for="Date">Votre Date</label><br/>
		<select name="Date">
        <?php
            listeDate();
        ?>
        </select><br><br>

        <label for="Mois">Votre Mois</label><br/>
		<select name="Mois">
        <?php
            listeMois();
        ?>
        </select><br><br>

        <label for="Heure">Votre Heure</label><br/>
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
        echo session_save_path();
        session_save_path("/var/www/html/lo07_tp/tp06");
        echo "<br/>";
        echo session_save_path();


        session_start();
        
        $_SESSION['user'] = "ZHANG ChengJie";
        $personal_info = array(
            "age"=>"22",
            "gender"=>"male"
        );
        $_SESSION['person_info'] = $personal_info;
        
        if (isset($_SESSION)){
            print("<br/>");
            print("session:");
            print("<pre>");
            print_r($_SESSION);
            print("<br/>");

            
        }
            
    ?>
	</body>
</html>
