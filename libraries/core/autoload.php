<?php
spl_autoload_register(function ($class) {
	if (file_exists("libraries/core/" . strtolower($class) . '.php')) {
		require_once("libraries/core/" . strtolower($class) . '.php');
		
	}
});
