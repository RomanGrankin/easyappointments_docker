<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */

$baseUrl = getenv('BASE_URL') ?: 'localhost';
$language = getenv('LANGUAGE') ?: 'english';
$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbName = getenv('DB_NAME') ?: 'easyappointments';
$dbUsername = getenv('DB_USERNAME') ?: 'root';
$dbPassword = getenv('DB_PASSWORD') ?: 'root';
$googleSyncFeature = getenv('GOOGLE_SYNC_FEATURE') ?: '"FALSE"';
$googleProductName = getenv('GOOGLE_PRODUCT_NAME') ?: '';
$googleClientId = getenv('GOOGLE_CLIENT_ID') ?: '';
$googleClientSecret = getenv('GOOGLE_CLIENT_SECRET') ?: '';
$googleApiKey = getenv('GOOGLE_API_KEY') ?: '';
$debugMode = getenv('DEBUG_MODE') ?: '"FALSE"';

$configObject = "
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL = '"      . $baseUrl . "';
    const LANGUAGE      = '" . $language . "';
    const DEBUG_MODE    = "  . $debugMode . ";

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = '" . $dbHost . "';
    const DB_NAME       = '" . $dbName . "';
    const DB_USERNAME   = '" . $dbUsername . "';
    const DB_PASSWORD   = '" . $dbPassword . "';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = " . $googleSyncFeature ."; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = '" . $googleProductName . "';
    const GOOGLE_CLIENT_ID      = '" . $googleClientId . "';
    const GOOGLE_CLIENT_SECRET  = '" . $googleClientSecret . "';
    const GOOGLE_API_KEY        = '" . $googleApiKey . "';
}";

eval($configObject);

/* End of file config.php */
/* Location: ./config.php */