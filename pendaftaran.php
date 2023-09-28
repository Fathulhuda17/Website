<?php include("inc_header.php")?>


<h3>Pendaftaran</h3>
<?php 
$email          = "";
$nama_lengkap   = "";
$err            = "";
$sukses         = "";

if(isset($_POST['simpan'])){
    $email                  = $_POST['email'];
    $nama_lengkap           = $_POST['nama_lengkap'];
    $password               = $_POST['password'];
    $konfirmasi_password    = $_POST['konfirmasi_password'];

    if($email == '' or $nama_lengkap == '' or $konfirmasi_password =='' or $password == ''){
        $err .= "<li>Silakan masukkan semua isian.</li>";
    }

    if($email != ''){
        $sql1   = "select email from members where email = '$email'";
        $q1     = mysqli_query($koneksi,$sql1);
        $n1     = mysqli_num_rows($q1);
        if($n1 > 0){
            $err .= "<li>Email yang kamu masukkan sudah terdaftar.</li>";
        }

        //validasi email
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $err .= "<li>Email yang kamu masukkan tidak valid.</li>";
        }
    }
    if($password != $konfirmasi_password){
        $err .= "<li>Password dan Konfirmasi Password tidak sesuai.</li>";
    }
    if(strlen($password) < 6){
        $err .= "<li>Panjang karakter yang diizinkan untuk password paling tidak 6 karakter.</li>";
    }
    

}

  
 
?>
<?php if($err) {echo "<div class='error'><ul>$err</ul></div>";} ?>
<?php if($sukses) {echo "<div class='sukses'>$sukses</div>";} ?>

<form action="" method="POST">
<table>
    <tr>
        <td class="label">Email</td>
        <td>
            <input type="text" name="email" class="input" value="<?php echo $email?>"/>
        </td>
    </tr>
    <tr>
        <td class="label">Nama Lengkap</td>
        <td>
            <input type="text" name="nama_lengkap" class="input" value="<?php echo $nama_lengkap?>"/>
        </td>
    </tr>
    <tr>
        <td class="label">Password</td>
        <td>
            <input type="password" name="password" class="input" />
        </td>
    </tr>
    <tr>
        <td class="label">Konfirmasi Password</td>
        <td>
            <input type="password" name="konfirmasi_password" class="input" />
            <br/>
            Sudah punya akun? Silakan <a href='<?php echo url_dasar()?>/login.php'>Login</a>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="simpan" value="simpan" class="tbl-biru"/>
        </td>
    </tr>
</table>
</form>
<?php include("inc_footer.php") ?>

