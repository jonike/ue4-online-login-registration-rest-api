<?php
/**
 * @author Jason Harris <1337reloaded@gmail.com>
 * @date 2/28/2017 4:15 PM
 */

/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new \Phalcon\Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'ue4',
        'charset'     => 'utf8',
    ],
    'application' => [
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'vendorDir'      => APP_PATH . '/vendor/',
        'validationDir'  => APP_PATH . '/validation/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'logsDir'        => BASE_PATH . '/logs/',

        // A 'noreply' email address that is used as the "From" email header for various emails sent by the API.
        'noReplyEmail' => 'noreply@ue4.localhost',

        // This allows the baseUri to be understand project paths that are not in the root directory
        // of the webpspace.  This will break if the public/index.php entry point is moved or
        // possibly if the web server rewrite rules are changed. This can also be set to a static path.
        'baseUri'        => preg_replace('/public([\/\\\\])index.php$/', '', $_SERVER["PHP_SELF"]),

        // The duration of the session before it times out after login. For requests that extend the player's session,
        // their session is extended by this amount or until the session is extended again.
        //
        // Valid values are supported by PHP's Date and Time Formats
        //
        // @see http://php.net/manual/en/datetime.formats.php
        'sessionDuration' => '+1 hour',

        // Name of your product/game, this is public facing in some areas, i.e. it's included in emails.
        'siteName'      => 'UE4 REST APIs',

        // The duration of time before an account recovery code is invalid after emailed. These codes are
        // used to activate accounts, reset passwords, etc.
        //
        // Valid values are supported by PHP's Date and Time Formats
        //
        // @see http://php.net/manual/en/datetime.formats.php
        'accountRecoveryDuration' => '+15 minutes'
    ]
]);