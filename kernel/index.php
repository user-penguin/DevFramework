<?php 
	use DevFramework\Kernel\FileUtils\FileReader;

	// Добавлять в отчет все ошибки PHP
	error_reporting(-1);


	require __DIR__ . "/FileUtils/FileReader.php";
	require __DIR__ . "/FileUtils/FileSystem.php";


	$rawConfig = FileReader::readJsonFile("config/main_config.json");
	$serializeConfig = json_decode($rawConfig, true);
	$author = isset($serializeConfig['author'])?$serializeConfig['author']:"noname";
	echo "Hello " . $author . "!";
?>
