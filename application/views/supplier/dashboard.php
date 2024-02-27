<div class="container-fluid">

		  <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
          </div>
		  
		  <!-- Content Row -->
          
		  <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Selamat datang <strong>Supplier!</strong> Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
          </div>
		  <div class="row">
		  
	
		  
		  <div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url(); ?>supplier/generate_rata" class="text-secondary text-decoration-none">Generate Nilai</a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-trophy fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			<div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="<?php echo base_url(); ?>supplier/iterasi_kmeans" class="text-secondary text-decoration-none">Iterasi K-Means</a></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bell fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           
			
			
			
		<div class="col-12">

        <div class="card o-hidden border-0 shadow-lg">		  
		  <div class="card-header">
		  <i class="fas fa-fw fa-info-circle mr-1"></i> Information
		  </div>
		  <div class="card-body">
		  <?php foreach ($petunjuk as $p): ?>
            <p class="card-text text-justify"> 
                <?php echo $p['sub']?>             
            </p>
            <?php endforeach ?>
		  </div>
		</div>
		</div>


</div>
