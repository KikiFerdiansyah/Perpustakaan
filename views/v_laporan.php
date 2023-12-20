<?php include "../controllers/c_login.php";

$halaman = "tabel";

$data = $_SESSION['data'];
$nama = $_SESSION['nama'] = $data['nama'];
$role = $_SESSION['role'] = $data['role'];
include_once "template/header.php";
include_once "../controllers/c_peminjaman.php";
$baru = new c_peminjaman();
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->

            <!-- Sidebar Toggle (Topbar) -->
            

            <!-- Topbar Search -->
            

            <!-- Topbar Navbar -->

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                

                <!-- Nav Item - Alerts -->
                
        <!-- </nav> -->
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">Generate Laporan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anggota</th>
                                    <th>Jumlah Buku</th>
                                    <th>Tgl Peminjaman </th>
                                    <th>Tgl Pengembalian</th>
                                </tr>
                            </thead>
                            <?php $i = 1; ?>
                            <?php foreach ($baru->read() as $read) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $read->nama_anggota ?></td>
                                        <td><?= $read->jumlah_buku?></td>
                                        <td><?= $read->tgl_peminjaman?></td>
                                        <td><?= $read->tgl_pengembalian?></td>
                                                                        
                                    <?php $i++; ?>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->

<script>
    window.print();
</script>

<!-- Logout Modal-->


<?php include_once "template/footer.php" ?>