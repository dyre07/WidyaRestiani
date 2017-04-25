<!--header//-->
<div class="product">
	 <div class="container">				
		 <div class="product-price1">
			 <div class="top-sing">
				  <div class="col-md-7 single-top">	
					 <div class="flexslider">
				         <img src="http://localhost/Movie/assets/images/<?php echo $detail->poster?>.jpg" data-imagezoom="true" class="img-responsive" alt=""/>
				     </div>					 					 
				 </div>	
			     <div class="col-md-5 single-top-in simpleCart_shelfItem">
					  <div class="single-para ">
						 <h4><?php echo $detail->movie_name?></h4>							
							<h5 class="item_price">Rp. <?php echo $detail->price?></h5>							
							<p class="para"><?php echo $detail->description?></p>
							<div class="prdt-info-grid">
								 <br>Movie Date : <?php echo $detail->movie_show?>
                                 <br>Studio : <?php echo $detail->studio?>
							</div>
							
							<a href="<?php echo base_url('home/book/')?><?php echo $detail->id_movie?>/<?php echo $detail->price?>" class="add-cart item_add">Booking Now!</a>							
					 </div>
				 </div>
				 <div class="clearfix"> </div>
			 </div>
	     </div>
         
         <div class="bottom-prdt">
			 <div class="distracted">
			  <h3 class="ghj">User Comment</h3>
                 <?php 
                    if(!empty($comment)){
                        foreach($comment as $row){
                 ?>
                 <div class="col-md-7">
				   <div class="well">
                       <strong><?php echo $row['name']?></strong>
					<br><?php echo $row['comment']?>
				   </div>
                 </div>
                 <?php
                        }
                    }else{
                 ?>
                    <div class="col-md-7">
                        <div class="well">
                            There's no comment yet, give your review for this movie
				        </div>
                    </div>
                 <?php  }
                 ?>
		    </div>
            
             <div class="contact-form">
                 <div class="distracted">
                 <form action="<?php echo base_url('home/add_comment/')?><?php echo $detail->id_movie?>" method="post">
                     <div class="col-md-7">
                        <h3>Add Your Comment</h3>
				    </div>
                    <div class="col-md-7">
                        <span><textarea name="comment"></textarea></span>
				    </div>
                    <div class="col-md-7">
				        <span><input type="submit" class="mybutton" value="Comment"></span>
                    </div>
                 </form>
                 </div>
             </div>
		 </div>
	 </div>
</div>


