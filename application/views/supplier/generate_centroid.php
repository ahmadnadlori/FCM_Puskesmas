<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-trophy"></i> Data Nilai Akhir</h1>
			
				<a href="<?php echo base_url(); ?>supplier/generate_centroid"  class="btn btn-success">
                                <i class="fa fa-check"></i> Proses Nilai Akhir
                </a>
          </div>
		  
		  <div class="card shadow mb-4">
		  	<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-fw fa-trophy mr-1"></i>Data Nilai Centroid</h6>
            </div>
		  
		  
            <div class="card-body">
			<table class="table table-bordered" width="100%" cellspacing="0">
            <tbody>
			<tr><td>Centroid 1</td><td>Sangat Baik</td><td><?php echo $c1; ?></td></tr>
			<tr><td>Centroid 2</td><td>Baik</td><td><?php echo $c2; ?></td></tr>
            <tr><td>Centroid 3</td><td>Cukup</td><td><?php echo $c3; ?></td></tr>
            <tr><td>Centroid 4</td><td>Kurang</td><td><?php echo $c4; ?></td></tr>
            <tr><td>Centroid 5</td><td>Kurang Sekali</td><td><?php echo $c5; ?></td></tr>
			</tbody>
          </table>
		  
		  </div>
		  </div>
		  
		  
		  <div class="card shadow mb-4">
		  	<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-trophy mr-1"></i> Data Nilai Akhir</h6>
            </div>
		  
		  
          <div class="card-body">
		  <table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
			<tr align="center">
			<th>No Puskesmas</th>
			<th>Nama Puskesmas</th>
			<th>Jumlah Pasien</th>
			<th>Ketersediaan Obat</th>
			<th>Jumlah Fasilitas</th>
			<th>Rata-Rata</th>
			<th colspan="5">Distance</th>
			<th>Predikat</th>
			</tr>
            </thead>
			<tbody>
			<?php foreach($data_puskesmas->result_array() as $s){ ?>
            <tr>
			<td class="text-center"><?php echo $s['no_puskesmas']; ?></td>
			<td><?php echo $s['nama_puskesmas']; ?></td>
			<td class="text-center"><?php echo $s['jumlah_pasien_total']; ?></td>
			<td class="text-center"><?php echo $s['ketersediaan_obat_total']; ?></td>
			<td class="text-center"><?php echo $s['jumlah_fasilitas_total']; ?></td>
			<td class="text-center"><?php echo $s['rata_rata']; ?></td>
			<td class="text-center"><?php echo $s['d1']; ?></td>
			<td class="text-center"><?php echo $s['d2']; ?></td>
			<td class="text-center"><?php echo $s['d3']; ?></td>
			<td class="text-center"><?php echo $s['d4']; ?></td>
			<td class="text-center"><?php echo $s['d5']; ?></td>
			<td class="text-center"><?php echo $s['predikat']; ?></td>
			</tr>
            <?php } ?>
			</tbody>
          </table>
			
			
			
			
		  
		  </div>
		  </div>
		  
		  
		  </div>



