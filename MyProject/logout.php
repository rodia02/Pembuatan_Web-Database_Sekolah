<?php
session_start();

if (isset($_SESSION['status_login'])) {
    $_SESSION = []; //dikosongkan
    session_unset();
    session_destroy(); 

    echo "<script>
          alert('Berhasil logout!');
          document.location.href = 'javascript:window.history.go(-1)';
          </script>";
}


?>