<?php
	if(isset($_POST["nom"]))
	{
		$a=4;
		$b=0;
		$e=0;
		$c=0;
		$l=0;
		$letras=array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','Ñ','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$nom=str_split($_POST["nom"]);
		$curp[3]=$nom[0];
		if(isset($_POST["apat"]))
		{
			$apat=str_split($_POST["apat"]);
			$curp[0]=$apat[0];
			$curp[1]=$apat[1];
			if(isset($_POST["amat"]))
			{
				$amat=str_split($_POST["amat"]);
				$curp[2]=$amat[0];
				if(isset($_POST["fecha"]))
				{
					$fecha=str_split($_POST["fecha"]);
					for($n=0;$n<6;$n++)
					{
						if(is_numeric($fecha[$n]))
						{
							$curp[$a]=$fecha[$n];
							$a++;
						}
						else
							echo'NO';
					}
					if(isset($_POST["fm"]))
					{
						$curp[10]=$_POST["fm"];
						if(isset($_POST["ciu"]))
						{
							$ciudad=str_split($_POST["ciu"]);
							$curp[11]=$ciudad[0];
							$curp[12]=$ciudad[1];
							if(isset($_POST["curp"]))
							{
								$cur=str_split($_POST["curp"]);
								$curp[13]=$cur[13];
								$curp[14]=$cur[14];
								$curp[15]=$cur[15];
								if(($curp[4]<=9)&&($curp[5]<=9))
									$curp[16]=0;
								else
									$curp[16]='A';
								array_change_key_case($curp,CASE_UPPER);
								for($g=0;$g<16;$g++)
								{
									for($b=0;$b<35;$b++)
									{
										if($letras[$b]==$curp[$e])
											$curpa[$e]=$b;
									}
									$e++;
								}
								for($n=18;$n>=3;$n--)
								{
									$miu[$c]=$n*$curpa[$c];
									if($c>0)
										$f=$f+$miu[$c];
									else
										$f=$miu[$c];
									$c++;
								}
								echo $f;
								$curp[17]=$f%10;
								echo $curp[17];
								for($g=0;$g<16;$g++)
								{
									if($curp[$g]==$cur[$g])
										$l++;
								}
								var_dump($curp);
								if($l==16)
									echo'correctamente correcto';
								else
									echo'creo que no';
							}
							else
								echo'Falta el curp';
							
						}
						else
							echo'No tienes sexo?';
					}
					else
						echo'No tienes sexo?';
				}
				else
					echo'Falta Fecha';
			}
			else
				echo'Falta Ape Mat';
		}
		else
			echo'Falta Ape Pat';
	}
	else
		echo'Ingresa nombre';
?>
