
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADMIN</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <h1>LOGIN</h1>
    <?php 
	if(isset($_GET['username'])){
		if($_GET['username'] == "kosong"){
			echo "<h4 style='color:red'>Username Belum Di Masukkan !</h4>";
		}
	}
	?>
<form action="cekloginadmin.php" method="POST">

<fieldset>

<p>
    <label for="username">USERNAME: </label>
    <input type="text" name="username" placeholder="Username" />
</p>
<p>
    <label for="password">PASSWORD: </label>
    <input type="password" name="password"placeholder= "Password" />
</p>
<p>
    <input type="submit" value="login" name="login" />
</p>
<p>
    <a href="login.php" class="btn btn-primary active" role="button">back</a>
</p>
    </body>
</html>
