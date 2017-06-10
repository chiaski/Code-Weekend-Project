<?php
	$f = fopen($_POST['orgname'].'.txt', "a+");

	fwrite($f, $_POST['orgname'].' ^ '.$_POST['desc'].' ^ '.$_POST['type'].' ^ '.$_POST['bank'].' ^ '.$_POST['target_name'].' ^ '.(string)$_POST['account_number']."\r\n");
	
	fclose($f);
	header("Location: home.html");
?>
