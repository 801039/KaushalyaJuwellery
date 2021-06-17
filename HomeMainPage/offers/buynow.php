<!-- =============== this is a Buy here page to puchase ietms ================ -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="buyNowStyle.css">
	<!-- ============ buy here page whole decoration from buyNowStyle.css ====================== -->
</head>

<body>
		<div class="contact-section">	<!-- ========= bay here form =========  -->
			<h1>Shop Here</h1>		
			<div class="border"></div>
			<form action="validation.php" method="post" class="contact-form">
				<input type="text" name="user" class="c-text" placeholder="User Name" required> 
				<input type="number" name="limit" class="c-text" min="1" max="30" placeholder="Quantity"> 
				<select type="text" name="visa" class="c-text" value="type">
							<option value="Visa"> VISA </option>
							<option value="Master">MASTER</option>
							<option value="Amex">AMEX</option>
				</select> 
				<input type="text" name="card" class="c-text" placeholder="Card No" required> <!-- -->
				<input type="text" name="postal" class="c-text" placeholder="Postal Code" required> <!-- -->
				<textarea class="c-text" name="address" placeholder="Address"></textarea>
				<input type="password" name="password" class="c-text" placeholder="password" required>

				<input type="submit" class="c-btn">	<!-- ============== form end ==========-->
			</form>
		</div>
</body>
</html>