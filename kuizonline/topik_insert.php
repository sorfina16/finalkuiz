<?php
include("sambungan.php");

$idtopik = $_POST["idtopik"];
$namatopik = $_POST["namatopik"];

$sql = "insert into topik values ('$idtopik', '$namatopik')";

$result = mysqli_query($sambungan, $sql);
if ($result == true)
    echo " berjaya";
else
    echo "Ralat : $sql<br>".mysqli_error($sambungan);
?>