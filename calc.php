<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Calculator</title>
</head>
<body>
<h1>PHP Calculator</h1>
<form action="" method="post">
<input type="text" id="num1" name="num1" placeholder="Enter first number:">
<select id="operation" name="operation">
<option value="add">+</option>
<option value="subtract">-</option>
<option value="multiply">*</option>
<option value="divide">/</option>
</select>
<input type="text" id="num2" name="num2" placeholder="Enter second number:">
<input type="submit" value="Calculate">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"]; 
if (!is_numeric($num1) || !is_numeric($num2)) {
echo "<p>Please enter valid numeric values for both numbers.</p>";
} elseif ($operation == "divide" && $num2 == 0) {
echo "<p>Error: Division by zero is not allowed.</p>";
} else { 
switch ($operation) {
case "add":
$result = $num1 + $num2;
echo "<p>Result: $num1 + $num2 = $result</p>";
break;
case "subtract":
$result = $num1 - $num2;
echo "<p>Result: $num1 - $num2 = $result</p>";
break;
case "multiply":
$result = $num1 * $num2;
echo "<p>Result: $num1 * $num2 = $result</p>";
break;
case "divide":
$result = $num1 / $num2;
echo "<p>Result: $num1 / $num2 = $result</p>";
break;
default:
echo "<p>Invalid operation selected.</p>";
}
}
}
?>
</body>
</html>
<head>