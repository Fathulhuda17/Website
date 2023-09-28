<?php
session_start();

unset($_SESSION['members_nama_lengkap']);
session_destroy();
header("location:pendaftaran.php");
?>