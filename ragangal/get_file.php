<?php

$phpFiles = glob('/path/to/files/*.mp3');

if (empty($phpFiles) === false)
{
    $randomFile = $phpFiles[array_rand($phpFiles)];
    include($randomFile);
	
	?randomFile;
}

?>