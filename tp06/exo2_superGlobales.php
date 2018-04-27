<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--表单form-->
		<form name="form" method="get" action="#">
        <!--输入框-->
        <input type="text" name="program" value="ISI">
        <input type="hidden" name="salle" value="A007">
        <input type="hidden" name="cours" value="LO07">
        <!--按钮-->
		<input type="submit" value="Submit">
		<input type="reset" value="reset">
	</form>

    <?php
    ////http://localhost/lo07_tp/tp06/exo2_superGlobales.php
    function show($glob,$name){
        if (isset($glob)){
            print($name);
            var_dump($glob);
            print("<br/>");
        }
    }
    show($_GET,"get:");
    show($_POST,"post:");
    show($_COOKIE,"cookie:");
    show($_SESSION,"session:");
    show($_REQUEST,"request:");
    ?>
</body>
</html>