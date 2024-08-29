<!DOCTYPE html>
<html>
<head>
	<title>Download Server</title>
</head>
<body>
    
</body>
</html>

<?php 
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'download/' . $filename;
	if(!empty($filename) && file_exists($filepath)){


		header("Cache-Control: public");
		header("Content-Description: File Download");
		header("Content-Disposition: attachment; /$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "File not found.";
	}
}

 ?>