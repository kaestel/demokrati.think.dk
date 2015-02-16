<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");


$action = $page->actions();
$output = new Output();
$fs = new FileSystem();



$page->bodyClass("approved");
$page->pageTitle("Declarations");



if(is_array($action) && count($action)) {

	// LIST ITEM
	// Requires exactly two parameters /enable/#item_id#
	if(count($action) == 1 && $action[0] == "list") {

		$page->header(array("type" => "janitor"));
		$page->template("janitor/approved/list.php");
		$page->footer(array("type" => "janitor"));
		exit();

	}

}

$page->header();
$page->template("404.php");
$page->footer();

?>
