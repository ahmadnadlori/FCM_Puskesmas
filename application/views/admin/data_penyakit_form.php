<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-folder"></i> Data Penyakit</h1>
          </div>
		  
		  
		  <div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Penyakit</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Penyakit</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">	

			<form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_penyakit/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_penyakit" value="<?=$no_penyakit ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
            

				<div class="form-row">
				<div class="form-group col-md-6">
                  <label for="inputKK" class="font-weight-bold">Nama Penyakit</label>
                  <input type="text" name="nama_penyakit" autocomplete="off" value="<?php echo $nama_penyakit ?>" required class="form-control" id="inputKK" />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputth" class="font-weight-bold">Pilih Obat</label>
                    <select name="no" class="form-control" required>
                      <option value=""> -Pilih Obat- </option>
                      <?php foreach ($no as $pt): ?>
                          <option value="<?=$pt['no']?>"><?=$pt['no']?> - <?=$pt['nama_obat']?></option>
                      <?php endforeach ?>
                    </select>
                </div>
				</div>
		
		</div>
		
		<div class="card-footer text-right">			
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                      <?php
                        if($status == 'baru'){
                          echo "Simpan";
                        }
                        else {
                          echo "Update";
                        }
                      ?>
                    </button>&nbsp;&nbsp;
					
					<a href="<?php echo base_url() ?>administrasi/data_penyakit" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>