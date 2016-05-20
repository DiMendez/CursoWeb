<?php
	$cadad=array();
	$a=1;
	if(isset($_POST["num"]))
	{
		$cad=str_split($_POST["num"]);
		if(isset($_POST["iso"]))
		{
			if($_POST["iso"]==10)
			{
				for($n=1;$n<9;$n++)
				{
					$b=$cad[$n-1]+($a*$cad[$n]);
					$cad[$n]=$b;
					$a++;
				}
				if ($cad[8]%11==$cad[9]%11)
					echo'Es Correcto';
				else
					echo'creo que esta mal';
			}
		}
		else
			echo'Falta algo';
	}
	else
		echo'Primero ingresa una cadena';
?>