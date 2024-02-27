<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-sitemap"></i> Data Jumlah Fasilitas</h1>
          </div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Jumlah Fasilitas</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Jumlah Fasilitas</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">	
              <form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_jumlah_fasilitas_puskesmas/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_jumlah_fasilitas" value="<?=$no_jumlah_fasilitas ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />

			<div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputth" class="font-weight-bold">Pilih Puskesmas</label>
                    <select name="no_puskesmas" class="form-control" required>
                      <option value=""> -- Pilih Fasilitas -- </option>
                      <?php foreach ($no_puskesmas as $pt): ?>
                          <option value="<?=$pt['no_puskesmas']?>"><?=$pt['no_puskesmas']?> - <?=$pt['nama_puskesmas']?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputpp" class="font-weight-bold">Pilih Fasilitas</label>
                    <select name="no_fasilitas" class="form-control" required>
                      <option value=""> -- Pilih Fasilitas -- </option>
                      <?php foreach ($no_fasilitas as $pp): ?>
                          <option value="<?=$pp['no_fasilitas']?>"><?=$pp['no_fasilitas']?> - <?=$pp['nama_fasilitas']?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputppp" class="font-weight-bold">Jumlah Fasilitas</label>
                  <input type="number" name="jumlah_fasilitas" value="<?php echo $jumlah_fasilitas ?>" required class="form-control" id="inputppp" />
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
                    </button>&nbsp;&nbsp;<a href="<?php echo base_url() ?>administrasi/data_jumlah_fasilitas_puskesmas" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>