<div class="container">
<div class="col-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          
		  <div class="card-header">
		  <i class="fas fa-fw fa-question-circle mr-1"></i>Tentang
		  </div>
		  
		  <div class="card-body">
		  <p class="card-text text-center">
		  <i class="fas fa-fw fa-question-circle" style="font-size:60px;"></i>
		  </p>
		  <?php foreach ($tentang as $te): ?>
		  <p class="card-text">
              <?php echo $te['sub'] ?>
		</p>
            <?php endforeach ?>
		  </div>
		</div>
</div>
</div>

