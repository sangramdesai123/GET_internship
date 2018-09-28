<?php


if (isset($_GET['usersubmit'])) {
	header("Location:register.php");
	exit();
}
if (isset($_GET['compsubmit'])) {
	header("Location:comreg.php");
	exit();
}