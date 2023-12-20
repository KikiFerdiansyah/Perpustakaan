<?php
include_once "c_koneksi.php";
class c_peminjaman
{
    public function insert($id, $nama_anggota, $jumlah_buku, $tgl_peminjaman, $tgl_pengembalian)
    {
        $conn = new c_koneksi();
        $query = "INSERT INTO peminjaman VALUES ('$id', '$nama_anggota','$jumlah_buku', '$tgl_peminjaman', '$tgl_pengembalian')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read()
    {
        $conn = new c_koneksi();
        // perintah mengambil semua data dari peminjaman dan mengurutkan sesuai data terbaru diatas
        $query = "SELECT * FROM peminjaman ORDER BY id DESC";
        $data = mysqli_query($conn->conn(), $query);

        // mengubah query data menjadi objek
        while ($row = mysqli_fetch_object($data)) {
            // array kosong untuk menampung data objek
            $rows[] = $row;
        }

        // mengembalikan nilai
        if(!empty($rows)) {
            return $rows;
        }
       
    }

    public function edit($id)
    {
        $conn = new c_koneksi();

        // perintah mengambil data dari barng berdasarkan id
        $query = "SELECT * FROM peminjaman WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $nama_anggota , $jumlah_buku, $tgl_peminjaman, $tgl_pengembalian)
    {
        $conn = new c_koneksi();
        // perintah untuk update data dari barang 
        $query = "UPDATE peminjaman SET nama_anggota ='$nama_anggota', jumlah_buku='$jumlah_buku', tgl_peminjaman='$tgl_peminjaman', tgl_pengembalian='$tgl_pengembalian' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function delete($id)
    {
        $conn = new c_koneksi();

        // perintah untuk menghapus data dari peminjaman berdasarkan id
        $query = "DELETE FROM peminjaman WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);

        header("Location: ../views/v_peminjaman.php");
    }
}
