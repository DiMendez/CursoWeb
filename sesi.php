<!DOCTYPEhtml>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewpiort" content="width=device-width, initial-scale=1"/>
		<title>Seguridad</title>
	</head>
	<body>
		<?php
			if(isset($_COOKIE["HSM"]))
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
				if($cad[2]=='p'&&$cad[3]=='o'&&$cad[4]=='y')
				{
					if(isset($_POST["usuario"]))
					{
						$usu=htmlentities( $_POST["usuario"] );
						if(isset($_POST["contra"]))
						{
							$cont=htmlentities( $_POST["contra"] );
							session_start();
							echo'<a href="Cifra.html">Práctica 1 de cifra</a><br/>';
							echo'<a href="Cifra2.html">Práctica 2 de cifra</a><br/>';
							echo'<a href="Cifra3.html">Práctica 3 de cifra</a><br/>';
							echo'<a href="Cifra4.html">Práctica 4 de cifra</a><br/>';
							echo'<a href="Hash1.html">Práctica 1 de Hash</a><br/>';
							echo'<a href="Hash2.html">Práctica 2 de Hash</a><br/>';
							echo'<a href="Iso.html">Práctica de ISBN</a><br/>';
							echo'<a href="visa.html">Verificación de VISA</a><br/>';
							echo'<a href="curp.html">Verificación de CURP</a>';
						}
					}
					setcookie("HSM","", time() - 3600);
					setcookie("HSM","45thldm");
				}
				else
					echo'Cuidado1';
			}
			else
				echo'Cuidado2';
		?>
	</body>
</html>
