<?php 
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi pagi di Patt'sCoffee.</title>
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Patt's Coffee.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar()?>#home">Beranda</a></li>
                    <li><a href="<?php echo url_dasar()?>#tentang_kami">Tentang Kami</a></li>
                    <li><a href="<?php echo url_dasar()?>#tutors">Menu</a></li>
                    <li><a href="<?php echo url_dasar()?>#partner">Partner</a></li>
                    <a href="login.php" class="tbl-biru">Login</a>
                    
                        <a href="pendaftaran.php" class="tbl-biru">Sign Up</a>
                    
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">