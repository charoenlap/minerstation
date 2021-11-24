<?php

if($_SERVER['SERVER_NAME']=='localhost'){
	// HTTP
	define('HTTP_SERVER', 'http://localhost/minerstation/public_html/');

	// HTTPS
	define('HTTPS_SERVER', 'http://localhost/minerstation/public_html/');

	// DIR
	define('DIR_APPLICATION', '/Users/charoenlapanatamsombat/iCloud Drive (Archive)/Documents/htdocs/minerstation/public_html/catalog/');
	define('DIR_SYSTEM', '/Users/charoenlapanatamsombat/iCloud Drive (Archive)/Documents/htdocs/minerstation/public_html/system/');
	define('DIR_IMAGE', '/Users/charoenlapanatamsombat/iCloud Drive (Archive)/Documents/htdocs/minerstation/public_html/image/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_DATABASE', 'hostphp7_miners');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'ms_');
}else{
	// HTTP
	define('HTTP_SERVER', 'http://43.229.77.178/~hostphp7/minerstation/');

	// HTTPS
	define('HTTPS_SERVER', 'http://43.229.77.178/~hostphp7/minerstation/');

	// DIR
	define('DIR_APPLICATION', '/home/hostphp7/domains/hostphp7.com/public_html/minerstation/catalog/');
	define('DIR_SYSTEM', '/home/hostphp7/domains/hostphp7.com/public_html/minerstation/system/');
	define('DIR_IMAGE', '/home/hostphp7/domains/hostphp7.com/public_html/minerstation/image/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'hostphp7_miners');
	define('DB_PASSWORD', 'ouGz0TuOBL');
	define('DB_DATABASE', 'hostphp7_miners');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'ms_');
}

define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

