<?php
include ('sambungan.php');
?>

<link rel="stylesheet" href="senarai.css">
<table>
<caption>SENARAI TOPIK</caption>
    <tr>
    <th>ID</th>
    <th>Nama Topik</th>
    </tr>

    <?php
      $sql = 'select * from topik';
      $result = mysqli_query($sambungan, $sql);
      while($topik = mysqli_fetch_array($result)) {
       echo '<tr> <td>'.$topik["idtopik"].'</td>
             <td>'.$topik["namatopik"].'</td>
           </tr>';
    }
?>
</table>