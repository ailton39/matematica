<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Documento sem título</title>
<style type="text/css">
#res{ width:1000px; height:100px; font-family:Verdana, Geneva, sans-serif; color:#000; font-size:13px;
font-weight:bold;}

</style>

</head>

<body>
<center>
<h3>Respostas corrigidas</h3>
<hr>
<div id="tudo">

<div id="res">
 <table width="1100" border="2px" bordercolor="#999999">
<?php if(isset($_POST['res'])&& $_POST['res']== 'Respostas'){
	@$a=$_POST['a']; //1
	@$b=$_POST['b']; //2
	@$c=$_POST['c']; //3
	@$d=$_POST['d']; //4
	@$e=$_POST['e']; //5
	@$f=$_POST['f']; //6
	@$g=$_POST['g']; //7
	@$h=$_POST['h']; //8
	@$i=$_POST['i']; //9
	@$j=$_POST['j']; //10
	@$l=$_POST['l']; //11
	@$m=$_POST['m']; //12
	@$n=$_POST['n']; //13
	@$o=$_POST['o']; //14
	@$p=$_POST['p']; //15
	@$q=$_POST['q']; //16
	@$r=$_POST['r']; //17
	@$s=$_POST['s']; //18
	@$t=$_POST['t']; //19
	@$u=$_POST['u']; //20
	
	
 
	if(isset($a)&& $a=='36'){
		echo '<tr ><td>1)<font color="#33CC00"> Certo 6x6=36!</font></td>';
		}else{echo '<tr><td>1)<font color="#FF0000"> Errado 6X6=36 !</font></td>';}
		
		if(isset($e)&& $e=='81'){
		echo '<td>5)<font color="#33CC00">Certo 9X9=81!</font></td>';
		}else{echo '<td>5)<font color="#FF0000"> Errado 9X9=81 !</font></td>';}
		
		if(isset($i)&& $i=='24'){
		echo '<td>9)<font color="#33CC00">Certo 3X8=24!</font></td>';
		}else{echo '<td>9)<font color="#FF0000"> Errado 3X8=24 !</font></td>';}
		
		if(isset($n)&& $n=='54'){
		echo '<td>13)<font color="#33CC00">Certo 9X6=54!</font></td>';
		}else{echo '<td>13)<font color="#FF0000"> Errado 9X6=54 !</font></td>';}
		
		if(isset($r)&& $r=='18'){
		echo '<td>17)<font color="#33CC00">Certo 6X3=18!</font></td></tr>';
		}else{echo '<td>17)<font color="#FF0000"> Errado 6X3=18 !</font></td></tr>';}
	
		//coluna 1 fim
		//coluna 2 inicio
	if(isset($b)&& $b=='63'){
		echo '<tr><td>2)<font color="#33CC00">Certo 7X9=63 !</font></td>';
		}else{echo '<tr><td>2)<font color="#FF0000"> Errado 7X9=63 !</font></td>';}
		
		if(isset($f)&& $f=='48'){
		echo '<td>6)<font color="#33CC00">Certo 6X8=48 !</font></td>';
		}else{echo '<td>6)<font color="#FF0000"> Errado 6X8=48 !</font></td>';}
		
		if(isset($j)&& $j=='32'){
		echo '<td>10)<font color="#33CC00">Certo 8X4=32 !</font></td>';
		}else{echo '<td>10)<font color="#FF0000"> Errado 8X4=32 !</font></td>';}
		if(isset($o)&& $o=='28'){
		echo '<td>14)<font color="#33CC00">Certo 4X7=28 !</font></td>';
		}else{echo '<td>14)<font color="#FF0000"> Errado 4X7=28 !</font></td>';}
		
		if(isset($s)&& $s=='36'){
		echo '<td>18)<font color="#33CC00">Certo 4X9=36!</font></td></tr>';
		}else{echo '<td>18)<font color="#FF0000"> Errado 4X9=36 !</font></td></tr>';}
			//coluna 2 fim
			//coluna 3 inicio
		
	if(isset($c)&& $c=='35'){
		echo '<tr><td>3)<font color="#33CC00">Certo 5X7=35!</font></td>';
		}else{echo '<tr><td>3)<font color="#FF0000"> Errado 5X7=35 !</font></td>';}
		
		if(isset($g)&& $g=='27'){
		echo '<td>7)<font color="#33CC00">Certo 3X9=27!</font></td>';
		}else{echo '<td>7)<font color="#FF0000"> Errado 3X9=27 !</font></td>';}
		 
		 if(isset($l)&& $l=='96'){
		echo '<td>11)<font color="#33CC00">Certo 12X8=96!</font></td>';
		}else{echo '<td>11)<font color="#FF0000"> Errado 12X8=96 !</font></td>';}
		
		if(isset($p)&& $p=='108'){
		echo '<td>15)<font color="#33CC00">Certo 9X12=108!</font></td>';
		}else{echo '<td>15)<font color="#FF0000"> Errado 9X12=108 !</font></td>';}
		
		if(isset($t)&& $t=='160'){
		echo '<td>19)<font color="#33CC00">Certo 32X5=160!</font></td></tr>';
		}else{echo '<td>19)<font color="#FF0000"> Errado 32X5=160 !</font></td></tr>';}
		
	//coluna 3 fim
			//coluna 4 inicio
		
	if(isset($d)&& $d=='135'){
		echo '<tr><td>4)<font color="#33CC00">Certo 45X3=135!</font></td>';
		}else{echo '<tr><td>4)<font color="#FF0000"> Errado 45X3=135 !</font></td>';}
			
	if(isset($h)&& $h=='301'){
		echo '<td>8)<font color="#33CC00">Certo 43X7=301!</font></td>';
		}else{echo '<td>8)<font color="#FF0000"> Errado 43X7=301 !</font></td>';}
				
	if(isset($m)&& $m=='200'){
		echo '<td>12)<font color="#33CC00">Certo 25X8=200!</font></td>';
		}else{echo '<td>12)<font color="#FF0000"> Errado 25X8=200 !</font></td>';}
		
	if(isset($q)&& $q=='288'){
		echo '<td>16)<font color="#33CC00">Certo 9X32=288!</font></td>';
		}else{echo '<td>16)<font color="#FF0000"> Errado 9X32=288 !</font></td>';}
	
	if(isset($u)&& $u=='268'){
		echo '<td>20)<font color="#33CC00">Certo 4X67=268!</font></td></tr>';
		}else{echo '<td>20)<font color="#FF0000"> Errado 4X67=268 !</font></td></tr>';}
	
	//coluna 4 fim
	
							
		}?>
  
</table>
 </div>
 </div>
</center>
</body>
</html>