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
							<div class="prdt-info-grid">
                                <div class="bs-example">
						<table class="table">
						  <tbody>
							<tr>
							  <td>Price</td>
							  <td>:</td>
                              <td><?php echo $detail->price?></td>
							</tr>
							<tr>
							  <td>Quantity</td>
							  <td>:</td>
                              <td><?php echo $detail->qty?></td>
							</tr>
							<tr>
							  <td>Total</td>
							  <td>:</td>
                              <td><?php echo $detail->pay?></td>
							</tr>
							</tr>
						  </tbody>
						</table>
					</div>
							</div>
							
							<a href="#" class="add-cart item_add">Booking Now!</a>							
					 </div>
				 </div>
				 <div class="clearfix"> </div>
			 </div>
	     </div>
	 </div>
</div>


