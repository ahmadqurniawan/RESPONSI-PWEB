<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cek Data Pengiriman</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			background-color: rgb(226, 156, 89);
		}
		.container{
			user-select: none;
			margin: 10% auto;
			background: #ff894f;
			color: #234546;
			border-radius: 10px;
			width: 50%;
			text-align: left;
			box-shadow: 0 25px 35px -5px rgba(0, 0, 0, .76);
		}


	</style>
</head>
<body>
	<div class="container">
		<h2 align="center"><marquee width="50%" height="10%"><br>Terima kasih atas kunjungan anda di website kami</marquee></h2>
		<?php 
$Nama = $_POST['inama'];
$Jarak = $_POST['ijarak'];
$Jarak_Tempuh= $_POST['ojarak'];
$Total_Bayar=$_POST['ototal'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$Nama|$Jarak|$Jarak_Tempuh|$Total_Bayar\n");
fclose($fp);

echo "<a href='index.php'><center>Isi Data Pengiriman</center></a><br>";
echo "<a href='out.php'><center>Cek Data Pengiriman</center></a><br>";

 ?>
	</div>

</body>
</html>