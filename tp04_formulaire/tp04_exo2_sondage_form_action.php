<!DOCTYPE html>
<!--
http://localhost/lo07_tp/tp04/tp04_exo2_sondage_form_action.php
-->
<html>
    <head>
        <title>tp02_ex4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <Meta name="Author" Content="chengjie.zhang@utt.fr">
		<link rel="stylesheet" type="text/css" href="tp02_exo4.css" />
    </head>
	<body>
	<!--表单form-->
	<form method="get" name="form1" action = '#'>

		<!--单选框-->
		<input type="radio" name="sex" value="homme" checked/>Mr
		<input type="radio" name="sex" value="femme">Mme<br>
		<!--输入框-->
		Nom: <input type="text" name="nom">		
		Prénom: <input type="text" name="prenom"><br>	
		Tel：<input type="tel" name="tel" />
		Mél：<input type="email" name="email"/><br>
		<!--复选框-->
		<input type="checkbox" name="opérateurs" value="Orange">Orange<br>
		<input type="checkbox" name="opérateurs" value="Bouygues">Bouygues<br>
		<input type="checkbox" name="opérateurs" value="Free">Free<br>
		<input type="checkbox" name="opérateurs" value="SFR">SFR<br>
		<input type="checkbox" name="opérateurs" value="Virgin">Virgin<br>
		<input type="checkbox" name="opérateurs" value="SFR">SFR<br>
		<input type="checkbox" name="opérateurs" value="Autre">Autre<br>
		<br>
		
		<label for="prix">le prix mensuel le plus proche</label><br/>
		<input type="radio" name="prix" value="10€" checked/>10
		<input type="radio" name="prix" value="20€" />20
		<input type="radio" name="prix" value="30€" />30
		<input type="radio" name="prix" value="40€" />40
		<input type="radio" name="prix" value="50€" />50
		<input type="radio" name="prix" value="60€" />60
		<br>
		<!--下拉框-->
		branche:<select name="branche">
		<option value="ISI">isi</option>
		<option value="SRT">srt</option>
		<option value="A2I">a2i</option>
		<option value="GI">gi</option>
		</select><br><br>

		<!--日期时间-->
		<input type="date" name="date"/><br/>
		<input type="time" name="time"/>
		<!--搜索-->
		<input type="search" name="search" result="s"/>
		<!--按钮-->
		<input type="submit" value="Submit">
		<input type="reset" value="reset">
		<input type="button" value="Close" onclick="windows.close()">
    </form>
    

    <?php
        if (isset($_GET["nom"])){
            $nom_valide= filter_input(INPUT_GET, "nom", FILTER_VALIDATE_nom);
            if ($nom_valide === FALSE){
                echo "_GET[nom] n'est pas un nom valide\n"."<br/>";
            }
            else
                echo "$_GET[nom] est un nom valide\n"."<br/>";
        }
        if (isset($_GET["prenom"])){
            $prenom_valide= filter_input(INPUT_GET, "prenom");
            if ($prenom_valide === FALSE){
                echo "_GET[prenom] n'est pas un prenom valide\n"."<br/>";
            }
            else
                echo "$_GET[prenom] est un prenom valide\n"."<br/>";
        }

        if (isset($_GET["tel"])){
            $email_valide= filter_input(INPUT_GET, "tel");
            if ($email_valide === FALSE){
                echo "_GET[tel] n'est pas un telephone valide\n"."<br/>";
            }
            else
                echo "$_GET[tel] est un telephone valide\n"."<br/>";
        }

        if (isset($_GET["email"])){
            $email_valide= filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);
            if ($email_valide === FALSE){
                echo "_GET[email] n'est pas un email valide\n"."<br/>";
            }
            else
                echo "$_GET[email] est un email valide\n"."<br/>";
        }
        ?>
	</body>
</html>