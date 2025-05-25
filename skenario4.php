<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas LKPD PHP Dasar 2</title>
</head>
<body>
    <h2>Anggota Kelompok :</h2>
    <p>Azka Azkiya (06)</p>
    <p>Chikal Adillya Prameswari (07)</p>
</body>
</html>

<?php
echo "<h3>Kasus 1</h3>";
// Array untuk hari
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

// Array untuk tanggal
$tanggal = range(1, 31); // Menggunakan range untuk membuat array dari 1 sampai 31

// Array untuk bulan
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];

// Array untuk tahun
$tahun = [2024, 2025, 2026];

// Menampilkan hari menggunakan for
echo "Hari:\n";
for ($i = 0; $i < count($hari); $i++) {
    echo $hari[$i] . "\n";
}

// Menampilkan tanggal menggunakan foreach
echo "\nTanggal:\n";
foreach ($tanggal as $tgl) {
    echo $tgl . "\n";
}

// Menampilkan bulan menggunakan while
echo "\nBulan:\n";
$i = 0;
while ($i < count($bulan)) {
    echo $bulan[$i] . "\n";
    $i++;
}

// Menampilkan tahun menggunakan do while
echo "\nTahun:\n";
$i = 0;
do {
    echo $tahun[$i] . "\n";
    $i++;
} while ($i < count($tahun));

// Pisah
echo "<h3>Kasus 2</h3>";
$anakAyam = range(30, 1);

foreach ($anakAyam as $jumlah) {
    if ($jumlah > 1) {
        echo "Anak ayam turun $jumlah, mati satu tinggal " . ($jumlah - 1) . "<br>";
    } else {
        echo "Anak ayam turun 1, mati satu tinggal induknya<br>";
    }
}

// Pisah
echo "<h3>Kasus 3</h3>";
// Mawar yang dimiliki Sholeh
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "Mawar yang dimiliki Sholeh: $mawar<br>";
}
echo "Jumlah Mawar yang dimiliki Sholeh: 12<br><br>";

// Mawar yang akan diberikan ke ibunya
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "Mawar yang diberikan ke ibunya: $mawar<br>";
}
echo "Jumlah Mawar yang diberikan ke ibunya: 3<br><br>";

// Pisah
echo "<h3>Kasus 4</h3>";
$playlist = [
    "galau" => ["Mesin Waktu - Budi Doremi"],
    "bersemangat" => ["Selamat Pagi - Ran"],
    "marah" => ["Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

$suasanaHati = ["galau", "bersemangat", "marah"];

foreach ($suasanaHati as $suasana) {
    echo "Jika sedang $suasana, Ambyar mendengarkan lagu: " . implode(", ", $playlist[$suasana]) . "<br>";
}

?>