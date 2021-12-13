<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_SERVER['SERVER_NAME']=='localhost'){
	// HTTP
	define('HTTP_SERVER', 'http://localhost/minerstation/public_html/admin/');
	define('HTTP_CATALOG', 'http://localhost/minerstation/public_html/');

	// HTTPS
	define('HTTPS_SERVER', 'http://localhost/minerstation/public_html/admin/');
	define('HTTPS_CATALOG', 'http://localhost/minerstation/public_html/');

	// DIR
	define('DIR_APPLICATION', '/Users/charoenlapanatamsombat/iCloud Drive (Archive)/Documents/htdocs/minerstation/public_html/admin/');
	define('DIR_SYSTEM', '/Users/charoenlapanatamsombat/iCloud Drive (Archive)/Documents/htdocs/minerstation/public_html/system/');
	define('DIR_IMAGE', '/Users/charoenlapanatamsombat/iCloud Drive (Archive)/Documents/htdocs/minerstation/public_html/image/');
	define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
	define('DIR_CATALOG', '/Users/charoenlapanatamsombat/iCloud Drive (Archive)/Documents/htdocs/minerstation/public_html/catalog/');
	define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
	define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
	define('DIR_CONFIG', DIR_SYSTEM . 'config/');
	define('DIR_CACHE', DIR_STORAGE . 'cache/');
	define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
	define('DIR_LOGS', DIR_STORAGE . 'logs/');
	define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
	define('DIR_SESSION', DIR_STORAGE . 'session/');
	define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_DATABASE', 'hostphp7_miners');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'ms_');

	// OpenCart API
	define('OPENCART_SERVER', 'https://www.opencart.com/');
}else{
	define('HTTP_SERVER', 'http://minerstation-th.com/admin/');
	define('HTTP_CATALOG', 'http://minerstation-th.com/');

	// HTTPS
	define('HTTPS_SERVER', 'http://minerstation-th.com/admin/');
	define('HTTPS_CATALOG', 'http://minerstation-th.com/');

	// DIR
	define('DIR_APPLICATION', '/home/miners/domains/minerstation-th.com/public_html/admin/');
	define('DIR_SYSTEM', '/home/miners/domains/minerstation-th.com/public_html/system/');
	define('DIR_IMAGE', '/home/miners/domains/minerstation-th.com/public_html/image/');
	define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
	define('DIR_CATALOG', '/home/miners/domains/minerstation-th.com/public_html/catalog/');
	define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
	define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
	define('DIR_CONFIG', DIR_SYSTEM . 'config/');
	define('DIR_CACHE', DIR_STORAGE . 'cache/');
	define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
	define('DIR_LOGS', DIR_STORAGE . 'logs/');
	define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
	define('DIR_SESSION', DIR_STORAGE . 'session/');
	define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'hostphp7_miners');
	define('DB_PASSWORD', 'ouGz0TuOBL');
	define('DB_DATABASE', 'hostphp7_miners');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'ms_');

	// OpenCart API
	define('OPENCART_SERVER', 'https://www.opencart.com/');
}
