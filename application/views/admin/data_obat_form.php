<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-cube"></i> Data Obat</h1>
          </div>

		<div class="card shadow mb-4">
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary">
			  <?php
                  if($status == 'baru'){
                  echo "<i class='fas fa-fw fa-plus'></i> Tambah Data Obat</a>";
                  }
                  else {
                  echo "<i class='fas fa-fw fa-edit'></i> Edit Data Obat</a>";
                  }
                ?>
			  
			  </h6>
            </div>
        <div class="card-body">		  
		
		<form class="form-horizontal" role="form" method="post" action="<?=base_url();?>administrasi/data_obat/save" enctype="multipart/form-data">
                <input type="hidden" class="form-control" name="no" value="<?=$no ?>" />
                <input type="hidden" class="form-control" name="status" value="<?=$status ?>" />
				
				
				<div class="form-row">
				
				<div class="form-group col-md-6">
                  <label for="inputKK" class="font-weight-bold">Nama Obat</label>
                  <input type="text" name="nama_obat" value="<?php echo $nama_obat ?>" required autocomplete="off" class="form-control" id="inputKK"/>
                </div>
                
				<div class="form-group col-md-6">
                  <label for="inputNama" class="font-weight-bold">Kemasan</label>
                  <input type="text" name="kemasan" required class="form-control" autocomplete="off" value="<?php echo $kemasan ?>" id="inputNama" />
                </div>
				
				<div class="form-group col-md-6">
                  <label for="inputNama" class="font-weight-bold">Kebutuhan</label>
                  <input type="text" name="kebutuhan" required class="form-control" autocomplete="off" value="<?php echo $kebutuhan ?>" id="inputNama" />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNama" class="font-weight-bold">Ketersediaan</label>
                  <input name="ketersediaan" required type="text" class="form-control" autocomplete="off" id="inputNama" value="<?php echo $ketersediaan ?>" />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNama" class="font-weight-bold">Persen Ketersediaan</label>
                  <input type="text" name="persen_ketersediaan" required class="form-control" autocomplete="off" id="inputNama" value="<?php echo $persen_ketersediaan ?>" />
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNama" class="font-weight-bold">Total ketersediaan</label>
                  <input name="total_sedia" required type="text" class="form-control" autocomplete="off" id="inputNama" value="<?php echo $total_sedia ?>" />
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
					
					<a href="<?php echo base_url() ?>administrasi/data_obat" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
			
        </div>
		
		</form>
		
		
		</div>
		</div>