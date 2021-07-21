<?php
	$Now = date("d-m-Y H:i:s");
	$getString = json_encode($_GET);
	$postString = json_encode($_POST);
	$file_handle = fopen(__DIR__.'/data/notifications.json', 'a');
	fwrite($file_handle, $Now);
	fwrite($file_handle, "\n");
	fwrite($file_handle, $getString);
	fwrite($file_handle, "\n");
	fwrite($file_handle, $postString);
	fwrite($file_handle, "\n");
	fwrite($file_handle, '-------------------------------------');
	fwrite($file_handle, "\n");
	fclose($file_handle);
?>
