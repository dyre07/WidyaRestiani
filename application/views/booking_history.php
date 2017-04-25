<div class="appearance">
			 <h2 class="top">Booking History</h2>
    <br>
				<div class="col-md-8 col-md-offset-2">
					  <table class="table table-bordered">
						<thead>
							<tr>
                                <th>Movie Title</th>
								<th>Date </th>
                                <th>Time </th>
                                <th>Quantity </th>
                                <th>Price </th>
                                <th>Total </th>
							</tr>
						</thead>
						<tbody>
                            <?php 
                                if(!empty($done)){
                                    foreach($done as $row){
                            ?>
							<tr>
                                <td><?php echo $row['movie_name']?></td>
								<td><?php echo $row['date']?></td>
                                <td><?php echo $row['time']?></td>
                                <td><?php echo $row['qty']?></td>
                                <td><?php echo $row['price']?></td>
                                <td><?php echo $row['pay']?></td>
							</tr>
                            <?php
                                }
                            }else{?>
                                <td colspan="6">There's no booking history yet</td>
                            <?php    }?>
						</tbody>
					  </table>                    
				</div>
			   <div class="clearfix"> </div>
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