<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040117",
		"nama" => "Fikri Ardiansyah",
		"email" => "fkryadr@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "fikry.jpeg"
	],
	[
		"nama" => "pepe forg", 
		"nrp" => "203040500",
		"email" => "pepeprog@gmail.com",
		"jurusan" => "Fakultas Hacker",
		"gambar" => "pepe.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>