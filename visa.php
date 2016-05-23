<?php
	if(isset($_POST["visa"]))
	{
		$cad=str_split($_POST["visa"]);
		$e=0;
		$c=0;
		$mau=0;
		function modulo($a)
		{
			$r=$a-(10*floor($a/10));
			return $r;
		}
		if($cad[0]==4)
		{
			for($n=0;$n<15;$n++)
			{
				$b=$n%2;
				//-(2x1+x2+2x3+x4+...+x14+2x15) -r (mod 10)
				if($b==0)
				{
					$miu[$c]=2*$cad[$n];
					if($miu[$c]>=10)
						$mau++;
					if($c>0)
						$f=$f+$miu[$c];
					else
						$f=$miu[$c];
					$c++;	
				}
				else
				{
					$d[$e]=$cad[$n];
					if($e>0)
						$g=$g+$d[$e];
					else
						$g=$d[$e];
					$e++;
				}
				
			}
			echo $f." ".$g." ".$mau;
			$res=-($f+$g)-$mau;
			$re=modulo($res);
			echo $re;
			if($re==$cad[15])
				echo 'es correcto';
			else
				echo' nop';
		}
		else
			echo'Es incorrecto';
	}
	else
		echo 'Falta visa';
?>
