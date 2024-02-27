<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-calendar"></i> Data Tahun</h1>
			
				<a href="<?php echo base_url() ?>administrasi/data_tahun/add"  class="btn btn-success">
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
			<th style="width:5%">No</th>
			<th>Nama Tahun</th>
			<th style="width:15%">Aksi</th>
			</tr>
			</thead>
            <tbody>
            <?php foreach ($data_tahun as $p): ?>    
            <tr>
            <td class="text-center"><?=$p['no_tahun'] ?></td>
            <td><?=$p['nama_tahun'] ?></td>
            <td class="text-center">
			<div class="btn-group" role="group">
            <a href="<?=base_url();?>administrasi/data_tahun/edit/<?=$p['no_tahun'] ?>" class="btn btn-warning" rel="tooltip" data-original-title="Mengubah data pada baris ini" data-placement="top"><i class="fa fa-edit"></i></a>

            <a href="<?=base_url();?>administrasi/data_tahun/del/<?=$p['no_tahun'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" rel="tooltip" data-original-title="Menghapus Data pada baris ini" data-placement="top"><i class="fa fa-trash"></i></a>
			</div>
			</td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>
			
			</div>
			</div>
			</div>