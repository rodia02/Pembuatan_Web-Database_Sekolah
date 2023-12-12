<?php

$title = 'Pendaftaran';
include 'layout/header.php';
include 'config/function.php';
$data_murid = select("SELECT * FROM pendaftaran ORDER BY nomor");

?>

<style type=text/css>
    body {
        background-color: #D3D3D3;
    }
</style>

<div class="container mt-4">
    <h2>Pendaftaran Murid Baru SDN 043950</h2>
    <div>
        <a href="form-pendaftaran.php">
            <button type="button" class="btn btn-dark mt-2 mb-4"
            style="float: left; font-family: 'Quicksand';">Formulir Pendaftaran</button>
        </a>
        <br><br><br>
    </div>

    <table class="table table-hover" id="tabel-pendaftaran">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Status</th>
                <?php if (isset($_SESSION['status_login'])) : ?>
                <th>Aksi</th>
                <?php endif; ?>
            </tr>  
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php foreach($data_murid as $pendaftaran) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pendaftaran['nama']; ?></td>
                <td><?= $pendaftaran['nisn']; ?></td>
                <td><?= $pendaftaran['status']; ?></td>
                <?php if (isset($_SESSION['status_login'])) : ?>
                <td style="width:30%;">
                    <a href="detail-data.php?nomor=<?= $pendaftaran['nomor'];?>" class="btn btn-dark">
                        <i class="fa-solid fa-magnifying-glass"></i> Detail
                    </a>
                    <a href="ubah-data.php?nomor=<?= $pendaftaran['nomor'];?>" class="btn btn-success">
                        <i class="fa-solid fa-pen-to-square"></i> Ubah
                    </a>
                    <a href="hapus-data.php?nomor=<?= $pendaftaran['nomor'];?>" class="btn btn-danger" 
                        onclick="return confirm('Apakah ingin menghapus data ini?');">
                        <i class="fa-solid fa-trash"></i> Hapus
                    </a>
                </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
</div>

<?php

include 'layout/footer.php'

?>
