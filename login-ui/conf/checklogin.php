<?php
function check_login()
{
if(strlen($_SESSION['exmne_id'])==0)
	{
		$host = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra="student_login.php";
		$_SESSION["exmne_id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
