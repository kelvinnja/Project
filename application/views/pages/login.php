<form id="form-login" action="" method="GET">
	<label>User Type</label>
	<select>
		<option value="admin">Administrator</option>
		<option value="carwash">Carwash Administrator</option>
		<option value="owner">Car Owner</option>
	</select><br><br>
	
	<label>Username</label>
	<input id="input" type="text" name="uname"><br><br>
	<label>Password</label>
	<input type="password" name="pass"><br><br>

	<input type="submit" name="login" value="LOGIN">
	<p>Not yet a member,<a href="<?php echo base_url(); ?>signup">Sign Up</a></p>
</form>