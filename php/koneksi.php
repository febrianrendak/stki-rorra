<?php

$con = mysql_connect("127.7.203.2","adminyrdWfBv","I7syA5thRMDu");

if (!$con)  {
  	die('Koneksi ke database gagal: ' . mysql_error());
}
mysql_select_db("stkirorra", $con);	

?>
