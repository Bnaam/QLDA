<?php
require  'db.php';

if(count($_POST) > 0)
{
	$txt_soluongsp = $_POST["txt_soluongsp"];
	$txt_Gia =$_POST["txt_Gia"];

	$tongtien = $txt_soluongsp*$txt_Gia;
	echo $tongtien;
}
?>
