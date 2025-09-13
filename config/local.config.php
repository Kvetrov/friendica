<?php

// Local configuration

/* If you're unsure about what any of the config keys below do, please check the static/defaults.config.php for detailed
 * documentation of their data type and behavior.
 *
 * Data structure:
 *
 * The configuration is separated in different categories, which are representing the top level array keys.
 *
 * Example:
 *	'config' => [
 *		'admin_email' => 'admin@example.com',
 *	],
 */

return [
	'database' => [
		'hostname' => 'localhost',
		'username' => 'svoi',
		'password' => 'Severnyy_Veter#27',
		'database' => 'svoi',
		'charset' => 'utf8mb4',
	],

	// ****************************************************************
	// The configuration below will be overruled by the admin panel.
	// Changes made below will only have an effect if the database does
	// not contain any configuration for the friendica system.
	// ****************************************************************

	'config' => [
		'admin_email' => 'kirill@kvetrov.dev',
		'sitename' => 'Свои',
		'register_policy' => \Friendica\Module\Register::CLOSED,
		'register_text' => '',
	],
	'system' => [
		'basepath' => '/var/www/svoi',
		'default_timezone' => 'Europe/Moscow',
		'language' => 'ru',
		'url' => 'https://svoi.kvetrov.dev',
	],
];
