<?php
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$value=$_POST['value'];
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($value == 'add'){
			$ans = $num1 + $num2;
			$x = $num1.' + '.$num2.' = '.$ans;
		}
		elseif($value == 'sub'){
			$ans = $num1 - $num2;
			$x = $num1.' - '.$num2.' = '.$ans;
		}
		elseif($value == 'mul'){
			$ans = $num1 * $num2;
			$x = $num1.' * '.$num2.' = '.$ans;
		}
		elseif($value == 'div'){
			$ans = $num1 / $num2;
			$x = $num1.' / '.$num2.' = '.$ans;
		}
	}
?>
<!DOCTYPE html>
<html lang="en-us">
	<head>
		<title>
			My Page!
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<?=$x?>
			<form action="calc.php" method="POST">
				Enter a Number: <input type="number" name="num1" required autofocus>
				<br>
				<br>
				Enter a Number: <input type="number" name="num2" required>
				<br>
				<br>
				<input type="radio" name="value" value="add"> ADD
				<br>
				<br>
				<input type="radio" name="value" value="sub"> SUB
				<br>
				<br>
				<input type="radio" name="value" value="mul"> MUL
				<br>
				<br>
				<input type="radio" name="value" value="div"> DIV
				<br>
				<br>
				<button type="submit"> SUBMIT! </button>
			</form>
	</body>
</html>