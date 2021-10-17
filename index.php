<?php
$digitado =$_GET['num'];
$sorteio = rand(0 , 100);
if (isset($_GET['num'])){
	
if ($sorteio == $digitado){
    echo 'Parabens Seu Numero Foi o Sorteado <br> ';
}
else{
    echo 'Seu Numero nao foi o sorteado mais sorte na proxima <br> ';
}
echo 'O Numero Sorteado Foi  <br>';
echo $sorteio ;
echo '<br>';
echo 'O Numero Digitado Foi  <br>';
echo $digitado ;
echo '<br>';
}
else{
	echo '<form action="" method="get">
Digite um numero qualquer <br> <input type=number name=num><br>
<input class="bt-vd" type=submit value="USAR ESTES DADOS  ">
						</form>';
}
?>
