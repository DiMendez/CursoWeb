<?php
/*	if(isset($_COOKIE["HSM"]))
	{
		$lla='rupa';
		$cad=str_split($_COOKIE["HSM"]);
		$n=strlen($lla);
		$m=count($cad);
		for($i=0;$i<$m;$i++)
		{
			$car=$cad[$i];
			$a=ord($car);
			$c=$a+($n-3);
			$d=utf8_encode($c);
			$b=chr($d);
			$cad[$i]=$b;
		}
		if($cad[2]=='u'&&$cad[3]=='i'&&$cad[4]=='m')
		{*/
			if(isset($_POST["num"]))
			{
				$cu=$_POST["num"];
				$cu=htmlentities( $_POST["num"] );
				if(isset($_POST["check"]))
				{
					$cu1=substr($cu,0,3);
					$cu2=substr($cu,3,3);
					$cu3=substr($cu,6,3);
					echo $cu2.$cu3.$cu1;
				}else{
					$cu1=substr($cu,0,3);
					$cu2=substr($cu,3,3);
					$cu3=substr($cu,6,3);
					echo $cu3.$cu1.$cu2;
				}
				echo'<br/><a href="opc.php">Regresar a inicio</a>';
				echo'<br/><a href="Cifra.html">Regresar</a>';
				setcookie("HSM","deonx34");
			}
			else
				echo'Primero mete el numero de cuenta';
		
	
?>
