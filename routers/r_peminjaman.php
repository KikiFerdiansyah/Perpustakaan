
<?php
include_once "../controllers/c_peminjaman.php";
$peminjaman = new c_peminjaman();

if ($_GET["aksi"] == "tambah") {
    $id = $_POST["id"];
    $nama_anggota = $_POST["nama_anggota"];
    $jumlah_buku = $_POST["jumlah_buku"];
    $tgl_peminjaman = $_POST["tgl_peminjaman"];
    $tgl_pengembalian = $_POST["tgl_pengembalian"];

    $peminjaman->insert($id, $nama_anggota, $jumlah_buku, $tgl_peminjaman, $tgl_pengembalian);

    if ($peminjaman) {
        echo "<script> alert('Data berhasil di tambahkan!');
        document.location.href = '../views/v_peminjaman.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "edit") {
    $id = $_POST["id"];
    $nama_anggota = $_POST["nama_anggota"];
    $jumlah_buku= $_POST["jumlah_buku"];
    $tgl_peminjaman = $_POST["tgl_peminjaman"];
    $tgl_pengembalian = $_POST["tgl_pengembalian"];
   
    $peminjaman->update($id, $nama_anggota, $jumlah_buku, $tgl_peminjaman, $tgl_pengembalian);

    if ($peminjaman) {
        echo "<script> alert('Data berhasil di ubah');
        document.location.href = '../views/v_peminjaman.php';
        </script>";
    }
} elseif ($_GET["aksi"] == "delete") {
    $id = $_GET["id"];
    $peminjaman->delete($id);
}
