<!DOCTYPE html>
<html>
<head>
    <title>REGISTRATION | Kaizen CyberSec</title>
</head>
<body>
    <header>
        <h3>REGISTRATION</h3>
    </header>
    <?php 
	if(isset($_GET['nim'])){
		if($_GET['nim'] == "kosong"){
			echo "<h4 style='color:red'>NIM Belum Di Masukkan !</h4>";
		}
	}else if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h4 style='color:red'>Nama Belum Di Masukkan !</h4>";
		}
	}else if(isset($_GET['nim'])){
		if($_GET['password'] == "kosong"){
			echo "<h4 style='color:red'>Password Belum Di Setting !</h4>";
		}
	}else if(isset($_GET['foto'])){
		if($_GET['foto'] == "kosong"){
			echo "<h4 style='color:red'>Mohon Upload Foto !</h4>";
		}
	}
	?>
    <form action="regisproses.php" method="POST">
        <fieldset>
        <p>
            <label for="nim">NIM: </label>
            <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" />
        </p>
        <p>
            <label for="nama">NAMA: </label>
            <input type="text" name="nama" placeholder="Nama" />
        </p>
        <p>
            <label for="password">PASSWORD: </label>
            <input type="password" name="password"placeholder= "Password" />
        </p>
        <p>
            <label for="foto">FOTO: </label>
            <input type="file" name="foto"/>
        </p>
<p>
    already have account?
    <button><a href="login.php"/> login</button>
</p>
        <p>
            <input type="submit" value="submit" name="submit" />
        </p>
        </fieldset>
    </form>
    </body>
</html>