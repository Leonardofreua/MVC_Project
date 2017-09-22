<?php /** General Settings **/

    define('ENVIRONMENT', 'development');

    if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }

    /**
     * Configuration for URL
     */
    define('URL_PUBLIC_FOLDER', 'public');
    define('URL_PROTOCOL', '//');
    define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
    define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

    /**
     * Configuration for Database
     */
    define('DB_TYPE', 'mysql');
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'pdo');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_CHARSET', 'utf8');