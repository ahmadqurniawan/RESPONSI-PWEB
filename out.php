<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lihat</title>
    <style type="text/css">
        body{
    margin: 0;
    padding: 0;
    font-family: Roboto;
    background-repeat: no-repeat;
    background-size: cover;
    background: linear-gradient(#ea52f8, #0066ff);
    height: 100vh;
    overflow: hidden;
    font-size: 15px;
}


.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-55%, -55%);
    width: 70vh;
    background: white;
    border-radius: 10px;
}
.center h1{
    text-align: center;
    padding: 0 0 10px 0;
    border-bottom: 1px solid silver;
    color: black;
    font-size: 20px;
}
    </style>
</head>
<body>
    <div class="center">
        <h1>Data Pengiriman Paket</h1>
        <?php 
$fp = fopen("guestbook.txt", "r");

echo "<table border='0' align='center'>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>Nama </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Jarak </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Jarak Tempuh </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Total Bayar </td><td>: $pisah[3] </td></tr>";
}
echo "</table>";
echo "<br>";
echo "<a href='index.php'><center>Isi Data Pengiriman</center></a>";

?>

    </div>

</body>
</html>