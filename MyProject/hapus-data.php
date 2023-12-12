<?php

include 'config/function.php';

//menerima nomor yang dipilih administrator
$nomor = (int)$_GET['nomor'];

if (delete_data($nomor) > 0) {
    echo "<script> 
            alert('Data berhasil dihapus!');
            document.location.href = 'pendaftaran.php';
          </script>";
}

else {
    echo "<script> 
            alert('Data gagal dihapus!');
            document.location.href = 'pendaftaran.php';
          </script>";
}

?>