<?php

### INSTALL SCRIPT START ###
$GLOBALS['TL_CONFIG']['licenseAccepted'] = true;
$GLOBALS['TL_CONFIG']['installPassword'] = '$6$9f4b403941e8446f$/cx8VEWr8RhdTNUBkiMfPjzBiCcu7fsLfJGNNlD/v4n4ow9DsdGMeyp36HdPqdLHNnuwJm5hjw/kNyizvuYeq/';
$GLOBALS['TL_CONFIG']['encryptionKey'] = '7c65a0664a1c0d2e8f6d5bb5717b5268';
$GLOBALS['TL_CONFIG']['dbDriver'] = 'MySQLi';
$GLOBALS['TL_CONFIG']['dbHost'] = '';
$GLOBALS['TL_CONFIG']['dbUser'] = '';
$GLOBALS['TL_CONFIG']['dbPass'] = '';
$GLOBALS['TL_CONFIG']['dbDatabase'] = '';
$GLOBALS['TL_CONFIG']['dbPconnect'] = false;
$GLOBALS['TL_CONFIG']['dbCharset'] = 'UTF8';
$GLOBALS['TL_CONFIG']['dbPort'] = 3306;
$GLOBALS['TL_CONFIG']['dbSocket'] = '';
$GLOBALS['TL_CONFIG']['adminEmail'] = 'hallo@slash-works.de';
$GLOBALS['TL_CONFIG']['latestVersion'] = '3.2.20';
$GLOBALS['TL_CONFIG']['displayErrors'] = false;
$GLOBALS['TL_CONFIG']['defaultUser'] = '';
$GLOBALS['TL_CONFIG']['defaultGroup'] = '';
$GLOBALS['TL_CONFIG']['repository_unsafe_catalog'] = true;
$GLOBALS['TL_CONFIG']['liveUpdateId'] = 'daa0-872f-e882-20e0-1317';
$GLOBALS['TL_CONFIG']['coreOnlyMode'] = false;
$GLOBALS['TL_CONFIG']['minifyMarkup'] = true;
$GLOBALS['TL_CONFIG']['debugMode'] = false;
$GLOBALS['TL_CONFIG']['maintenanceMode'] = false;
$GLOBALS['TL_CONFIG']['rewriteURL'] = true;
$GLOBALS['TL_CONFIG']['cacheMode'] = 'both';
### INSTALL SCRIPT STOP ###

$_srv = $_SERVER;
$project = '';

/**
 * On Local machines and dev
 */

if($_srv['SERVER_ADDR'] === "127.0.0.1" || $_srv['SERVER_ADDR'] === "::1" || preg_match("/^dev./", $_srv['SERVER_NAME']) || preg_match("/xip.io$/", $_srv['SERVER_NAME'])){

    $GLOBALS['TL_CONFIG']['displayErrors'] = true;
    $GLOBALS['TL_CONFIG']['bypassCache'] = true;
    $GLOBALS['TL_CONFIG']['cacheMode'] = 'none';
    $GLOBALS['TL_CONFIG']['minifyMarkup'] = false;

    $GLOBALS['TL_CONFIG']['dbHost'] = '192.168.1.34';
    $GLOBALS['TL_CONFIG']['dbUser'] = 'c1'.$project;
    $GLOBALS['TL_CONFIG']['dbPass'] = $project;
    $GLOBALS['TL_CONFIG']['dbDatabase'] = 'c1'.$project.'_dev';
}