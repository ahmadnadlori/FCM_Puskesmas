<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Jumlah Pasien</h1>
          </div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Jumlah Pasien</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Jumlah Pasien</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">	

              <form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_jumlah_penyakit_puskesmas/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_jumlah_penyakit" value="<?=$no_jumlah_penyakit ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />

                <div class="form-row">
				
				<div class="form-group col-md-6">
                  <label for="inputth" class="font-weight-bold">Pilih Tahun</label>
                    <select name="no_tahun" class="form-control" required>
                      <option value=""> -Pilih Tahun- </option>
                      <?php foreach ($no_tahun as $pt): ?>
                          <option value="<?=$pt['no_tahun']?>"><?=$pt['no_tahun']?> - <?=$pt['nama_tahun']?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputpp" class="font-weight-bold">Pilih Puskesmas</label>
                    <select name="no_puskesmas" class="form-control" required>
                      <option value=""> -Pilih Puskesmas- </option>
                      <?php foreach ($no_puskesmas as $pp): ?>
                          <option value="<?=$pp['no_puskesmas']?>"><?=$pp['no_puskesmas']?> - <?=$pp['nama_puskesmas']?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputppp" class="font-weight-bold">Nama Pasien</label>
                  <input type="text" name="nama_pasien" value="<?php echo $nama_pasien ?>" required autocomplete="off" class="form-control" id="inputppp" />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputpp" class="font-weight-bold">Pilih Penyakit</label>
                    <select name="no_penyakit" class="form-control" required>
                      <option value=""> -Pilih Penyakit- </option>
                      <?php foreach ($no_penyakit as $pe): ?>
                          <option value="<?=$pe['no_penyakit']?>"><?=$pe['no_penyakit']?> - <?=$pe['nama_penyakit']?></option>
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
					
					<a href="<?php echo base_url() ?>administrasi/data_jumlah_penyakit_puskesmas" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>