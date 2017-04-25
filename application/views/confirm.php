<div class="product">
	 <div class="container">				
		 <div class="product-price1">
			 <div class="top-sing">
				  <div class="col-md-7 single-top">	
					 <div class="flexslider">
				         <img src="http://localhost/Movie/assets/images/<?php echo $confirm[0]['poster']?>.jpg" data-imagezoom="true" class="img-responsive" alt=""/>
				     </div>					 					 
				 </div>	
			     <div class="col-md-5 single-top-in simpleCart_shelfItem">
					  <div class="single-para ">
						 <h4><?php echo $confirm[0]['movie_name']?></h4>							
							<div class="prdt-info-grid">
                                <div class="col-md-6">
						              <table class="table">
						                  <tbody>
							                 <tr>
							                     <td>Price</td>
                                                 <td>: <?php echo $confirm[0]['price']?></td>
							                 </tr>
							                 <tr>
							                     <td>Quantity</td>
                                                 <td>: <?php echo $confirm[0]['qty']?></td>
							                 </tr>
							                 <tr>
							                     <td>Total</td>
                                                 <td>: <?php echo $confirm[0]['pay']?></td>
							                 </tr>
						                  </tbody>
						              </table>
                                </div>
					       </div>
                     
                            <div class="col-md-10">
                                <br>
                                <br>
                            <h4>Confirm Payment</h4>
                                <br>
                                <form class="form-horizontal" method="post" action="<?php echo base_url('home/payment_proses/')?><?php echo $confirm[0]['id_book']?>">
                                    <input type="hidden" class="form-control" name="total" value="<?php echo $confirm[0]['pay']?>">
                                    <input type="hidden" class="form-control" name="qty" value="<?php echo $confirm[0]['qty']?>">
                                    <input type="hidden" class="form-control" name="id_movie" value="<?php echo $confirm[0]['id_movie']?>">
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Card Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="card_number">
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Bukti Transfer</label>
                                            <div class="col-sm-8">
                                                <input type="file" name="Bukti_transfer">
                                            </div>
                                        </div>
                
              <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-info center-block">Confirm Payment</button>
                                        </div>
              <!-- /.box-footer -->
                                </form>
                          </div>
				    </div>
				 <div class="clearfix"> </div>
			 </div>
	     </div>
	 </div>
</div>
    <br>
    <br>
    <br>