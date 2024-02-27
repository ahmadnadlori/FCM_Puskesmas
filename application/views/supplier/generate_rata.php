<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-trophy"></i> Data Nilai Rata-Rata</h1>
			
				<a href="<?php echo base_url(); ?>supplier/generate_centroid"  class="btn btn-success">
                                <i class="fa fa-check"></i> Generate Nilai Centroid
                </a>
          </div>
		  
		  <div class="card shadow mb-4">
            <div class="card-body">
			
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
			<tr>
			<th style="width:5%">No Puskesmas</th>
			<th>Nama Puskesmas</th>
			<th>Jumlah Pasien</th>
			<th>Ketersediaan Obat</th>
			<th>Jumlah Fasilitas</th>
			<th>Rata-Rata</th>
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
			</tr>
            <?php } ?>
          </tbody>
		  </table>
			
			</div>
			</div>
			</div>
