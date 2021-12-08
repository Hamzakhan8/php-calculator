<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
	  
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>