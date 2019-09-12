<form id="form" method="GET" action="">
	<label>Vehicle Type:</label>
	<select>
		<option value="SUV">SUV</option>
		<option value="hatchback">Hatchback</option>
		<option value="saloon">Saloon</option>
		<option value="4*4">4*4</option>
		<option value="convertible">Convertible</option>
	</select><br><br>

	<label>Date:</label>
	<input type='date' id='date' value='<?php echo date('Y-m-d');?>'><br><br>

	<label>Car Wash:</label>
	<select>
		<option></option>
		<option></option>
		<option></option>
		<option></option>
	</select><br><br>

	<label>Attendant:</label>
	<select>
		<option></option>
		<option></option>
		<option></option>
	</select><br><br>

	<label>Delivery Type:</label>
	<select>
		<option value="self">Self Delivery</option>
		<option value="chauffered">Chauffered</option>
	</select><br><br>

	<label>Payment Method:</label>
	<select>
		<option value="cod">Cash on Delivery</option>
		<option value="M-Pesa">M-Pesa</option>
		<option value="credit">Credit Card</option>
	</select><br><br>

	<input type="submit" name="book" value="BOOK">
</form>