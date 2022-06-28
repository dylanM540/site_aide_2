<?php
// Souvent on identifie cet objet par la variable $conn ou $db
$mysqlConnection = new PDO(
    'mysql:host=localhost;dbname=partage_de_recettes;charset=utf8',
    'root',
    'root'
);
?>


   <?php
$db = new PDO('mysql:host=sql.hebergeur.com;dbname=mabase;charset=utf8', 'pierre.durand', 's3cr3t');
?>

<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=my_recipes;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<?php
$recipesStatement = $db->prepare('SELECT * FROM recipes');
?>

<?php
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
?>

<?php

$sqlQuery = 'SELECT title, author FROM recipes'?>;

<?php
$sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = TRUE';?>

<?php
$sqlQuery = 'SELECT * FROM recipes WHERE author = :author AND is_enabled = :is_enabled';

$db->prepare($sqlQuery);
$recipes = $db->execute([
    'author' => 'mathieu.nebra@exemple.com',
    'is_enabled' => true,
]);?>

<?php
$db = new PDO(
    'mysql:host=localhost;dbname=my_recipes;charset=utf8',
    'root',
    'root',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
);
?>