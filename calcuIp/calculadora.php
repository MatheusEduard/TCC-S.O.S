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
<form method="post" action="calculadora.php?acao=calcular">
    <label class="titulo" for="ip">Informe o Endereço IP:</label>
    <br>
    <input type="text" name="ip">
    <br>
    <label class="titulo" for="ip">Informe a Mascara:</label>
    <br>
    <input type="text" name="masc">
    <br>
    <input type="submit" name="enviar" value="Enviar">
</form>
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
        <ul style="list-style-type: none;">
<li class="titulo">Quantidade de Sub-Redes Que Podem Ser Criadas: <?=$qtdSubRed?></li>
</ul>
<ul style="list-style-type: none;">
<li class="titulo">Quantidade de IPs Host por Sub-Rede: <?=$qtdHost?></li>
</ul>
<ul style="list-style-type: none;">
<li class="titulo">Mascara de Sub-rede em Formato Decimal: <?=$mascDec?></li>
</ul>
<ul style="list-style-type: none;">
<li class="titulo">Clase do IP: <?=$classeIP?></li>
</ul>
<ul style="list-style-type: none;">
<li class="titulo">Tipo de IP: <?=$tipIP?></li>
</ul>
<tr>
<th>
<ul style="list-style-type: none;">
<li class="titulo">IPs de Rede:</li>
<?php
for($i=0;$i<$qtdSubRed;$i++){
    echo "<li class='subtitulo'>".$ipRede[$i]."</li>";
}
?>
</th>
<th>
</ul>
<ul style="list-style-type: none;">
<li class="titulo">IPs de Broadcast</li>
<?php
for($i=0;$i<$qtdSubRed;$i++){
    echo "<li class='subtitulo'>".$ipBrod[$i]."</li>";
}
?>
</th>
<th>
</ul>
<ul style="list-style-type: none;">
<li class="titulo">Primeiro IP Host Por Sub-Rede:</li>
<?php
for($i=0;$i<$qtdSubRed;$i++){
    echo "<li class='subtitulo'>".$primHost[$i]."</li>";
}
?>
</th>
<th>
</ul>
<ul style="list-style-type: none;">
<li class="titulo">Ultimo IP Host Por Sub-Rede:</li>
<?php
for($i=0;$i<$qtdSubRed;$i++){
    echo "<li class='subtitulo'>".$ultHost[$i]."</li>";
}
?>
</th>
</ul>
</tr>
<?php
 
}else{
        echo"Algum Valor Inserido É Inválido!!";
        echo '<meta http-equiv="refresh" content="4;url=calculadora.php">'; 
    }
}




?>
</body>
</html>