<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			color: green;
			background-color: lightgrey;
		}
		.home{
			text-align: center;
			margin-top: 200px;
			color: whitesmoke;
		}
		.tombol{
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.tombol1{background-color:white;
		}

		.gs{
			border: 1px solid black;
			padding: 20px;
			position: absolute;
			top: 15%;
			left: 42%;
		}
		
	</style>
</head>
<body>
	<?php
$name = $no = $Paket = $Pembayaran = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $no = test_input($_POST["no"]);
  $Paket = test_input($_POST["Paket"]);
  $Pembayaran = test_input($_POST["Pembayaran"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="gs">
	<?php
echo "<h2>VALIDASI DATA:</h2>";
echo "Nama: ",$nama;
echo "<br>";
echo "No: ",$no;
echo "<br>";
echo "Paket: ",$Paket;
echo "<br>";
echo "Jenis Pembayaran: ",$Pembayaran;
echo "<br>";
?>
</div>
<div class="home">
	<?php
	$fp = fopen("data.txt", "a+");

	$nama = $_POST['nama'];
	$no = $_POST['no'];
	$Paket = $_POST['Paket'];
	$Pembayaran = $_POST['Pembayaran'];
	


	fputs($fp,"$nama|$no|$Paket|$Pembayaran\n");
	fclose($fp);

	echo "<h1>Terima Kasih Atas Pembeliannya</h1> <br>";
	?>
	<button class="tombol tombol1"><a align="center" href="tabel.php">Hasil rekap</a></button>

	
</div>
</body>
</html>