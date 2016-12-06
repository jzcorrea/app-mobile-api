<?php

	header("Access-Control-Allow-Origin: *");
	header("Content-Type: text/json; charset=latin1");

	$connection = new Mysqli("localhost", "root", "root", "app-mobile");
	$result 	= "[";

	if (!$connection) {

		echo "Não foi possível conectar-se com o banco de dados! " . $connection->connect_error;
	}

	$query = $connection->query("SELECT * FROM produtos ORDER BY nome ASC");

	$invalidChars = array("\n", "\r", "\t");

	while ($product = $query->fetch_array()) {

		$result .= "{";
		$result .= "\"id\": " . $product["id"] . ",";
		$result .= "\"name\": \"" . $product["nome"] . "\",";
		$result .= "\"description\": \"" . str_replace($invalidChars, " ", $product["descricao"]) . "\",";
		$result .= "\"value\": " . $product["valor"];
		$result .= "},";
	}

	if ($result != "[") {

		$result = substr($result, 0, -1);
	}

	$result .= "]";

	echo $result;
?>