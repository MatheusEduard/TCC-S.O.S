<?php

include "funcoes.php";
error_reporting(E_WARNING);
ini_set(“display_errors”, 1 );


?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora De IP</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="formu">
	<form method="post" action="calculadora.php?acao=calcular">
		<label class="titulo" for="ip">Informe o Endereço IP:</label>
		<br>
		<input class="insert1" type="text" name="ip">
		<br>
		<label class="titulo2" for="ip">Informe a Mascara:</label>
		<br>
		<input class="insert2" type="text" name="masc">
		<br>
		<input class="subm" type="submit" name="enviar" value="Enviar">
	</form>
</div>
<?php
if (isset($_GET['acao']) && $_GET['acao'] == 'calcular' ){
    $valido= verificaIPeMasc($_POST["ip"],$_POST["masc"]);
    $qtdSubRed=qtdSubRed($_POST["masc"]);
    $qtdHost=qtdHostIp($_POST["masc"]);
    $ipRede=redeip($_POST["ip"],$_POST["masc"]);
    $ipBrod=brodip($_POST["ip"],$_POST["masc"]);
    $primHost=primHostIp($_POST["ip"],$_POST["masc"]);
    $ultHost=ultHostIp($_POST["ip"],$_POST["masc"]);
    $mascDec=mascDec($_POST["masc"]);
    $classeIP="C";
    $tipIP=tipIP($_POST["ip"]);
    if($valido=="valor valido"){
?>
<div class="ips">
    <ul style="list-style-type: none;">
        <li class="tituloip">Quantidade de Sub-Redes Que Podem Ser Criadas: <?=$qtdSubRed?></li>
    </ul>
    <ul style="list-style-type: none;">
        <li class="tituloip2">Quantidade de IPs Host por Sub-Rede: <?=$qtdHost?></li>
    </ul>
    <ul style="list-style-type: none;">
        <li class="tituloip3">Mascara de Sub-rede em Formato Decimal: <?=$mascDec?></li>
    </ul>
    <ul style="list-style-type: none;">
        <li class="tituloip4">Clase do IP: <?=$classeIP?></li>
    </ul>
    <ul style="list-style-type: none;">
        <li class="tituloip5">Tipo de IP: <?=$tipIP?></li>
    </ul>

    <ul style="list-style-type: none;">
        <li class="tituloip6">IPs das Sub-Redes Gerados:</li>
    <?php
        for($i=0;$i<$qtdSubRed;$i++){
			echo "<li class='subtitulo'> Sub-Rede: ".$i."</li>";
            echo "<li class='subtitulo2'> IP de Rede: ".$ipRede[$i]."</li>";
            echo "<li class='subtitulo3'> IP de Broadcast: ".$ipBrod[$i]."</li>";
            echo "<li class='subtitulo4'> Primeiro IP Host: ".$primHost[$i]."</li>";
            echo "<li class='subtitulo5'> Ultimo IP Host: ".$ultHost[$i]."</li>";
    }
    ?>
    </ul>
</div>
  <?php
}else{
        echo"Algum Valor Inserido É Inválido!!";
        echo '<meta http-equiv="refresh" content="4;url=calculadora.php">'; 
    }
}




?>
</body>
</html>
