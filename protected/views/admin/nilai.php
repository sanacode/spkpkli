<div id="page-wrapper">
  <div class="row">
    <form method="POST" action="">
        <div class="table-responsive">
          <h2>Input Nilai Mahasiswa</h2>
          <?php echo Yii::app()->user->getFlash('status'); ?>
          <table class="table table-bordered table-hover tablesorter">
            <thead>
              <tr>
                <th>NIM</th>
                <th>Dasar-Dasar Pemrograman</th>
                <th>Struktur Data</th>
                <th>PBO</th>
                <th>Pemrograman Web</th>
                <th>Rekayasa Perangkat Lunak</th>
                <th>Logika Dan Algoritma</th>
                <th>Komunikasi data</th>
                <th>Keamanan Jaringan</th>
                <th>Sistem terdistribusi</th>
                <th>Sistem Informasi</th>
                <th>Analisis dan Perancangan Sistem Informasi</th>
                <th>Manajemen Proyek Perangkat Lunak</th>
                <th>Desain Basis data</th>
                <th>Manajemen basis data</th>
                <th>Interaksi Manusia dengan komputer</th>
                <th>Grafika Komputer</th>
                <th>Pengolahan suara</th>
                <th>Rangkaian Digital</th>
                <th>Organisasi Komputer</th>
                <th>Sistem Informasi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($mahasiswa as $mhs): ?>
              <tr>
                <td><?php echo $mhs->NIM ?></td>
                <?php $matkul = Matakuliah::model()->findAll();
                      foreach($matkul as $mk){
                      $nilai = Nilai::model()->findByAttributes(array('NIM'=>$mhs->NIM, 'kode_mk'=>$mk->kode_mk));
                      if($nilai){  ?>
                          <td><input type="text" name="<?php echo $mhs->NIM; ?>[<?php echo $mk->kode_mk; ?>]" value="<?php echo $nilai->Nilai; ?>"></td>
                      <?php } else{ ?>
                          <td><input type="text" name="<?php echo $mhs->NIM; ?>[<?php echo $mk->kode_mk; ?>]"></td>
                      <?php }
                      } 
                ?>        
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <button type="submit" class="btn btn-primary">Kirim</button>
          <button type="reset" class="btn btn-danger">Batal</button>
        </form>
				</div>
      </div>
    </div>

