<form id="form" action="" method="GET">
	<label>First Name</label>
	<input id="input" type="text" name="fname"><br><br>

	<label>Last Name</label>
	<input type="text" name="lname"><br><br>

	<label>Phone Number</label>
	<input type="number" name="pnum"><br><br>

	<label>Username</label>
	<input type="text" name="uname"><br><br>

	<label>Password</label>
	<input type="password" name="pass"><br><br>

	<input id="btns" type="submit" name="signup" value="SIGN UP">
	<P>Already a member, <a href="<?php echo base_url(); ?>login">Login</a></P>
</form>