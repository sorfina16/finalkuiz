<?php
	include("sambungan.php");

	$idpelajar = $_POST["idpelajar"];

	$sql = "delete from pelajar where idpelajar='$idpelajar'; ";
	$result = mysqli_query($sambungan,$sql);
	if($result==true)
		echo "<script> alert('Berjaya Padam Rekod Pelajar Baharu')</script>";
	else
		echo " tidak berjaya padam ";

?>