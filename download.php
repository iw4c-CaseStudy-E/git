<?php
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename=yumehikouki.mp3');
	header('Content-Length: ' . filesize('yumehikouki.mp3'));
	readfile("yumehikouki.mp3");
?>