<?
	$configName = "config/main_config.yml";
	$config = yaml_parse_file($configName);
	var_dump(config);
	echo 'Hello world!';