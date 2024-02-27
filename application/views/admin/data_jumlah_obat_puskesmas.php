<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-suitcase"></i> Data Jumlah Obat</h1>
			
				<a href="<?php echo base_url() ?>administrasi/data_jumlah_obat_puskesmas/add"  class="btn btn-success">
                                <i class="fa fa-plus"></i> Tambah Data
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
			<tr>
			<th>No</th>
			<th>Nama Puskesmas</th>
			<th>Nama Obat</th>
			<th>Jumlah Obat</th>
			<th style="width:15%">Aksi</th>
			</tr></thead>
            <tbody>
            <?php foreach ($data_jumlah_obat_puskesmas as $p): ?>    
            <tr>
            <td class="text-center"><?=$p['no_jumlah_obat'] ?></td>
            <td>(<?=$p['no_puskesmas'] ?>) <?=$p['nama_puskesmas'] ?></td>
            <td>(<?=$p['no'] ?>) <?=$p['nama_obat'] ?></td>
            <td class="text-center"><?=$p['jumlah_obat'] ?></td>
            <td class="text-center">
			<div class="btn-group" role="group">
            <a href="<?=base_url();?>administrasi/data_jumlah_obat_puskesmas/edit/<?=$p['no_jumlah_obat'] ?>" class="btn btn-warning" rel="tooltip" data-original-title="Mengubah data pada baris ini" data-placement="top"><i class="fa fa-edit"></i></a>
            <a href="<?=base_url();?>administrasi/data_jumlah_obat_puskesmas/del/<?=$p['no_jumlah_obat'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" rel="tooltip" data-original-title="Menghapus Data pada baris ini" data-placement="top"><i class="fa fa-trash"></i></a>
			</div>
			</td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>
			
			</div>
			</div>
			</div>