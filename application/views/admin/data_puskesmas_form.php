<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-tasks"></i> Data Puskesmas</h1>
          </div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Puskesmas</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Puskesmas</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">	
		
		<form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_puskesmas/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_puskesmas" value="<?=$no_puskesmas ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
                
				<div class="form-row">
				<div class="form-group col-md-6">
                  <label for="inputKK" class="font-weight-bold">Nama Puskesmas</label>
                  <input type="text" name="nama_puskesmas" value="<?php echo $nama_puskesmas ?>" required class="form-control" id="inputKK" />
                </div>
				
                <div class="form-group col-md-6">
                  <label for="inputKK" class="font-weight-bold">Jumlah Pasien</label>
                  <input type="text" disabled class="form-control" placeholder="Data digenerate oleh data variable Jumlah Pasien per Puskesmas" />
                </div>
				
                <div class="form-group col-md-6">
                  <label for="inputKK" class="font-weight-bold">Ketersediaan Obat</label>
                  <input type="text" disabled class="form-control" placeholder="Data digenerate oleh data variable Jumlah Obat per Puskesmas" />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputKK" class="font-weight-bold">Jumlah Fasilitas</label>
				  <input type="text" disabled class="form-control" placeholder="Data digenerate oleh data variable Jumlah Fasilitas per Puskesmas" />
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
					<a href="<?php echo base_url() ?>administrasi/data_puskesmas" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>