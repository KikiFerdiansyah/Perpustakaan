<?php
include_once "c_koneksi.php";
class c_buku
{
    public function insert($id, $nama_buku, $jumlah_buku, $jenis_buku)
    {
        $conn = new c_koneksi();
        $query = "INSERT INTO buku VALUES ('$id', '$nama_buku', '$jumlah_buku', '$jenis_buku')";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function read()
    {
        $conn = new c_koneksi();
        // perintah mengambil semua data dari buku dan mengurutkan sesuai data terbaru diatas
        $query = "SELECT * FROM buku ORDER BY id DESC";
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
        $query = "SELECT * FROM buku WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
        while ($row = mysqli_fetch_object($data)) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($id, $nama_buku, $jumlah_buku, $jenis_buku)
    {
        $conn = new c_koneksi();
        // perintah untuk update data dari buku 
        $query = "UPDATE buku SET nama_buku='$nama_buku', jumlah_buku='$jumlah_buku', jenis_buku='$jenis_buku' WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);
    }

    public function delete($id)
    {
        $conn = new c_koneksi();

        // perintah untuk menghapus data dari buku berdasarkan id
        $query = "DELETE FROM buku WHERE id = $id";
        $data = mysqli_query($conn->conn(), $query);

        header("Location: ../views/v_buku.php");
    }
}
