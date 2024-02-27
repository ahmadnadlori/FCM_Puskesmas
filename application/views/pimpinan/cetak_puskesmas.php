<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-print"></i> Cetak Data Puskesmas</h1>
			
				<a href="<?php echo base_url() ?>pimpinan/cetak_puskesmas/view"  class="btn btn-success">
                                <i class="fa fa-print"></i> Cetak Data
                </a>
          </div>
          
		  
		  <?php
        if($msg = $this->session->flashdata('sukses')){
        echo $msg;
        }
        ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
			
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
			<tr align="center">
			<th>No</th>
			<th>Nama Puskesmas</th>
			<th>Jumlah Pasien</th>
			<th>Ketersediaan Obat</th>
			<th>Nama Puskesmas</th>
			</tr>
			</thead>
            <tbody>
            <?php foreach ($data_puskesmas as $p): ?>    
            <tr>
            <td class="text-center"><?=$p['no_puskesmas'] ?></td>
            <td><?=$p['nama_puskesmas'] ?></td>
            <td class="text-center"><?=$p['jumlah_pasien_total'] ?></td>
            <td class="text-center"><?=$p['ketersediaan_obat_total'] ?></td>
            <td class="text-center"><?=$p['jumlah_fasilitas_total'] ?></td>
            
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>

          </div>

        </div>
		</div>
        
