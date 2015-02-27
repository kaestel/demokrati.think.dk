<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();


$slug = "hampepartiet";

$page->bodyClass("declaration ".$slug);
$page->pageTitle("Vælgererklæring");


session()->value("slug", $slug);
include("config/data-".$slug.".php");



$page->header();
$page->template("declaration/start.php");
$page->footer();

?>