
<!DOCTYPE html> 
<html> 
<body> 

<h1>My first PHP page</h1> 

<?php 

    define('PRENOM', 'chengjie');
    define('NOM', 'ZHANG');
    define('AGE', '22');

echo "Bonjour à tous!"; 
?> 

    <ul type="square">
	<li>
            <?php echo PRENOM; ?>
	</li>
    </ul>
</body> 
</html>
