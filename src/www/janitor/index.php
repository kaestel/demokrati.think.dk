<?php
$access_item = false;
if(isset($read_access) && $read_access) {
	return;
}

include_once($_SERVER["FRAMEWORK_PATH"]."/config/init.php");

$action = $page->actions();

$page->pageTitle("the Janitor @ ".SITE_NAME)
?>
<? $page->header(array("type" => "janitor")) ?>

<div class="scene front">
	<h1>Vælgererklæring Admin</h1>
</div>

<? $page->footer(array("type" => "janitor" )) ?>