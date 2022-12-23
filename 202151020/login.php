<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaizen CyberSec</title>
</head>

<body>
    <h1>LOGIN</h1>
    <?php 
	if(isset($_GET['nim'])){
		if($_GET['nim'] == "kosong"){
			echo "<h4 style='color:red'>NIM Belum Di Masukkan !</h4>";
		}
	}
	?>
    <form action="ceklogin.php" method="POST">

        <fieldset>

            <p>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" placeholder="Nomor Induk Mahasiswa" />
            </p>
            <p>
                <label for="password">PASSWORD: </label>
                <input type="password" name="password" placeholder="Password" />
            </p>
            <p>
                Don't have account yet?
                <button><a href="signup.php"/> signup</button>
            </p>
            <p>
                <input type="submit" value="login" name="login" />
            </p>
            <p>
                <a href="loginadmin.php" class="btn btn-primary active" role="button">login as admin</a>
            </p>

        </fieldset>

    </form>
</body>

</html>