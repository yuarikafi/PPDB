<?php
include ('../../koneksi.php');

$noPendaftaran = $_POST['no_pendaftaran'];
$query_check = "SELECT COUNT (*) as count FROM data_bayar WHERE no_pendaftaran = '$noPendaftaran'";
$result_check = mysqli_query($koneksi,$query_check);
$row_check = mysqli_fetch_assoc($result_check);
$count = $row_check['count'];

if ($count > 0) {
    echo "<script>alert('Pembayaran Sudah Pernah Dilakikan'); window.location.href ='../../transaksi.php';</script>";
} else {
    $namaSiswa = $_POST['nama_siswa'];
    $tanggal = $_POST['tanggal'];
    $asal = $_POST['asal_sekolah'];
    $gel = $_POST['gelombang'];
    $nominal = $_POST['nominal'];
    $bayar = $_POST['bayar'];
    $kembali = $_POST['kembalian'];
    $sisa = $_POST['sisa'];
    $keterangan = $_POST['keterangan'];
    
    $query = "INSERT INTO data_bayar (no_pendaftaran, tanggal, nama_siswa, asal_sekolah, gelombang, jumlah, bayar, kembalian, sisa, keterangan) 
                VALUES ('$noPendaftaran', '$tanggal', '$namaSiswa', '$asal', '$gel', '$nominal', '$bayar', '$kembali', '$sisa', '$keterangan')";

                if (mysqli_query($koneksi, $query)) {
                    header("location:../data_pembayaran.php");
                } else {
                    echo "ERROR: " . $query . "<br>" . mysqli_error($koneksi);
                }
}

mysqli_close($koneksi);
