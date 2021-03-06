<?php

global $slug;
global $slug_data_address;
global $slug_email;


// make sure relevant filestructure exists
$fs = new FileSystem();
$fs->makeDirRecursively(PRIVATE_FILE_PATH."/declarations/$slug");
$fs->makeDirRecursively(PRIVATE_FILE_PATH."/declaration_cache");
$fs->makeDirRecursively(PRIVATE_FILE_PATH."/declaration_upload/$slug");
//$fs->makeDirRecursively(PUBLIC_FILE_PATH."/declarations");


// get signature id
$signature_id = session()->value("signature_id");

// save data for pdf printing
$string = "slug=".session()->value("slug")."\n";
$string .= "name=".session()->value("name")."\n";
$string .= "address1=".session()->value("address1")."\n";
$string .= "address2=".session()->value("address2")."\n";
$string .= "postal=".session()->value("postal")."\n";
$string .= "city=".session()->value("city")."\n";
$string .= "municipality=".session()->value("municipality")."\n";
$string .= "cpr_1=".session()->value("cpr_1")."\n";
$string .= "cpr_2=".session()->value("cpr_2")."\n";
$string .= "date_data=".session()->value("date_data")."\n";
$string .= "signature_data=".session()->value("signature_data")."\n";

$info_file = PRIVATE_FILE_PATH."/declaration_cache/".$signature_id;
$fp = fopen($info_file, "w+");
fwrite($fp, $string);
fclose($fp);


// prepare request url
$url = escapeshellarg(SITE_URL."/vaelgererklaering/print/".$signature_id);

// prepare save path + declaration id
$declaration_id = time();
$declaration_file = PRIVATE_FILE_PATH."/declarations/$slug/".$declaration_id.".pdf";


// check wkhtmltox path
$wkhtmltox_path = false;

// print "static_wkhtmltopdf 2>&1";
// print exec("static_wkhtmltopdf 2>&1");

if(!preg_match("/command not found/i", exec("static_wkhtmltopdf 2>&1"))) {
	$wkhtmltox_path = "static_wkhtmltopdf";
}
else if(!preg_match("/command not found/i", exec("/usr/local/bin/static_wkhtmltopdf 2>&1"))) {
	$wkhtmltox_path = "/usr/local/bin/static_wkhtmltopdf";
}
// print $wkhtmltox_path;

// Putting together the command for `shell_exec()`
$command = "$wkhtmltox_path -s A4 $url $declaration_file";
// print $command."<br>";

// Generate the image
$output = shell_exec($command." 2>&1");
// print $output;

// delete info file after printing
unlink($info_file);



// validate result
if(preg_match("/Done/", $output) && file_exists($declaration_file) && filesize($declaration_file) > 100000) {

	$this->mail(array(
		"recipients" => $slug_email,
		"subject" => "NY VÆLGERERKLÆRING (".$declaration_id.")", 
		"message" => "Ny vælgererklæring fra ".SITE_URL, 
		"attachments" => $declaration_file
	));


	header("Location: /vaelgererklaering/receipt");
	exit();
	
}

// delete bad declaration file
if(file_exists($declaration_file)) {
	unlink($declaration_file);
}

// return error page
header("Location: /vaelgererklaering/error");
exit();
?>