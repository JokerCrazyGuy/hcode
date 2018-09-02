<?php

	session_id('vj518bmfecd9mbqf6g3h9gd0p');
	require_once("config.php");

	session_regenerate_id();

	echo session_id();
	var_dump($_SESSION);
?>