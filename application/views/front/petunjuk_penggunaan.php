<div class="container">
<div class="col-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          
		  <div class="card-header">
		  <i class="fas fa-fw fa-info-circle mr-1"></i>Petunjuk Penggunaan
		  </div>
		  
		  <div class="card-body">
		  <p class="card-text text-center">
		  <i class="fas fa-fw fa-info-circle" style="font-size:60px;"></i>
		  </p>
		  
		  <?php foreach ($petunjuk as $p): ?>
		  
		  <p class="card-text">
		  Secara sederhana data mining adalah penambangan atau penemuan informasi baru dengan mencari pola atau aturan tertentu dari sejumlah data yang sangat besar. Data mining juga disebut sebagai serangkaian proses untuk menggali nilai tambah berupa pengetahuan yang selama ini tidak diketahui secara manual dari suatu kumpulan data. Data mining, sering juga disebut sebagai knowledge discovery in database (KDD). KDD adalah kegiatan yang meliputi pengumpulan, pemakaian data, historis untuk menemukan keteraturan, pola atau hubungan dalam set data berukuran besar.
		  <br /><br />
              <?php echo $p['sub'] ?>
		</p>
            <?php endforeach ?>
		  </div>
		</div>
</div>
</div>