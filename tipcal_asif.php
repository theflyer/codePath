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

    .output {
        color:blue;
        border: 1px solid blue;
		width: 280px;
		height: 60px;
		padding-top: 10px;
		padding-left: 10px;
    }
	</style>

	</head>
	

<body>
	<div class= "screen">
    <div class="input">
    <h2>Tip Calculator</h2>
      <?php
          if(isset($_POST['subtotal']) && ((float)$_POST['subtotal']) > 0)
          {
              $tip = (float)$_POST["subtotal"] * (float)$_POST['Percentage'];
              $total = $tip + (float)$_POST["subtotal"];
          } else if(isset($_POST['subtotal']) && ((float)$_POST['subtotal']) <= 0)
          {
              $error = true;
          }
    ?>
    <form action="" method="POST">
        <span 
		<?php 
		if(isset($error) && $error) 
		echo 'style="color:red; font-weight:bold;"'?>>Bill subtotal: $</span>
		
        <input type="text" name="subtotal" value="<?php 
		if(isset($_POST['subtotal'])) 
		echo $_POST['subtotal']?>"><br>
		
		<tr>
	
        <td>Tip percentage:</td>
		<br></br>
	</tr>
        <?php
            if(isset($_POST['Percentage']))
                $df_in = (float)$_POST['Percentage'];
            else
                $df_in = .15;
				
            $per_Arr = array(".10", ".15", ".20");
			
            for($i = 0; $i < 3; $i++)
            {
                if($per_Arr[$i] == $df_in)
                    echo '<input type="radio" name="Percentage" value="'. $per_Arr[$i] .
                    '" checked>' . $per_Arr[$i] . '%';
                else
                    echo '<input type="radio" name="Percentage" value="'. $per_Arr[$i] .
                    '">' . $per_Arr[$i] . '%';
            }
        ?> 
		<br></br>
        <td><button type="submit">Submit</button></td></tr>
	   </form>
    
	 <?php
        if(isset($tip) && isset($total)){
			
		if (is_float($tip) && is_float($total))
        {
            echo '<div class="output">';
			echo "Tip: $" . number_format($tip, 2). "<br>";
            echo "Total: $" . number_format($total, 2);
			echo "</div> <br>";
        }

		}
    ?>
    </div>
	</div>
</body>
</html>