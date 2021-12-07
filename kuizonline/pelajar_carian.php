
 <?php
include('sambungan.php');
$idpelajar=$_POST["idpelajar"];
?>
<link rel = "stylesheet" href = "senarai.css">
<style>
	table{
		position: center;
	}
	body{
	background-image: url(wood.jpg);
	position: center;
}
iframe.header{
	width: 700px;
	height: 50px;
	border-radius: 10px 10px 0 0 ;
	float: left;
}

iframe.menu{
	clear: left;
	float: left;
	position: relative;
	border: none;
	border-radius: 0 0 0 15px;
	width: 170px;
	height: 500px;
}

iframe.kandungan{
	float: left;
	position:relative;
	border: none;
	border-radius: 0 0 10px 0;
	width: 530px;
	height: 500px;
}
caption{
	background-color: white;
}
</style> 
<body>
<table>
	<caption class="panjang" > SENARAI NAMA PELAJAR </caption>
	<tr>
		<th > ID </th>
		<th > Nama </th>
		<th > Kelas ID </th>
		<th > Password </th>
	</tr>

<?php
	 
	$sql = "select * from pelajar where idpelajar='$idpelajar';";
	$result = mysqli_query($sambungan,$sql);

	while($pelajar = mysqli_fetch_array($result)){
		echo '<tr> 
		<td>'.$pelajar["idpelajar"].'</td>
		<td>'.$pelajar["namapelajar"].'</td>
		<td>'.$pelajar["idkelas"].'</td>
		<td>'.$pelajar["password"].'</td>
		</tr>';
	}
?>
</table>
</body>
