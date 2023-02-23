<?php
//koneksi ke database
$host = "localhost"; //nama host database
$user = "root"; //nama pengguna database
$password = ""; //kata sandi database
$dbname = "dbrestoran"; //nama database
$count = 0; //hitung naik

//koneksi ke database
$conn = mysqli_connect($host, $user, $password, $dbname);

//memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

//query untuk mengambil data dari tabel
$sql = "SELECT * FROM tblkategori";

//mengeksekusi query dan menyimpan hasilnya ke dalam variabel $result
$result = mysqli_query($conn, $sql);

//menampilkan data dalam tabel HTML
if (mysqli_num_rows($result) > 0) {
    echo "<table border = 1>";
    echo "<tr><th>Nomor</th><th>ID Kategori</th><th>Kategori</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        
        <td>".($count = $count + 1)."</td>. <td>" . $row["idkategori"]. "</td><td>" . $row["kategori"]. "</td>
        
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 hasil";
}

//menutup koneksi
mysqli_close($conn);
?>
