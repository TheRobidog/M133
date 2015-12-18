<!DOCTYPE HTML>

<html>

	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<h1>Register</h1>
		<?php
			session_start();
		?>
		<form action="createacc.php" method="POST">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" required><br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" required><br>
			<label for="passwordrepeat">Repeat Password:</label>
			<input type="password" name="passwordrepeat" id="passwordrepeat" required><br><br>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" required><br>
			<label for="firstname">First Name:</label>
			<input type="text" name="firstname" id="firstname" required><br>
			<label for="email">E-Mail:</label>
			<input type="text" name="email" id="email" required><br>
			<label for="address">Address:</label>
			<input type="text" name="address" id="address"><br>
			<label for="postalcode">Postal Code:</label>
			<input type="text" name="postalcode" id="postalcode"><br>
			<label for="town">Town:</label>
			<input type="text" name="town" id="town"><br>
			<label for="country">Country:</label>
			<select name="country" id="country">
				<option value="AL">Albania</option>
				<option value="AD">Andorra</option>
				<option value="AR">Argentina</option>
				<option value="AM">Armenia</option>
				<option value="AU">Australia</option>
				<option value="AT">Austria</option>
				<option value="AZ">Azerbaijan</option>
				<option value="BS">Bahamas</option>
				<option value="BH">Bahrain</option>
				<option value="BY">Belarus</option>
				<option value="BE">Belgium</option>
				<option value="BA">Bosnia and Herzegovina</option>
				<option value="BR">Brazil</option>
				<option value="IO">British Indian Ocean Territory</option>
				<option value="BG">Bulgaria</option>
				<option value="CA">Canada</option>
				<option value="CN">China</option>
				<option value="HR">Croatia</option>
				<option value="CU">Cuba</option>
				<option value="CY">Cyprus</option>
				<option value="CZ">Czech Republic</option>
				<option value="DK">Denmark</option>
				<option value="EG">Egypt</option>
				<option value="EE">Estonia</option>
				<option value="FK">Falkland Islands (Malvinas)</option>
				<option value="FO">Faroe Islands</option>
				<option value="FI">Finland</option>
				<option value="FR">France</option>
				<option value="GE">Georgia</option>
				<option value="DE">Germany</option>
				<option value="GI">Gibraltar</option>
				<option value="GR">Greece</option>
				<option value="VA">Holy See (Vatican City State)</option>
				<option value="HK">Hong Kong</option>
				<option value="HU">Hungary</option>
				<option value="IS">Iceland</option>
				<option value="IN">India</option>
				<option value="IR">Iran, Islamic Republic of</option>
				<option value="IQ">Iraq</option>
				<option value="IE">Ireland</option>
				<option value="IM">Isle of Man</option>
				<option value="IL">Israel</option>
				<option value="IT">Italy</option>
				<option value="JM">Jamaica</option>
				<option value="JP">Japan</option>
				<option value="KR">Korea, Republic of</option>
				<option value="LV">Latvia</option>
				<option value="LI">Liechtenstein</option>
				<option value="LT">Lithuania</option>
				<option value="LU">Luxembourg</option>
				<option value="MO">Macao</option>
				<option value="MK">Macedonia, the former Yugoslav Republic of</option>
				<option value="MG">Madagascar</option>
				<option value="MY">Malaysia</option>
				<option value="MV">Maldives</option>
				<option value="MT">Malta</option>
				<option value="MX">Mexico</option>
				<option value="MD">Moldova, Republic of</option>
				<option value="MC">Monaco</option>
				<option value="ME">Montenegro</option>
				<option value="NL">Netherlands</option>
				<option value="NZ">New Zealand</option>
				<option value="NO">Norway</option>
				<option value="PH">Philippines</option>
				<option value="PL">Poland</option>
				<option value="PT">Portugal</option>
				<option value="RO">Romania</option>
				<option value="RU">Russian Federation</option>
				<option value="SM">San Marino</option>
				<option value="RS">Serbia</option>
				<option value="SG">Singapore</option>
				<option value="SK">Slovakia</option>
				<option value="SI">Slovenia</option>
				<option value="ZA">South Africa</option>
				<option value="ES">Spain</option>
				<option value="SE">Sweden</option>
				<option value="CH">Switzerland</option>
				<option value="TH">Thailand</option>
				<option value="UA">Ukraine</option>
				<option value="GB">United Kingdom</option>
				<option value="US">United States</option>
			</select><br>
			<input type="submit" value="Register">
		</form>
		<?php
			if(isset($_SESSION['name'])){
				echo '<a href="index.php">To the shop</a>';
			}else{
				echo '<a href="login.php">Login</a>';
			}
		?>
	</body>

</html>