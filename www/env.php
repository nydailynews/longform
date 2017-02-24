<?php
// Define the environment-specific vars here.
define('CLASS_PATH', './');
if ( getenv('CLASS_PATH') ):
	define('CLASS_PATH', $_ENV['CLASS_PATH']);
endif;
