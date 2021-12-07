<?php 

include("sambungan.php");

$idguru = $_POST["idguru"];
$namaguru = $_POST["namaguru"];
$password = $_POST["password"];

$sql = "update guru set namaguru = '$namaguru',  password = '$password' where idguru =  '$idguru'; ";
$result = mysqli_query($sambungan,$sql);
if($result == true)
	echo "<script> alert(' Berjaya kemaskini Rekod Guru Baharu')</script>";
else 
	echo " tidak berjaya kemaskini ";

?>