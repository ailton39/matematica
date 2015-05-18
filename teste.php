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
		}else{echo '<tr><td>1)<font color="#FF0000"> Errado 6X6 ≠'.$a.' , 6X6=36 !</font></td>';}
		
		if(isset($e)&& $e=='81'){
		echo '<td>5)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>5)<font color="#FF0000"> Errado 7X9 ≠'.$e.' , 7X9=48 !</font></td>';}
		
		if(isset($i)&& $i=='48'){
		echo '<td>9)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>9)<font color="#FF0000"> Errado 7X9 ≠'.$i.' , 7X9=48 !</font></td>';}
		
		if(isset($n)&& $n=='48'){
		echo '<td>13)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>13)<font color="#FF0000"> Errado 7X9 ≠'.$n.' , 7X9=48 !</font></td>';}
		
		if(isset($r)&& $r=='48'){
		echo '<td>17)<font color="#33CC00">Certo 7X9=48!</font></td></tr>';
		}else{echo '<td>17)<font color="#FF0000"> Errado 7X9 ≠'.$r.' , 7X9=48 !</font></td></tr>';}
	
		//coluna 1 fim
		//coluna 2 inicio
	if(isset($b)&& $b=='63'){
		echo '<tr><td>2)<font color="#33CC00">Certo 7X9=63!</font></td>';
		}else{echo '<tr><td>2)<font color="#FF0000"> Errado 7X9 ≠'.$b.' , 7X9=63 !</font></td>';}
		
		if(isset($f)&& $f=='48'){
		echo '<td>6)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>6)<font color="#FF0000"> Errado 7X9 ≠'.$f.' , 7X9=48 !</font></td>';}
		
		if(isset($j)&& $j=='48'){
		echo '<td>10)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>10)<font color="#FF0000"> Errado 7X9 ≠'.$j.' , 7X9=48 !</font></td>';}
		if(isset($o)&& $o=='48'){
		echo '<td>14)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>14)<font color="#FF0000"> Errado 7X9 ≠'.$o.' , 7X9=48 !</font></td>';}
		
		if(isset($s)&& $s=='48'){
		echo '<td>18)<font color="#33CC00">Certo 7X9=48!</font></td></tr>';
		}else{echo '<td>18)<font color="#FF0000"> Errado 7X9 ≠'.$s.' , 7X9=48 !</font></td></tr>';}
			//coluna 2 fim
			//coluna 3 inicio
		
	if(isset($c)&& $c=='35'){
		echo '<tr><td>3)<font color="#33CC00">Certo 5X7=35!</font></td>';
		}else{echo '<tr><td>3)<font color="#FF0000"> Errado 5X7 ≠'.$c.' , 5X7=35 !</font></td>';}
		
		if(isset($g)&& $g=='48'){
		echo '<td>7)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>7)<font color="#FF0000"> Errado 7X9 ≠'.$g.' , 7X9=48 !</font></td>';}
		 
		 if(isset($l)&& $l=='48'){
		echo '<td>11)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>11)<font color="#FF0000"> Errado 7X9 ≠'.$l.' , 7X9=48 !</font></td>';}
		
		if(isset($p)&& $p=='48'){
		echo '<td>15)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>15)<font color="#FF0000"> Errado 7X9 ≠'.$p.' , 7X9=48 !</font></td>';}
		if(isset($t)&& $t=='160'){
		echo '<td>19)<font color="#33CC00">Certo 7X9=48!</font></td></tr>';
		}else{echo '<td>19)<font color="#FF0000"> Errado 7X9 ≠'.$t.' , 7X9=48 !</font></td></tr>';}
		
	//coluna 3 fim
			//coluna 4 inicio
		
	if(isset($d)&& $d=='135'){
		echo '<tr><td>4)<font color="#33CC00">Certo 45X3=135!</font></td>';
		}else{echo '<tr><td>4)<font color="#FF0000"> Errado 45X3 ≠'.$b.' , 45X3=135 !</font></td>';}
			
	if(isset($h)&& $h=='48'){
		echo '<td>8)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>8)<font color="#FF0000"> Errado 7X9 ≠'.$h.' , 7X9=48 !</font></td>';}
				
	if(isset($m)&& $m=='48'){
		echo '<td>12)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>12)<font color="#FF0000"> Errado 7X9 ≠'.$m.' , 7X9=48 !</font></td>';}
		
	if(isset($q)&& $q=='48'){
		echo '<td>16)<font color="#33CC00">Certo 7X9=48!</font></td>';
		}else{echo '<td>16)<font color="#FF0000"> Errado 7X9 ≠'.$q.' , 7X9=48 !</font></td>';}
	
	if(isset($u)&& $u=='268'){
		echo '<td>20)<font color="#33CC00">Certo 7X9=48!</font></td></tr>';
		}else{echo '<td>20)<font color="#FF0000"> Errado 7X9 ≠'.$u.' , 7X9=48 !</font></td></tr>';}
	
	//coluna 4 fim
	
							
		}?>
  
</table>
 </div>
 </div>
</center>
</body>
</html>