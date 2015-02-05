<?php

global $slug_upload_receipt;
global $slug_data_intro;
global $slug_data_address;
global $slug_data_receipt;
global $slug_data_footer;
global $slug_email;


$slug_email = "martin@kaestel.dk";


$slug_data_intro = '<h2>BLANK</h2>';
$slug_data_intro .= '<p>Hjælp BLANK med at blive opstillingsberettiget til næste folketingsvalg!<br />Udfyld vælgererklæringen og underskriv med musen eller på din touch screen.<br />Vi sender erklæringen videre ind til folkeregisteret i din kommune.</p>';


$slug_data_address = '';
$slug_data_address .= '<div id="vcard-blank" class="vcard" itemscope itemtype="http://schema.org/Organization">';
$slug_data_address .= '	<div class="name fn org" itemprop="name">BLANK</div>';
$slug_data_address .= '	<div class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">';
$slug_data_address .= '		<div class="po-box" itemprop="postOfficeBoxNumber">ADRESSE</div>';
$slug_data_address .= '		<div class="postallocality"><span class="postal-code" itemprop="postalCode">1234</span> <span class="locality" itemprop="addressLocality">BLANK</span></div>';
$slug_data_address .= '	</div>';
$slug_data_address .= '	<div class="url" itemprop="url">demokrati.think.dk</div>';
$slug_data_address .= '	<div class="email" itemprop="email"><a href="mailto:martin@think.dk">martin@think.dk</a></div>';
$slug_data_address .= '	<div class="telephone" itemprop="telephone">+45 2074 2819</div>';
$slug_data_address .= '</div>';


$slug_data_receipt = '';
$slug_data_receipt .= '<h1>Tusind tak</h1>';
$slug_data_receipt .= '<p>Vi har nu modtaget din underskrevne vælgererklæring.</p>';

$slug_data_receipt .= '<h3>Upload din godkendte vælgererklæring til os</h3>';
$slug_data_receipt .= '<p>Indenfor nogle uger får du din godkendte vælgererklæring tilbage med posten fra Folkeregistret i din kommune. Først når vi modtager den fra dig, tæller den med blandt de 20.260 vælgererklæringer, som vi skal bruge for at kunne stille op til næste folketingsvalg.</p>';
$slug_data_receipt .= '<p>Husk at <a href="/upload">uploade</a> eller sende den til os hurtigst muligt!</p>';
$slug_data_receipt .= '<p class="regards">Med venlig hilsen,</p>';
$slug_data_receipt .= '<h2><a href="http://demokrati.think.dk">BLANK</a></h2>';


$slug_data_footer = '';
$slug_data_footer .= '<div class="about">';
$slug_data_footer .= '	<ul class="contacts">';
$slug_data_footer .= '		<li class="contact" itemscope itemtype="http://schema.org/Organization">';
$slug_data_footer .= '			<h4>Kontakt os</h4>';
$slug_data_footer .= '			<div class="address" itemscope itemtype="http://schema.org/PostalAddress">';
$slug_data_footer .= '				<h5 itemprop="name">BLANK</h5>';
$slug_data_footer .= '				<p itemprop="streetAddress">ADRESSE</p>';
$slug_data_footer .= '				<p><span itemprop="postalCode">1234 </span><span itemprop="addressLocality">BLANK</span></p>';
$slug_data_footer .= '			</div>';
$slug_data_footer .= '			<p><a itemprop="email" href="mailto:martin@think.dk">martin@think.dk</a></p>';
$slug_data_footer .= '			<p itemprop="telephone">+45 2074 2819</p>';
$slug_data_footer .= '		</li>';
$slug_data_footer .= '	</ul>';
$slug_data_footer .= '</div>';


$slug_upload_receipt = '';
$slug_upload_receipt .= '<h1>Tusind tak</h1>';
$slug_upload_receipt .= '<p>Vi har nu modtaget din godkendte vælgererklæring.</p>';
$slug_upload_receipt .= '<p class="regards">Med venlig hilsen,</p>';
$slug_upload_receipt .= '<h2><a href="http://demokrati.think.dk">BLANK</a></h2>';


?>