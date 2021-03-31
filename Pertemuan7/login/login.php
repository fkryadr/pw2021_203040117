<?php 

    // Fikri Ardiansyah - 203040117

// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ) {
	// cek username & password
	if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
	// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	} else {
	// jika salah, tampilkan pesan kesalahan
		$error = true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<h1>Login Admin</h1>

<?php if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">Username / Password Salah!</p>
<?php endif; ?>

<form action="" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" name="username" class="form-control" id="username">
    <div class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>