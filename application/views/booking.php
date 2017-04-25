<div class="contact">
	  <div class="container">
			<!--start contact-->
			<h3>Detail Order</h3>
		  <div class="section group">							
				<div class="col-md-6 col-md-offset-3">
				  <div class="contact-form">
					    <form action="<?php echo base_url('home/booking/').$this->uri->segment(3)."/".$this->uri->segment(4)?>" method="post">
					    	<div>
						    	<span><label>Date</label></span>
						    	<span><input name="date" type="date" class="form-control" value="<?php echo date("Y-m-d");?>"></span>
						    </div>
						    <div>
						    	<span><label>Time</label></span>
						    	<span><select name="time" class="form-control select2">
                                    <option value="10:30:00">10:30</option>
                                    <option value="12:30:00">12:30</option>
                                    <option value="14:30:00">14:30</option>
                                    </select></span>
						    </div>
						    <div>
						     	<span><label>Quantity</label></span>
						    	<span><select name="qty" class="form-control select2">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="mybutton" value="Book Ticket"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
		  </div>
	  </div>
 </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>