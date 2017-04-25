<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">				  
					  <div class="banner-info">
					  <h3>CAPTAIN AMERICA CIVIL WAR.</h3>
					  <p>Pertarungan antar kubu bupati dan walikota dikarenakan gaji yang kebanyakan.</p>
					  </div>
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
					 <div class="banner-info">
					 <h3>AVATAR 2 (The Last Airbender).</h3>
					 <p>Perjalanan pengendali udara terakhir yang ada di bumi ke daerah Barat untuk mencari kitab suci.</p>
					 </div>
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
	        	 <div class="banner-info">
	        	 <h3>Batman Vs Superman.</h3>
	          	 <p>Pertarungan antara batman dan superman memperebutkan mbak Gal Gadot.</p>
				 </div>
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
<!---->
<script src="<?php echo base_url('assets/')?>js/bootstrap.js"> </script>

<div class="items">
	 <div class="container">
		 <div class="items-sec">
             <?php
                    foreach($movie as $row){
             ?>
			 <div class="col-md-3 feature-grid">
				 <a href="product.html"><img src="http://localhost/Movie/assets/images/<?php echo $row['poster']?>.jpg" alt=""/>	
					 <div class="arrival-info">
						 <h4><?php echo $row['studio']?></h4>
						 <p><?php echo $row['movie_name']?></p>
						 <span class="pric1"><?php echo $row['movie_show']?></span>
					 </div>
					 <div class="viw">
						<a href="<?php echo base_url('home/detail_movie/')?><?php echo $row['id_movie']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Detail</a>
					 </div>
				  </a>
			 </div>
			 <?php
                    }
             ?>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>