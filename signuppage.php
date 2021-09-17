<!DOCTYPE html>
<html>
<head>
	<title>Code Kaya SignUp Page</title>
	<meta charset="utf-9">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha394-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ794/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><div style="background-color: #41B02E; color: white; height:3rem; margin-bottom:none;border: none;"> <strong><h2><<span>Code</span>> Kaya </h2></strong></div></center>

	<div class = "card" style="height:60rem;background-color: #25C5E9">
		<center><div class="card-header"><strong>Create Account</strong></div></center>
		<center></center><div class="card-body">
		<form  class="form-horizontal"action="/action_page.php">
			<div class="form-group">
			    <label class="control-label col-sm-2" for="name">Name:</label>
			    <div class="col-sm-9">
			    	<input type="text" class="form-control" id="username">
			    </div>
			</div>
			<div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email address:</label>
			    <div class="col-sm-9">
			    	<input type="email" class="form-control" id="email">
			    </div>
		 	</div>
		 	<div class="form-group">
			    <label  class="control-label col-sm-2" for="usertype"> User Type</label>
			    <div class="col-sm-9">
				    <select class="form-control" id="usertype">
				    	<option selected disabled>--Select--</option>
				    	<option>Company</option>
				    	<option>Developer</option>	
			   		</select>
				</div>
			</div>
			<div class="form-group">
		    	<label class="control-label col-sm-2" for="pwd">Password:</label>
		    	<div class="col-sm-9">
		    		<input type="password" class="form-control" id="pwd">
		   		</div>
		  	</div>
		  	<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-9">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
  			</div>
		  	<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-9">
			      <button type="submit" class="btn btn-outline-secondary"><strong><span>Submit</span></strong></button>
			    </div>
			 </div>
		</form>
		<p> Already have an account? Please sign in <a href="signin.html"> here </a> </p>
	</div></center>
	</div>
</body>
</html>