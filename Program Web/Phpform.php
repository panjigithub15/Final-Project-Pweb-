<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<title>Selamat Datang-Web Panji</title>
	<script src="script2"></script>

</head>
<body background="kucing.jpg">
<div class="header">
	<h2>Welcome Aboard</h2>

	<ul class="menu">
		<a href="layout.html">Home</a>
		<a href="https://www.instagram.com/panjiprstyow/">Profil Admin</a>
		<a href="Phpform.php">Input Data</a>
	</ul>
</div>
<div class="form">			
				<table align="center">		
  			<form  action="" method="post" enctype="multipart/form-data">
   						<tr>
							   <td>Nama</td> 
							   <td>:</td>
								<td><input type="text" name="Nama" placeholder="Masukkan Nama Anda"></td>
						</tr>
						
						<tr>
								<td>Tanggal Lahir</td>
								<td>:</td> 
								<td><input type="date" name="Tanggal Lahir"></td>
						</tr>

						<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
    						<td>
								<input style="color: white" type="radio" name="gender">Laki-Laki <br>
								<input style="color: white" type="radio" name="gender">Perempuan</td>
						</tr>
						
						<tr>
								<td>Pilih Hobi</td>
								<td>:</td>
							<td>			
   								<select>
        							<option value="Musik">Musik</option>
        							<option value="Buku">Buku</option>
        							<option value="Travelling">Traveling</option>
        							<option value="Food">Food</option>
        							<option value="Olahraga">Olahraga</option>
								</select>
							</td>	
						</tr>

						<tr>
								<td>Alamat</td>
								<td>:</td> 
							<td>	
								<input type="text" name="Alamat" placeholder="Masukkan Alamat Anda"></td>
						</tr>

						<tr>
								<td>Email</td>
								<td>:</td>
							<td> 
								<input type="text" name="Email"></td>
						</tr>

						<tr>
							<td>
								<input type="reset" name="Reset">
								<input type="submit" name="Submit"></td>
								
                        </tr>
                        
                        <tr>
                            <td>
                            <a href = "index.php">Lihat Data</a></td>
                        </tr>

			</form>
				</table>
			</div>0

<div class="footer">
	<p style="color: white"> &copy Panji Prasetyo Waluyo 2019 </p>
</div>


</body>
</html>