<?php
$directory = './img/store/';
if ($handle = opendir($directory)) { 
    while (false !== ($fileName = readdir($handle))) {     
        //$newName = str_replace(".php",".html",$fileName);
		$newName = strtolower($fileName);
        rename($directory . $fileName, $directory . $newName);
		echo $newName.'<br>';
    }
    closedir($handle);
}
?>
