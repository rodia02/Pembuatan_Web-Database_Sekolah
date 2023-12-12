<?php

$title = 'Ubah Data';
include 'config/function.php'; 
include 'layout/header.php';

//mengambil nisn dari data yg dipilih
$nomor = (int)$_GET['nomor'];

$pendaftaran = select("SELECT * FROM pendaftaran WHERE nomor = $nomor")[0];

//cek apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
  if (update_data($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'pendaftaran.php';
           </script>";
  }

  else {
    echo "<script>
            alert('Data gagal diubah!');
            document.location.href = 'pendaftaran.php';
           </script>";
  }
}

?>

<style type=text/css>
    body {
        background-color: #D3D3D3;
    }
</style>

<div class="container mt-4">
  <h3>Ubah Data <?= $pendaftaran['nama'] ?></h3>

  <form action="" method="post">
  <div class="row mt-4" style="border: 1px solid grey;">
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <input type="hidden" name="nomor" value="<?= $pendaftaran['nomor']; ?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap </label>
                <input type="text" class="form-control" id="nama" name="nama" style="width: 60%" 
                value="<?= $pendaftaran['nama']; ?>" placeholder="NAMA PESERTA" required>

            </div>

            <div class="mb-3">
                <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                <input type="number" class="form-control" id="nisn" name="nisn" style="width:60%" 
                value="<?= $pendaftaran['nisn']; ?>" placeholder="NISN PESERTA"  required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" style="width: 60%" required>
                    <?php $jenis_kelamin = $pendaftaran['jenis_kelamin']; ?>
                    <option value="Perempuan" <?= $jenis_kelamin == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
                    <option value="Laki-laki" <?= $jenis_kelamin == 'Laki-laki' ? 'selected' : null ?>>Laki-laki</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" style="width: 60%" 
                value="<?= $pendaftaran['tanggal_lahir']; ?>" required>
            </div>

        </div>
            
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Sesuai KK</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="2" style="width: 60%" 
                placeholder="ALAMAT" required><?= $pendaftaran['alamat']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail Orangtua (Ayah/Ibu)</label>
                <input type="text" class="form-control" id="email" name="email" style="width: 60%;" 
                value="<?= $pendaftaran['email']; ?>" placeholder="contoh: abc@gmail.com"  required>
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No HP Aktif (No WA)</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" style="width: 40%;" 
                value="<?= $pendaftaran['no_telp']; ?>"placeholder="contoh: 081xxxxxxxxx"  required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" style="width: 60%" required>
                    <?php $status = $pendaftaran['status']; ?>
                    <option value="BELUM TERVERIFIKASI" <?= $status == 'BELUM TERVERIFIKASI' ? 'selected' : null ?>>Belum Terverifikasi</option>
                    <option value="TERVERIFIKASI" <?= $status == 'TERVERIFIKASI' ? 'selected' : null ?>>Terverifikasi</option>
                </select>
            </div>
        </div>
  </div>

    <button type="submit" name="ubah" class="btn btn-success mt-4" style="float: left;">
        <i class="fa-solid fa-pen-to-square"></i> Ubah
    </button>
    <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4" style="margin-left: 4pt">
      <i class="fa-solid fa-circle-arrow-left"></i> Kembali
    </a>

  </form>
</div>
  
<?php include 'layout/footer.php'; ?>