<div class="container">
	<div class="check-sec">	         
		<div class="col-md-8 col-md-offset-2 cart-items">
			<h1>Daftar Pesanan (<?php echo $total;?>)</h1>
            
            <?php 
            if(!empty($cart)){
                foreach($cart as $row){
            ?>
			<div class="cart-header">
                <div class="close1"><a href="<?php echo base_url('home/delete/');?><?php echo $row['id_book'];?>" onClick="return confirm('Are you sure want to delete this item?')"><button type="button" class="btn btn-danger btn-sm">x</button></a></div>
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="http://localhost/Movie/assets/images/<?php echo $row['poster']?>.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						    <h3><a href="single.html"><?php echo $row['movie_name']?></a><span><?php echo $row['movie_show']?></span></h3>
							<ul class="qty">
								<li><p>Price : Rp. <?php echo $row['price']?></p></li>
								<li><p>Quantity : <?php echo $row['qty']?></p></li>
							</ul>
                            <a href="<?php echo base_url('home/confirm_payment/')?><?php echo $row['id_book']?>"><span class="label label-success">Confirm Payment</span></a>
					   </div>
					   <div class="clearfix"></div>					
				  </div>
			 </div>	
            <?php
                    }
                }else{
                    echo "There's no booking record";
                }
            ?>
		</div>
		<div class="clearfix"> </div>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>