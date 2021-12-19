<?php

if (!isset($_SESSION['lang']))
	$_SESSION['lang'] = "esp";
else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
	if ($_GET['lang'] == "esp")
		$_SESSION['lang'] = "esp";
	else if ($_GET['lang']  == "eng")
        $_SESSION['lang'] = "eng";
    else if ($_GET['lang']  == "cat")
		$_SESSION['lang'] = "cat";
}

require_once "lang/" . $_SESSION['lang'] . ".php";

?>