<?php

echo "Masukkan nama mahasiswa: ";
$nama = readline(); // tipe data string

echo "Masukkan nilai Tugas: ";
$tugas = (float) readline(); // tipe data float (double di PHP)

echo "Masukkan nilai UTS: ";
$uts = (float) readline();

echo "Masukkan nilai UAS: ";
$uas = (float) readline();



$nilaiAkhir = ($tugas * 0.3) + ($uts * 0.3) + ($uas * 0.4); // operator * dan +
$lulus = $nilaiAkhir >= 60; // operator perbandingan >=



echo "\n=== HASIL PENILAIAN MAHASISWA ===\n";
echo "Nama: $nama\n";
echo "Nilai Tugas: $tugas\n";
echo "Nilai UTS: $uts\n";
echo "Nilai UAS: $uas\n";
echo "Nilai Akhir: $nilaiAkhir\n";

if ($lulus) {
    echo "Status: Lulus Mas Bro\n";
} else {
    echo "Status: Tidak Lulus Mas Bro\n";
}



echo "\nDaftar percobaan pengambilan mata kuliah:\n";
for ($i = 1; $i <= 7; $i++) {
    echo "Percobaan ke-$i\n";
}



echo "\nTetap Menyerah dan jangan semangat, $nama!\n";
?>
