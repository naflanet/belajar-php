<?php

// 1. Buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","seal_fakultas");

// 2. Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}else{
    echo 'koneksi berhasil';
}

// 3 buat query baca semua data dari table
$sql = "SELECT * FROM mahasiswa";

// 4. tampilkan data, cek apakah query bisa dijalankan
if ($result = mysqli_query($con, $sql)) {
    // tampilkan satu per satu
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>".$row['nama'];
    }

    mysqli_free_result($result);
  }

// 5. tutup koneksi
mysqli_close($con);
?>