<?php
include("sambungan.php");

$idtopik = $_POST["idtopik"];

$sql = "delete from topik where idtopik = '$idtopik'";
$result = mysqli_query($sambungan, $sql);
if ($result == true)
    echo " berjaya padam";
else
    echo "Ralat : $sql<br>".mysqli_error($sambungan);
?>