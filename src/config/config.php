<?php
/**
* This file contains definitions
*
* @package Config
*/
header("Content-type: text/html; charset=UTF-8");
error_reporting(E_ALL);

/**
* Required site information
*/
define("SITE_UID", "DTK");
define("SITE_NAME", "demokrati.think.dk");
define("SITE_URL", (isset($_SERVER["HTTPS"]) ? "https" : "http")."://".$_SERVER["SERVER_NAME"]);
define("SITE_EMAIL", "martin@think.dk");


/**
* Optional constants
*/
define("DEFAULT_PAGE_DESCRIPTION", "");
define("DEFAULT_LANGUAGE_ISO", "DA");
define("DEFAULT_COUNTRY_ISO", "DK");


// Enable items model
//define("SITE_ITEMS", true);

// Enable notifications (send collection email after N notifications)
define("SITE_COLLECT_NOTIFICATIONS", 50);

define("SITE_INSTALL", true);



// slug options
$slug_data = array("blank");


// slug default data
$slug_data_intro = '';
$slug_data_address = '';
$slug_data_receipt = '';
$slug_data_footer = '<div class="about">demokrati.think.dk</div>';
$slug_upload_receipt = '';

?>
