<?php
global $fs;

$declarations = $fs->files(PRIVATE_FILE_PATH."/declaration_upload");
arsort($declarations);
?>
<div class="scene defaultList approvedList">
	<h1>Godkendte vælgererklæringer</h1>

	<div class="all_items declarations i:defaultList">
		<h2>Approved declarations</h2>
<?		if($declarations): ?>
		<p><?= count($declarations) ?> declarations
<?		else: ?>
		<p>No declarations.</p>
<?		endif; ?>
	</div>

</div>
