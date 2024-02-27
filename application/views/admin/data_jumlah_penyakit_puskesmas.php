<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Jumlah Pasien</h1>
			
				<a href="<?php echo base_url() ?>administrasi/data_jumlah_penyakit_puskesmas/add"  class="btn btn-success">
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
			<th>Nama Tahun</th>
			<th>Nama Puskesmas</th>
			<th>Nama Pasien</th>
			<th>Nama Penyakit</th>
			<th>Nama Obat</th>
			<th style="width:15%">Aksi</th>
			</tr>
			</thead>
            <tbody>
            <?php foreach ($data_jumlah_penyakit_puskesmas as $p): ?>    
            <tr>
            <td class="text-center"><?=$p['no_jumlah_penyakit'] ?></td>
            <td>(<?=$p['no_tahun'] ?>) <?=$p['nama_tahun'] ?></td>
            <td>(<?=$p['no_puskesmas'] ?>) <?=$p['nama_puskesmas'] ?></td>
            <td><?=$p['nama_pasien'] ?></td>
            <td>(<?=$p['no_penyakit'] ?>) <?=$p['nama_penyakit'] ?></td>
            <td>
              
              <?php if($p['no']==0 OR $p['no']==null){
            echo "<div class='text-danger'>(Obat Tidak Tersedia)</div>" ?>
            <?php }else{ ?>
            (<?=$p['no'] ?>) <?=$p['nama_obat'] ?>
            <?php } ?>
            </td>
            <td class="text-center">
			<div class="btn-group" role="group">
            <a href="<?=base_url();?>administrasi/data_jumlah_penyakit_puskesmas/edit/<?=$p['no_jumlah_penyakit'] ?>" class="btn btn-warning" rel="tooltip" data-original-title="Mengubah data pada baris ini" data-placement="top"><i class="fa fa-edit"></i></a>
			
            <a href="<?=base_url();?>administrasi/data_jumlah_penyakit_puskesmas/del/<?=$p['no_jumlah_penyakit'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" rel="tooltip" data-original-title="Menghapus Data pada baris ini" data-placement="top"><i class="fa fa-trash"></i></a>
			</div>
			</td>
            </tr>
            <?php endforeach ?>
            </tbody>
            </table>
			
			
			</div>
			</div>
			</div>