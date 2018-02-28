<?php


echo $fileUrl = $_GET['url'];
echo $fileType = $_GET['type'];
echo $fileSize = $_GET['size'];

header('Content-Type: ' .$fileType);
header('X-Content-Type-Options: nosniff');
header('Content-Length: ' .$fileSize);
header('Content-Disposition: attachment; filename="' .$fileUrl.'"');





