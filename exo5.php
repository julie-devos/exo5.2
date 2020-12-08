<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Exercice 3-Partie 2</title>
</head>
<body>

<?php
$age= rand(0, 100);
$genderArray= array("Homme", "Femme");
$genderRand= array_rand($genderArray);
$gender= $genderArray[$genderRand];
?>
<p><?=$gender." ";?></p>
<?= $gender!="Homme" ? "C'est une développeuse !" : "C'est un développeur !";?>



</body>
</html>