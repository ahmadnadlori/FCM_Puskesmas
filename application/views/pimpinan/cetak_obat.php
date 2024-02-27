<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-print"></i> Cetak Data Obat</h1>
			
				<a href="<?php echo base_url() ?>pimpinan/cetak_obat/view"  class="btn btn-success">
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
			<th>Nama Obat</th>
			<th>Kemasan</th>
			<th>Kebutuhan</th>
			<th>Ketersediaan</th>
			<th>Persen Ketersediaan</th>
			<th>Total Ketersediaan</th>
			</tr>
			</thead>
            <tbody>
            <?php foreach ($data_obat as $o): ?>    
            <tr>
            <td class="text-center"><?=$o['no'] ?></td>
            <td><?=$o['nama_obat'] ?></td>
            <td><?=$o['kemasan'] ?></td>
            <td class="text-center"><?=$o['kebutuhan'] ?></td>
            <td class="text-center"><?=$o['ketersediaan'] ?></td>
            <td class="text-center"><?=$o['persen_ketersediaan'] ?></td>
            <td class="text-center"><?=$o['total_sedia'] ?></td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>
			
			</div>
			</div>
			</div>