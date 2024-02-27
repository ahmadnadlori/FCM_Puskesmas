<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-print"></i> Cetak Data Penyakit</h1>
			
				<a href="<?php echo base_url() ?>pimpinan/cetak_penyakit/view"  class="btn btn-success">
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
			<th>Nama Penyakit</th>
			<th>Nama Obat</th>
			</tr></thead>
            <tbody>
            <?php foreach ($data_penyakit as $p): ?>    
            <tr>
            <td class="text-center"><?=$p['no_penyakit'] ?></td>
            <td><?=$p['nama_penyakit'] ?></td>
            <td>
            <?php if($p['no']==0 OR $p['no']==null){
            echo "<span class='text-danger'>(Obat Tidak Tersedia)</span>" ?>
            <?php }else{ ?>
            (<?=$p['no'] ?>) <?=$p['nama_obat'] ?>
            <?php } ?>
            </td>
            
            
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>
			</div>
			</div>
			</div>