<?php


echo $fileUrl = $_GET['url'];
echo $fileType = $_GET['type'];
echo $fileSize = $_GET['size'];
echo $fileName = $_GET['name'];

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="'.$fileName.'"');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($fileUrl)); //Absolute URL
ob_clean();
flush();
readfile($fileUrl);