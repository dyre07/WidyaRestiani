<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Wellcome <span> <?php echo $this->session->userdata('name')?> </span></h2>
			 <div class="registration_form">						
							<div class="prdt-info-grid">
                                <div class="bs-example">
						<table class="table">
						  <tbody>
							<tr>
							  <td>Name</td>
                                <td>:</td>
                              <td><?php echo $this->session->userdata('name')?></td>
							</tr>
							<tr>
							  <td>Address</td>
                                <td>:</td>
                              <td><?php echo $this->session->userdata('address')?></td>
							</tr>
							<tr>
							  <td>Email</td>
                                <td>:</td>
                              <td><?php echo $this->session->userdata('email')?></td>
							</tr>
							<tr>
							  <td>Password</td>
                                <td>:</td>
                              <td><?php echo $this->session->userdata('password')?></td>
							</tr>
						  </tbody>
						</table>
			 </div>
		 </div>
        </div>
		 <div class="registration_right">
			 <h2>Update Account</h2>
                                <form method="post" action="<?php echo base_url('home/update_user/').$this->session->userdata('id_customer')?>">
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="name" value="<?php echo $this->session->userdata('name')?>">
                                            </div>
                                        </div>
                <br><br>
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="address" value="<?php echo $this->session->userdata('address')?>">
                                            </div>
                                        </div>
                <br><br>
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="email" value="<?php echo $this->session->userdata('email')?>">
                                            </div>
                                        </div>
                <br><br>
                                        <div class="form-group">
                                            <label  class="col-sm-3 control-label">Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                        </div>
                <br><br>
              <!-- /.box-body -->
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-info center-block">Update Account</button>
                                        </div>
              <!-- /.box-footer -->
                                </form>
             <br>
             <a href="<?php echo base_url('user/logout')?>"><button type="submit" class="btn btn-info center-block">Logout</button></a>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div

