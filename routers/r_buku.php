<?php
include_once "../controllers/c_buku.php";
$buku = new c_buku();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $nama_buku = $_POST["nama_buku"];
    $jumlah_buku = $_POST["jumlah_buku"];
    $jenis_buku = $_POST["jenis_buku"];

    $buku->insert($id, $nama_buku, $jumlah_buku, $jenis_buku);

    if ($buku) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/v_buku.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $nama_buku = $_POST["nama_buku"];
    $jumlah_buku = $_POST["jumlah_buku"];
    $jenis_buku = $_POST["jenis_buku"];

 $buku->update($id, $nama_buku, $jumlah_buku, $jenis_buku);

    if ($buku) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/v_buku.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $buku->delete($id);
}
