<?php

/**
 * @author tomiiide
 * @email ayotomiiide@gmail.com
 * @create date 2017-05-25 05:27:48
 * @modify date 2017-05-25 05:27:48
 * @desc [Configuration file for vera]
*/



/**
* Configuration
*
*/

/**
* Configuration for : Error reporting
* Show every little problem in development but only hard errors in production
*/
define('ENVIRONMENT','development');

if(ENVIRONMENT == 'development' || ENVIRONMENT == 'dev'){
    error_reporting(E_ALL);
    ini_set('display_errors',1);
}


/**
* Configuration for : URL
*
*
**/

define('URL_PUBLIC_FOLDER','public');
define('URL_PROTOCOL','//');
define('URL_DOMAIN',$_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER',str_replace(URL_PUBLIC_FOLDER,'',dirname($_SERVER['SCRIPT_NAME'])));
define('URL',URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

/** 
 * Configuration for: Database
 * Define database credentials
 *
 */
 define('DB_TYPE','mysql');
 define('DB_HOST','127.0.0.1');
 define('DB_NAME', 'MiPHP');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_CHARSET', 'utf8');
