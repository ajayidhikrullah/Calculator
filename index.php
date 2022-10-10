<?php 
	include('calculator.php');

	if (isset($_POST['submit'])) {

		$first_number = $_POST['first_number'];
		$second_number = $_POST['second_number'];
		$operator = $_POST['operator'];



		// Instantiate the Calculator class and pass in the class constructor.
		$calculator = new Calculator($first_number, $second_number);

		$result = 0;

		/**
		 * if the selected operator is (+) then call the add function located in the Calculator 
		 * class.
		 * 
		 */
		if ($operator == '+') {
			$result = $calculator->add();
		}

		/**
		 * if the selected operator is (-) then call the substract function located in the Calculator 
		 * class.
		 * 
		 */
		if ($operator == '-') {
			$result = $calculator->substract();
		}

		/**
		 * if the selected operator is (*) then call the multiply function located in the Calculator 
		 * class.
		 * 
		 */
		if ($operator == '*') {
			$result = $calculator->multiply();
		}
		var_dump($result);

	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h2>Calculator</h2>

	<form method="POST" action="">
		<input type="number" name="first_number">
		<input type="number" name="second_number">
		<select name="operator">
			<option value="">Select One</option>
			<option value="+">Add</option>
			<option value="-">Substract</option>
			<option value="*">Multiply</option>
		</select>

		<input type="submit" name="submit" value="Calculate">

	</form>

</body>
</html>