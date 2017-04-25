<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 col-md-offset-1 log">			 
				 <p>Welcome dear customer, please enter the following to continue.</p>
				 <form action="<?php echo base_url('user/login_proses')?>" method="post">
					 <h5>Email</h5>	
					 <input type="text" name="email">
					 <h5>Password</h5>
					 <input type="password" name="password">					
					 <input type="submit" value="Login">	
						<a class="acount-btn" href="<?php echo base_url('user/register')?>">Create an Account</a>
				 </form>
				 <a href="#">Forgot Password ?</a>
		 </div>		
		 <div class="clearfix"></div>
	 </div>
</div>
