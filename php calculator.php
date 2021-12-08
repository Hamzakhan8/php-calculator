<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="calculator.css">
	<title>php calculator</title>

</head>
<body >

<div class="container">
	<h1 align="center" style="color:white;">
		php Calculator
	</h1>
	<div>
		<form method="POST"  class="position">
	<input type="number" name="num1">
	<input type="number" name="num2">
	   <div>
	<select name="operation"  class="select">
		<option  value="add" >Add</option>
		<option value="sub">Sub</option>
		<option value="mul">Mul</option>
		<option value="div">Div</option>

	</select>
       </div>
	<input type="submit" name="submit" value="submit" class="btn btn-success">
       </form>
<div class="para_1">
	<p align="center"> 
		<?php 
		if (isset($_POST['submit'])){

			$num1=$_POST['num1'];
			$num2=$_POST['num2'];
			$operation=$_POST['operation'];
			switch ($operation) {
			case 'add':
					$sum=((int)$num1 + (int)$num2);
					echo "the addtion number is   {$sum} "  ;
					break;
				case 'sub':
					$sub=((int)$num1 - (int)$num2);
					echo "the sub number is  {$sub} " ;
					break;
					case 'mul':
					$mul=((int)$num1 * (int)$num2);
					echo "the mul number is  {$mul}  " ;
					break;
					case 'div':
					$div=((int)$num1 / (int)$num2);
					echo "the div number is {$div} "  ;
					break;
				
					


			}

		}





		?>
			
		
	</p>
	</div>
	</div>

</div>

</body>
</html>