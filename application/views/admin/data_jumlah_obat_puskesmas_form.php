<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-suitcase"></i> Data Jumlah Obat</h1>
          </div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Jumlah Obat</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Jumlah Obat</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">	
		
              <form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_jumlah_obat_puskesmas/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_jumlah_obat" value="<?=$no_jumlah_obat ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />

                <div class="form-row">
				<div class="form-group col-md-6">
                  <label for="inputth" class="font-weight-bold">Pilih Puskesmas</label>
                    <select name="no_puskesmas" class="form-control" required>
                      <option value=""> -Pilih Puskesmas- </option>
                      <?php foreach ($no_puskesmas as $pt): ?>
                          <option value="<?=$pt['no_puskesmas']?>"><?=$pt['no_puskesmas']?> - <?=$pt['nama_puskesmas']?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputpp" class="font-weight-bold">Pilih Obat</label>
                    <select name="no" class="form-control" required>
                      <option value=""> -Pilih Obat- </option>
                      <?php foreach ($no as $pp): ?>
                          <option value="<?=$pp['no']?>"><?=$pp['no']?> - <?=$pp['nama_obat']?></option>
                      <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputppp" class="font-weight-bold">Jumlah Obat</label>
                  <input type="number" name="jumlah_obat" value="<?php echo $jumlah_obat ?>" required class="form-control" id="inputppp" />
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
                    </button>&nbsp;&nbsp;<a href="<?php echo base_url() ?>administrasi/data_jumlah_obat_puskesmas" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>