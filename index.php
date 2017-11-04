<?php
	$name = $_POST['name'];
	$bandname = $_POST['bandname'];
	$email = $_POST['email'];
	$ent_date = date("Y-m-d H:i:s");
	$is_fin = 'NYS';

	$fp = fopen('list.csv', 'a');
	$data = array($name, $bandname, $email, $ent_date, $is_fin);
	$line = implode(',' , $data);
	fwrite($fp, $line."\r\n");
	fclose($fp);

	echo('申し込み完了<br>');
	echo('<a href="./list.php">お申し込み状況一覧</a>');
?>