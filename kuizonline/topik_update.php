<?php
include("sambungan.php");

$idtopik = $_POST["idtopik"];
$namatopik = $_POST["namatopik"];

$sql = "update topik set namatopik = '$namatopik' where idtopik = '$idtopik' ";
$result = mysqli_query($sambungan, $sql);
if ($result == true)
    echo " berjaya kemaskini";
else
    echo "Ralat : $sql<br>".mysqli_error($sambungan);
?>