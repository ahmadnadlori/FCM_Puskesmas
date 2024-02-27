<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-cubes"></i> Data Fasilitas</h1>
          </div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Fasilitas</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Fasilitas</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">	

			<form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_fasilitas/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no_fasilitas" value="<?=$no_fasilitas ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
                
				
				<div class="form-group">
                  <label for="inputKK" class="font-weight-bold">Nama Fasilitas</label>
                  <input type="text" name="nama_fasilitas" value="<?php echo $nama_fasilitas ?>" required autocomplete="off" class="form-control" id="inputKK"/>
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
					<a href="<?php echo base_url() ?>administrasi/data_fasilitas" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>				