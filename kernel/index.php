<?php 
	use DevFramework\Kernel\FileUtils\FileReader;
	use DevFramework\Kernel\Server\Request;

	require __DIR__ . "/FileUtils/FileReader.php";
	require __DIR__ . "/FileUtils/FileSystem.php";
	require __DIR__ . "/Server/Request.php";

	// Добавлять в отчет все ошибки PHP
	error_reporting(-1);

	echo "method: " . Request::getRequestMethod() . "<br>";
	echo "host: " . Request::getHostName() . "<br>";
	echo "request URI: " . Request::getRequestUri() . "<br>";

	$rawConfig = FileReader::readJsonFile("config/main_config.json");
	$serializeConfig = json_decode($rawConfig, true);
	$author = isset($serializeConfig['author'])?$serializeConfig['author']:"noname";
	echo "Hello " . $author . "!";
?>
