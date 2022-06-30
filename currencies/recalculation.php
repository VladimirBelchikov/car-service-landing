<?php

	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);

	$configs = include('config.php');
	$rates = "";
	try{
		$mysqli = @new mysqli($configs['host'], $configs['username'], $configs['password'], $configs['database']);
		if (!mysqli_connect_errno()) {
			$result_set = $mysqli->query("SELECT * FROM `variables`");

			if ($result_set){
				$rezMas = [];
				while ($row = $result_set->fetch_assoc()) {
					array_push($rezMas, $row);
				}
				$result_set->close();
				$mysqli->close();


				foreach ($rezMas as $index => $item){
					if ($item['key'] == "currencies"){
						$rates = $item['value'];
					}
				}
			}

		}
	}
	catch (Exception $ex) {
		$rates = "";
	}


	if (!empty($rates)){
		echo $rates; die;
	}else{
		$rates = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "data.json");
		echo $rates; die;
	}

