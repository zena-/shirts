<?php

try {
// $db = new PDO("mysql:host=localhost;dbname=shirts4mike;port=8889","root","root");
$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME .";port=" . DB_PORT,DB_USER,DB_PASS);	
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET NAMES 'utf8'");
// var_dump($db);
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}

// TRY{
// 	$results = $db->query("SELECT name, price, img, sku, paypal FROM products ORDER BY sku ASC");
// 	// echo "Our query ran successfully.";
// } catch (Exception $e) {
// 	echo "Data could not be retrieved from the database";
// 	exit;
// }

// // echo "<pre>";
// $products = $results->fetchAll(PDO::FETCH_ASSOC));