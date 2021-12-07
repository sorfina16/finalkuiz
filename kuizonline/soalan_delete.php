<?php
	include("sambungan.php");

	$idsoalan = $_POST['idsoalan'];

	$sql="delete from soalan where idsoalan='$idsoalan' ;";
	$result = mysqli_query($sambungan,$sql);

	if($result==true)
		echo "<script> alert(' Berjaya Padam Soalan')</script>";
	else
		echo " tidak berjaya padam";
?>