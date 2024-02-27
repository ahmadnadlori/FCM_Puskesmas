<div class="container-fluid">

          <!-- Page Heading -->
		  
		  <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-bell"></i> Data Hasil Iterasi</h1>
			
				<a href="<?php echo base_url(); ?>supplier/iterasi_kmeans"  class="btn btn-success">
                                <i class="fa fa-check"></i> Ulang Proses Awal
                </a>
          </div>
		  
		  
            
			
			
			
			<?php
              foreach($q->result_array() as $hq)
              {
            ?>
			<div class="card shadow mb-4">
			
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-fw fa-bell mr-1"></i>Iterasi ke-<?php echo $hq['iterasi']; ?></h6>
            </div>
            
			<div class="card-body">
            <div class="table-responsive">
			<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
              <tr align="center">
			  <td>C1</td>
			  <td>C2</td>
			  <td>C3</td>
			  </tr>
			  </thead>
			  <tbody>
              <?php
                $q2 = $this->db->query('select * from centroid_temp where iterasi='.$hq['iterasi'].'');
                foreach($q2->result() as $tq)
                {
                $warna1="";
                $warna2="";
                $warna3="";
                if($tq->c1==1){$warna1='bg-success text-white';} else{$warna1='text-dark';}
                if($tq->c2==1){$warna2='bg-success text-white';} else{$warna2='text-dark';}
                if($tq->c3==1){$warna3='bg-success text-white';} else{$warna3='text-dark';}
              ?>
              <tr align="center">
			  <td class="<?php echo $warna1; ?>"><?php echo $tq->c1; ?></td>
			  <td class="<?php echo $warna2; ?>"><?php echo $tq->c2; ?></td>
			  <td class="<?php echo $warna3; ?>"><?php echo $tq->c3; ?></td>
			  </tr>
              <?php
                }
              ?>
            <tbody>
			</table>
            </div>
			</div>
			</div>
            <?php
              }
            ?>
            


            <div class="card shadow mb-4">
			
			<div class="card-header py-3">			  
			<h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-fw fa-bell mr-1"></i>Hasil Akhir</h6>
            </div>
            
			<div class="card-body">
			<table class="table table-bordered" width="100%" cellspacing="0">
            <thead class="bg-primary text-white">
              <tr align="center">
			  <th>No Puskesmas</th>
			  <th>Nama Puskesmas</th>
			  <th>Predikat</th>
			  </tr>
			  </thead>
			  <tbody>
              <?php
                foreach($data_hasil->result() as $h)
                {
              ?>
              <tr align="center">
              <td><?php echo $h->no_puskesmas; ?></td>
              <td><?php echo $h->nama_puskesmas; ?></td>
              <td><?php echo $h->predikat; ?></td>
              </tr>
              <?php
                }
              ?>
            </tbody>
			</table>
			
			</div>
			</div>
