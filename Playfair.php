<?php
	$n=0;
	$m=0;
	if(isset($_POST["texto"]))
	{	
		$tex=str_split($_POST["texto"]);
		$a=count($tex);
		echo $a;
		print_r($tex);
		echo'<br/>';
		if(isset($_POST["si"]))
		{
			if(isset($_POST["num"]))
			{
				$nu=$_POST["num"];
				echo '<table><tr>';
				for($x=0; $x<($a/$nu)+2; $x++)
				{
					$b=array_slice($tex,$n,$nu);
					echo '<td>';
					foreach($b as $c)
						echo $c.'<br/>';
					echo'</td>';
					$n+=$nu;
					echo
				}
				echo '</tr></table>';
			}
		}
		else
		{
			if(isset($_POST["num"]))
			{
				$nu=$_POST["num"];
				echo '<table><tr>';
				for($x=0; $x<($a/$nu)+2; $x++)
				{
					$b=array_slice($tex,$n,$nu);
					echo '<td>';
					foreach($b as $c)
						echo $c.'<br/>';
					echo'</td>';
					$n+=$nu;
					echo
				}
				echo '</tr></table>';
			}
		}
	}
	else
		echo'Primero tienes que meter un texto';
?>
