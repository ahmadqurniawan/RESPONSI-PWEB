<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Isi Data Pengiriman</title>
	<style type="text/css">
		body{
	margin: 0;
	padding: 0;
	font-family: Roboto;
	background-repeat: no-repeat;
	background-size: cover;
	background: linear-gradient(#2bc0e4, #eaecc6);
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
	color: #ff886a;
	font-size: 30px;
}

.center form{
	padding: 0 30px;
	box-sizing: content-box;
}


form .txt_field{
	position: relative;
	border-bottom: 1px solid #adadad;
	margin: 20px 0 ;
}

.txt_field input{
	width: 100%;
	padding: 0 5px;
	height: 20px;
	font-size: 10px;
	border: none;
	background: none;
	outline: none;
}

.txt_field label{
	position: absolute;
	top: 50%;
	left: 5px;
	color:#adadad;
	transform: translatey(-50%);
	font-size: 10px;
	pointer-events: none;
}

.txt_field span::before{
	content: '';
	position: absolute;
	top: 40px;
	left: 0;
	width: 0px;
	height: 2px;
	transition: .5s;
}


.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
	top: -5px;
	color: #2691d9;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
	width: 100%;
}

.pass{
	margin: -5px 0 20px 5px;
	color: #a6a6a6;
	cursor: pointer;
}

.pass:hover{
	text-decoration: underline;
}

input[type="submit"]{
	width: 100%;
	height: 40px;
	border: 1px solid;
	border-radius: 25px;
	font-size: 10px;
	font-weight: 700;
	cursor: pointer;
	color: #ff886a;
}

input[type="submit"]:hover{
	background: #ff886a;
	color: #e9f4fb;
	transition: .2s;
}

input[type="reset"]{
	width: 100%;
	height: 40px;
	border: 1px solid;
	border-radius: 25px;
	font-size: 10px;
	font-weight: 700;
	cursor: pointer;
	color: #ff886a;
}

input[type="reset"]:hover{
	background: #ff886a;
	color: #e9f4fb;
	transition: .2s;
}
.signup_link{
	margin: 30px 0;
	text-align: center;
	font-size: 10px;
	color: #666666;
}

.cek a{
	font-size: 10px;
	color: #ff886a;
	text-decoration: none;
}

.HomeAbout{
	width: 200vw;
	height: 50vh;
}

	</style>
</head>
<body>
	<div class="container">
		<div class="center">
			<h1>Jasa Kiriman Paket</h1>
			<form method="POST" action="pro.php" name="fform">
				<div class="txt_field">
					<input type="text" name="inama" id="nama" required>
					<span></span>
					<label>Nama</label>
				</div>
				<div class="txt_field">
					<input type="text" name="ijarak" id="Jarak" required>
					<span></span>
					<label>Jarak</label>
				</div>
				<div class="txt_field">
					<input type="text" name="ojarak" id="Jarak" required>
					<span></span>
					<label>Jarak Tempuh</label>
				</div>
				<div class="txt_field">
					<input type="text" name="ototal" id="Total" required>
					<span></span>
					<label>Total Pembayaran</label>
				</div>
				<input type="submit" name="submit" value="Hitung" onclick="hitungtotal()">
				<INPUT TYPE="reset" value="Ulang">
				<div class="Signup_link">
				</div>
				<div class="cek" align="center"><a href="lihat.php">::Cek Data Pengiriman::</a></div>
			</form>
		</div>
	</div>
	<script language="JavaScript">

        function hitungtotal(){
        var nama = (document.fform.inama.value);
        var jarak =parseFloat(document.fform.ijarak.value);
        var ongkir= 0.0;
        ongkir = 5000;
        var total =0.0; 
        total = jarak*ongkir;
        document.fform.ojarak.value=eval(jarak);
        document.fform.ototal.value=eval(total);
    }
</script>

</body>
</html>