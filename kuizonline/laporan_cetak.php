<html>
<link rel="stylesheet" href="senarai.css">
<head>
	<title> LAPORAN CETAK </title>
	<link rel = "stylesheet" href = "senarai.css">
<style>
	table{
		position: center;
	}
	body{
	background-image: url(paper.jpg);
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
</head>
<body>

	<table> 
		<tr>
			<th> Bil </th>
			<th> Nama </th>
			<th> Kelas </th>
			<th> Tarikh </th>
			<th> Peratus </th>
		</tr>

		<?php
			include("sambungan.php");

			//mengisytiharkan pemboleh ubah berdasarkan maklumat dari form 

			$pilihan= $_POST["pilihan"];
			$idkelas = $_POST["idkelas"];
			$peratus = $_POST["peratus"];
			//
			$sql = "select * from kuiz
					join pelajar on kuiz.idpelajar = pelajar.idpelajar
					join kelas on pelajar.idkelas = kelas.idkelas group by kuiz.idpelajar ";

			switch($pilihan){
				case 1 : $syarat = "";
					$tajuk = " PENCAPAIAN KESELURUHAN ";
					break;
				case 2 : $syarat = "having kelas.idkelas = '$idkelas' ";
					$tajuk = "PENCAPAIAN MENGIKUT KELAS ";
					break;
				case 3 : 
					if($peratus == 80){
						$syarat = "having peratus >= 80";
						$tajuk = " PENCAPAIAN LEBIH DARI 80%";
					}

					else if ($peratus == 50){
						$syarat = "having peratus >= 50";
						$tajuk = " PENCAPAIAN LEBIH DARI 50%";
					}

					else if ($peratus <= 50 ){
						$syarat = "having peratus < 50 ";
						$tajuk = " PENCAPAIAN KURANG DARI 50%";
					}
					break;

				case 4 :

					if($peratus == 80){
						$syarat = " having peratus >= 80 and kelas.idkelas ='".$idkelas."' ";
						$tajuk = " PENCAPAIAN MENGIKUT KELAS DAN LEBIH 80% ";
					}

					else if ($peratus == 50){
						$syarat = " having peratus >= 50 and kelas.idkelas ='".$idkelas."' ";
						$tajuk = " PENCAPAIAN MENGIKUT KELAS DAN LEBIH 50%";
					}

					else if ($peratus == 0){
						$syarat = " having peratus < 50 and kelas.idkelas ='".$idkelas."' ";
						$tajuk = " PENCAPAIAN MENGIKUT KELAS DAN KURANG 50%";
					}

					break;
							}
			$bil = 1;
			$sql = $sql.$syarat; 

			$data = mysqli_query($sambungan,$sql);
				while ($kuiz = mysqli_fetch_array($data)) {
					?>
					<tr>
						<td><?php echo $bil; ?></td>
						<td><?php echo $kuiz['namapelajar'];?> </td>
						<td><?php echo $kuiz['namakelas']; ?></td>
						<td><?php echo $kuiz['tarikh']; ?></td>
						<td><?php echo $kuiz['peratus']; ?> </td>
					</tr>
					<?php 
						$bil = $bil + 1;
				} 
				?>

				<caption><?php echo $tajuk ; ?></caption>
	</table>

	<button class="cetak" onclick="window.print()"> Cetak </button>

</body>
</html>