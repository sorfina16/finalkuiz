<html>
<head>
	<title> LAPORAN PILIHAN </title>
</head>

<link rel="stylesheet" href="borang.css">
<link rel="stylesheet" href="button.css">
<style type="text/css">
		body{
	background-image: url(paper.jpg);
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
	</style>
<body>

	<h3 class="panjang"> PILIHAN JENIS LAPORAN </h3>
	<form class="panjang" action="laporan_cetak.php" method="post">

		<select id='pilihan' name='pilihan' onchange="papar_pilihan()">
			<option value="1"> Semua Kelas dan Peratus </option>
			<option value="2"> Mengikut Kelas </option>
			<option value="3"> Mengikut Peratus </option>
			<option value="4"> Mengikut Kelas dan Peratus </option>
		</select><br>

		<div id="kelas">
			<select name="idkelas">
				<?php
					include("sambungan.php");
					$sql = "select * from kelas";
					$data = mysqli_query($sambungan,$sql);
					while($kelas = mysqli_fetch_array($data)){
						echo "<option value = '$kelas[idkelas]'> $kelas[namakelas]</option> ";
					}
				?>
			</select>
		</div>

		<div id ="peratus">
			<select name="peratus">
				<option value = 80> Lebih 80 </option>
				<option value = 50> Lebih 50 </option>
				<option value=0 > Kurang 50  </option>	
			</select>
		</div>
		<button class="papar" type="submit" > Papar </button>
	 </form>
</body>
</html>