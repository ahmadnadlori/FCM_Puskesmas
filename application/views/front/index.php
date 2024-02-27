<div class="container">

        <!-- Outer Row -->
    <div class="row d-plex justify-content-between mt-4">

	  

      <div class="col-xl-5 col-lg-5 col-md-5 mt-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login Account</h1>
                  </div>
				  
				  <?php
              if($msg = $this->session->flashdata('error')){
                echo $msg;
              }
            ?>
				  
                  <form action="<?=base_url()?>auth" method="post">
                    <div class="form-group">
                      <input type="username" class="form-control form-control-user" id="exampleInputUsername" placeholder="Username" required autocomplete="off" name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required autocomplete="off" name="password">
                    </div>
					<div class="form-group">
					<select name="level" class="form-control form-control-user" required>
                    <option value="">-Pilih Level-</option>
                    <option value="2">Pimpinan</option>
                    <option value="3">Supplier</option>
                    <option value="1">Administrator</option>
                  </select>
				  </div>
					
					<button class="btn btn-primary btn-user btn-block" type="submit"><i class="fas fa-fw fa-sign-in-alt mr-1"></i> Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
	  
	  
	  <div class="col-xl-6 col-lg-6 col-md-6 mt-5">
	  
	  <div class="card bg-none o-hidden border-0 my-5 text-white" style="background:none;">
          <div class="card-body p-0">
	<h4 style="font-weight:800">K-Means Clustering</h4>
	  <p class="text-justify">K-Means Clustering adalah suatu metode penganalisaan data atau metode Data Mining yang melakukan proses pemodelan tanpa supervisi (unsupervised) dan merupakan salah satu metode yang melakukan pengelompokan data dengan sistem partisi. Terdapat dua jenis data clustering yang sering dipergunakan dalam proses pengelompokan data yaitu Hierarchical dan Non-Hierarchical, dan K-Means merupakan salah satu metode data clustering non-hierarchical atau Partitional Clustering.</p>
	  
	  </div>
	  </div>
	  </div>

    </div>

  </div>
    