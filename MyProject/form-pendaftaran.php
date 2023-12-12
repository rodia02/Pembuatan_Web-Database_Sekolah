<?php

$title = 'Formulir Pendaftaran';
include 'layout/header.php';
include 'config/function.php';

//cek apakah tombol tambah ditekan
if (isset($_POST['daftar'])) {
    if (create_data($_POST) > 0) {
      echo "<script>
              alert('Pendaftaran berhasil!');
              document.location.href = 'pendaftaran.php';
             </script>";
    }
  
    else {
      echo "<script>
              alert('Pendaftaran gagal!');
              document.location.href = 'form-pendaftaran.php';
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
    <h3>Formulir Pendaftaran Murid TA 2022/2023</h3>

    <form action="" method="post">
    <div class="row mt-4" style="border: 1px solid grey;">
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap </label>
                <input type="text" class="form-control" id="nama" name="nama" style="width: 60%" placeholder="NAMA PESERTA" required>
            </div>

            <div class="mb-3">
                <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                <input type="number" class="form-control" id="nisn" name="nisn" style="width:60%" placeholder="NISN PESERTA"  required>
            </div>

            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" style="width: 60%" required>
                    <option selected value="">::Pilih Jenis Kelamin::</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-laki">Laki-laki</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input class="form-control" id="tanggal_lahir" name="tanggal_lahir" type="date" style="width: 60%" required>
            </div>

        </div>
            
        <div class="col-sm mt-3" style="padding: 30px 50px">
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Sesuai KK</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="2" style="width: 60%" placeholder="ALAMAT" required></textarea>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail Orangtua (Ayah/Ibu)</label>
                <input type="text" class="form-control" id="email" name="email" style="width: 60%;" 
                placeholder="contoh: abc@gmail.com"  required>
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No HP Aktif (No WA)</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp" style="width: 40%;" 
                placeholder="contoh: 081xxxxxxxxx"  required>
            </div>

        </div>
  </div>

    <button type="submit" name="daftar" class="btn btn-primary mt-4" 
    style="float: left; font-family: 'Quicksand'; color: white">
       Daftar
    </button>

    <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4" style="margin-left: 4pt">
       Kembali
    </a>


  </form>

</div>


<?php

include 'layout/footer.php';

?>