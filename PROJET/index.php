<?php
require_once 'db.php';
$require = $pdo->query("SELECT * FROM produits");
while ($row = $query->fetch()){
	echo 
	$row['image_url'].
	"<br>"
}
?>
