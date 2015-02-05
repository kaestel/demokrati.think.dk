<?php
global $action;

$slug = $action[1];
@include("config/data-".$slug.".php");

//global $slug_upload_receipt;

// now is the time to clear session
$segment = session()->value("segment");
$dev = session()->value("dev");

session()->reset();


session()->value("segment", $segment);
session()->value("dev", $dev);

?>

<div class="scene receipt i:receipt">

	<?= $slug_upload_receipt ?>

</div>