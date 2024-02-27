<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-calendar"></i> Data Tahun</h1>
          </div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Tahun</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Tahun</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">	
		
		
		
		<form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_tahun/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_tahun" value="<?=$no_tahun ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
                
				<div class="form-group">
                  <label for="inputKK" class="font-weight-bold">Nama Tahun</label>
                  <input type="number" name="nama_tahun" value="<?php echo $nama_tahun ?>" autocomplete="off" required class="form-control" id="inputKK" />
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
					<a href="<?php echo base_url() ?>administrasi/data_tahun" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>