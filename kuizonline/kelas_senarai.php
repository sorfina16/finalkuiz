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
<?php
	include('sambungan.php');
?>

<link rel = "stylesheet" href="senarai.css">
<table>
	<caption> SENARAI KELAS </caption>
	<tr> 
		<th> ID </th>
		<th> NAMA </th>
	</tr>
	<?php
		$sql = ' select * from kelas';
		$result = mysqli_query($sambungan,$sql);
		while($kelas=mysqli_fetch_array($result)){
			echo '<tr><td>'.$kelas["idkelas"].'</td>
					  <td>'.$kelas["namakelas"].'</td>
				  </tr>';
		}
	?>
</table>