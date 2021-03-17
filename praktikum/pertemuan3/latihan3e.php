<?php
// Fikri Ardiansyah
// 203040117
// Shift Kamis 08

?>

<?php
$produk = array(
    [
        "img" => "img/1.png",
        "name" => "RDP Windows",
        "description" => "Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan      German. , Bisa Pilih OS sendiri. <br> NOTE: Kami tidak mengajarkan penggunaan RDP",
        "price" => 70000,
        "category" => "RDP WINDOWS",
        "capacity" => "2GB RAM, 2 Core CPU, 60GB SSD"
    ],
    [
        "img" => "img/1.png",
        "name" => "RDP Windows",
        "description" => "Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan German. , Bisa Pilih OS sendiri. <br> NOTE: Kami tidak mengajarkan penggunaan RDP",
        "price" => 120000,
        "category" => "RDP WINDOWS",
        "capacity" => "4GB RAM, 2 Core CPU, 80GB SSD"
    ],
    [
        "img" => "img/1.png",
        "name" => "RDP Windows",
        "description" => "Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan German. , Bisa Pilih OS sendiri. <br> NOTE: Kami tidak mengajarkan penggunaan RDP",
        "price" => 240000,
        "category" => "RDP WINDOWS",
        "capacity" => "8GB RAM, 4 Core CPU, 160 GB SSD"
    ],
    [
        "img" => "img/1.png",
        "name" => "RDP Windows",
        "description" => "Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan German. , Bisa Pilih OS sendiri. <br> NOTE: Kami tidak mengajarkan penggunaan RDP",
        "price" => 480000,
        "category" => "RDP WINDOWS",
        "capacity" => "16GB RAM, 8 Core CPU, 320GB SSD"
    ],
    [
        "img" => "img/1.png",
        "name" => "RDP Windows",
        "description" => "Aktif : 1 Bulan Payment Legal. Akan Mendapatkan Akses RDP Server tersedia Singapore, US, Russia, dan German. , Bisa Pilih OS sendiri. <br> NOTE: Kami tidak mengajarkan penggunaan RDP",
        "price" => 750000,
        "category" => "RDP WINDOWS",
        "capacity" => "32GB RAM, 8 Core CPU, 1TB SSD"
    ],
    [
        "img" => "img/2.png",
        "name" => "VPS Linux",
        "description" => "Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. <br>Note : Kami tidak mengajarkan penggunaan VPS.",
        "price" => 75000,
        "category" => "VPS LINUX",
        "capacity" => "Digital Ocean - 2 CPU - 2 GB RAM - 60 GB SSD (Per Minggu)"
    ],
    [
        "img" => "img/2.png",
        "name" => "VPS Linux",
        "description" => "Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. <br>Note : Kami tidak mengajarkan penggunaan VPS.",
        "price" => 100000,
        "category" => "VPS LINUX",
        "capacity" => "Digital Ocean - 2 CPU - 4 GB RAM - 80 GB SSD (Per Minggu)"
    ],
    [
        "img" => "img/2.png",
        "name" => "VPS Linux",
        "description" => "Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. <br>Note : Kami tidak mengajarkan penggunaan VPS.",
        "price" => 430000,
        "category" => "VPS LINUX",
        "capacity" => "Digital Ocean - 2 CPU - 4 GB RAM - 80 GB SSD (Per Bulan)"
    ],
    [
        "img" => "img/2.png",
        "name" => "VPS Linux",
        "description" => "Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. <br>Note : Kami tidak mengajarkan penggunaan VPS.",
        "price" => 750000,
        "category" => "VPS LINUX",
        "capacity" => "Digital Ocean - 4 CPU - 8 GB RAM - 160 GB SSD (Per Bulan)"
    ],
    [
        "img" => "img/2.png",
        "name" => "VPS Linux",
        "description" => "Masa Aktif : Sesuai Pilihan, Payment Legal, Akan Mendapatkan Akses VPS, Server & OS bisa request di menu checkout. <br>Note : Kami tidak mengajarkan penggunaan VPS.",
        "price" => 350000,
        "category" => "VPS LINUX",
        "capacity" => "Digital Ocean - 2 CPU - 2 GB RAM - 60 GB SSD (Per Bulan)"
    ]
);


$i = 1;
asort($produk);

function rupiah($harga)
{
    $hasil_harga = "Rp. " . number_format($harga, 2, ',', '.');
    return $hasil_harga;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Latihan3e</title>
</head>

<body>

    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>No</th>
                    <th></th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Capacity</th>
                    <th>Category</th>
                </tr>
            </thead>
            <?php foreach ($produk as $prod => $value) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><img src="<?= $value["img"]; ?>" alt="" class="img-tumbnail rounded" width="100px"></td>
                    <td><?= strtoupper($value["name"]); ?></td>
                    <td><?= $value["description"]; ?></td>
                    <td><?= rupiah($value["price"]); ?></td>
                    <td align="center">
                        <?php
                        $capac = $value["capacity"];
                        echo $capac, $capac == 1;
                        ?>
                    </td>
                    <td><?php
                        $c = $value["category"];
                        switch ($c) {
                            case "RDP WINDOWS":
                                echo "<span class='badge badge-info'>" . $value["category"] . "</span>";
                                break;

                            case "VPS LINUX":
                                echo "<span class='badge badge-success'>" . $value["category"] . "</span>";
                                break;
                        } ?>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>