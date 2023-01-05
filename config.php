<?php

// SITE NAME

if ( !defined('SITE_NAME') )
{
    define('SITE_NAME', "Make It Short!");
}

// URL LOCATION (Don't forget "/" at the end !)

if ( !defined('BASE_URL') )
{
    //define('BASE_URL', "http://myurl.com/make_it_short/");
    define('BASE_URL', "http://172.16.4.46/tinyurl/");
}

// DATABASE CONFIGURATION

if ( !defined('HOST_NAME') )
{
    //define('HOST_NAME', "127.0.0.1:3306");
    define('HOST_NAME', "localhost");
}

if ( !defined('DB_NAME') )
{
    //define('DB_NAME', "DATABASE_NAME");
    define('DB_NAME', "exldb");
}

if ( !defined('USER_NAME') )
{
    //define('USER_NAME', "USERNAME");
    define('USER_NAME', "root");
}

if ( !defined('USER_PASSWORD') )
{
    //define('USER_PASSWORD', "PASSWORD");
    define('USER_PASSWORD', "");
}
