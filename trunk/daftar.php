<html>
<head> <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<title>Registrasi </title>
<div class="hero-unit">
  <h1><center>Registrasi </center></h1>
</div>
<body>
<blockquote class="pull-right">
	<p><a href="login.php"><center>Masuk</center></a></p>
</blockquote>
	<form method="POST" action="daftarcode.php">  
		<form class="form-horizontal">
			<div class="container-fluid">
				<label class="control-label" for="username">Username</label>
					<div class="controls">
						<input name="username" type="text" id="username" placeholder="Gunakan Alamat Email">
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="password">Password</label>
					<div class="controls">
						<input name="password" type="password" id="password" placeholder="Password">
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<label class="control-label" for="pilihan">Pilihan</label>
					<div class="controls">
						<div class="control-group">
						<select name="pilihan">
						<option value="Penerbit">Penerbit</option>
						<option value="Sekolah">Sekolah</option>
						</select>
					</div>
				</label>	
			</div>
			<div class="container-fluid">
				<input type="submit" class="btn btn-large btn-primary" name="button" value="Daftar">   
			</div>
		</form>
	</form>
</body>  
</html>