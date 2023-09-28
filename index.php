<?php include_once("inc_header.php")?>
        <!-- untuk home -->
        <section id="beranda">
            <img src="<?php echo ambil_gambar('2')?>"/>
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('2') ?></p>
                <h2><?php echo ambil_judul('2') ?></h2>
                <?php echo maximum_kata( ambil_isi('2'),12) ?>  
                <p><a href="<?php echo buat_link_halaman('2')?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>  
            </div>
        </section>

        <!-- untuk courses -->
        <section id="tentang_kami">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('8') ?></p>
                <h2><?php echo ambil_judul('8') ?></h2>
                <?php echo maximum_kata( ambil_isi('8'),22) ?> 
                <p>"Ingin tahu tentang Kopi?"
                <p><a href="<?php echo buat_link_halaman('8')?>" class="tbl-pink">Klik disini</a></p>
            </div>
            <img src="<?php echo ambil_gambar('8')?>"/>
        </section>
    

        <!-- untuk produk -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Produk Unggulan</p>
                    <h2>Menu</h2>
    

                    <div class="tutors-list">
                    <?php
                    $sql1 = "select * from tutors order by id desc";
                    $q1 = mysqli_query($koneksi,$sql1);
                    while($r1 = mysqli_fetch_array($q1)){
                     ?>   
                     <div class="kartu-tutor">
                        <a href= "<?php echo buat_link_tutors($r1['id'])?>">
                        <img src="<?php echo url_dasar()."/gambar/".tutors_foto($r1['id'])?>"/>
                        <p><?php echo $r1['nama']?></p>
                    </div>
                    <?php
                    }
                    
                    ?>
                    
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partner">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Dukungan</p>
                    <h2>Partner</h2>
                    <p>Terima kasih untuk support dan dukungan serta kerja sama dari setiap pihak.</p>
                </div>

                <div class="partner-list">
                    <?php
                    $sql1 = "select * from partner order by id desc";
                    $q1 = mysqli_query($koneksi,$sql1);
                    while($r1 = mysqli_fetch_array($q1)){
                     ?>   
                     <div class="kartu-partner">
                        <a href= "<?php echo buat_link_partner($r1['id'])?>">
                        <img src="<?php echo url_dasar()."/gambar/".partner_foto($r1['id'])?>"/>
                        <p><?php echo $r1['nama']?></p>
                    </div>
                    <?php
                    }
                    
                    ?>
                    
                </div>
            </div>
        </section>
        <?php include_once("inc_footer.php")?>