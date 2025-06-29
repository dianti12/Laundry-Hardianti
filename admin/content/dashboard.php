<?php
// getting account username
$idDashboard = $_SESSION['id'];
$queryDashboard = mysqli_query($config, "SELECT * FROM user WHERE id = '$idDashboard'");
$rowDashboard = mysqli_fetch_array($queryDashboard);

// menghitung data pelanggan
$dataPelanggan = mysqli_query($config, "SELECT * FROM customer");
$jmlDataPelanggan = mysqli_num_rows($dataPelanggan);


$dataUser = mysqli_query($config, "SELECT * FROM user");
$jmlDataUser = mysqli_num_rows($dataUser);


$dataTr = mysqli_query($config, "SELECT * FROM trans_order");
$jmlDataTr = mysqli_num_rows($dataTr);

?>

<style>
    .card {
        min-height: 600px;
        /* width: 500px; */
    }
</style>

<div class="card">
    <div class="card-header">
        <h3>Dashboard</h3>
    </div>
    <div class="card-body d-flex align-items-center justify-content-center gap-3">
        <div class="row">
            <div class="col-sm-12" align="center">
                <h2>Selamat Datang , <?= $rowDashboard['username'] ?> Orang sukses</h2>
            </div>


        </div>
    </div>

    <!-- Ringkasan Dashboard - Versi Ringkas -->
    <div class="row">
        <div class="col-sm-3 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle bg-light-subtle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-users text-primary fs-4"></i>
                    </div>
                    <h2 class="fw-bold mb-1"><?= $jmlDataPelanggan; ?></h2>
                    <h5 class="card-title text-muted fw-normal mb-3">Data Pelanggan</h5>
                    <a href="?page=pelanggan" class="btn btn-primary w-100">More Info</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle bg-light-subtle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-user text-primary fs-4"></i>
                    </div>
                    <h2 class="fw-bold mb-1"><?= $jmlDataUser; ?></h2>
                    <h5 class="card-title text-muted fw-normal mb-3">Data User</h5>
                    <a href="?page=users" class="btn btn-primary w-100">More Info</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle bg-light-subtle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-shopping-basket text-primary fs-4"></i>
                    </div>
                    <h2 class="fw-bold mb-1"><?= $jmlDataTr; ?></h2>
                    <h5 class="card-title text-muted fw-normal mb-3">Transaksi Laundry</h5>
                    <a href="?page=laundry" class="btn btn-primary w-100">More Info</a>
                </div>
            </div>
        </div>

        <div class="col-sm-3 mb-4">
            <div class="card text-center h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="rounded-circle bg-light-subtle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fas fa-rocket text-primary fs-4"></i>
                    </div>
                    <!-- <h2 class="fw-bold mb-1"><?= $jmlpengeluaran; ?></h2> -->
                    <h5 class="card-title text-muted fw-normal mb-3">Data Pengeluaran</h5>
                    <a href="?page=pengeluaran" class="btn btn-primary w-100">More Info</a>
                </div>
            </div>
        </div>
    </div>