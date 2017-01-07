<!DOCTYPE>
<html>
	<head> <title> TIPCALC </title> 
	<style>
	div.screen{
		width: 1480px;
		height: 900px;
		background-color: #ffd32e;
		margin-top: 0px;
		margin: 0px,
	}
	div.input {
		width: 350px;
		height: auto;
		background-color:white;
		border: solid 2px black;
		margin: 0 auto;
		padding-top: 20px;
		padding-left: 50px;
		padding-bottom: 20px;
		font-family: arial;
		color: black;
	    
	}
	
	div.output {
		width: 280px;
		height: 100px;
		background-color:white;
		border: solid 2px blue;
		padding-top: 10px;
		padding-left: 10px;
		color: blue;
	    
	}
	</style>

	</head>
	

<body>
<div class ="screen">
	<div class="input">
	<h2>TIP CALCULATOR</h2>
	<form action = "" method="post">
		<tr>
			<td>BILL SUBTOTAL: </td>
			<td>
				<input type = "text" name="total" value="">
			</td>
			</tr>
			<br></br>
			<tr>
			<td>TIP Percentages: </td> 
			</tr>
			<br></br>
			<tr>
			<td><input type="radio" name="percentage" value="10">10%</td>
			<td><input type="radio" name="percentage" value="15">15%</td>
			<td><input type="radio" name="percentage" value="20">20%</td>
			</tr>
			<br></br>
		   <tr>
			   <td><button type="submit">Submit</button></td>
		   </tr>
		   <br></br>
		   <tr>
			   <td>
				
				   <?php
				   $t = $_POST['total'];
				   if ($t > 0 ){
				   $p = get_per();
					   $total_r = $t + $t * $p;
					   echo '<div class = "output">';
					 echo "Tip: $".$t * $p. "<br>";
					 echo "<br>";
					  echo "Total: $".$total_r;
					  echo '</div>';
				 } else {
					 echo "";
				 }
				   ?>
				
			   </td>
			  </tr>
		
	
	</form>
	<tr>
		<td>
		<?php
		function get_per(){
		   if ($_POST['percentage'] == "10"){
			   $r = .10;
		   }
		   else if ($_POST['percentage'] == "15"){
			   $r = .15;
		   }
		   else if ($_POST['percentage'] == "20"){
			   $r = .20;
		   }
		   return $r;
		}
			
		?>
		</td>
	</tr>
	</div>
</div>

</body>
</html>