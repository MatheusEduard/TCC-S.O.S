<?php
function divideIP($ip){
$array_ip = explode(".",$ip);
return $array_ip;
}
//$ip ="192.65.100.0";
//$aa=divideIP($ip);
//print_r($aa);
function verificaIP($ip){
    $valida="valor valido";
    $array_ip = divideIP($ip);
if(count($array_ip)==4){
    for($i=0;$i<=count($array_ip);$i++){
        if($array_ip[$i]>255){
            $valida="valor invalido";
        }
      }
    }else{
        $valida="valor invalido";
    }
    return $valida;
}
//$ip ="255.655.100.0";
//$validacao=verificaIP($ip);
//echo $validacao;
function criaSubRedes($ip,$masc){
    $array_ip=divideIP($ip);
    $rede=array();
    $subRede=array();
    
    if($masc=="/24"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,256);
        }
    }elseif($masc=="/25"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,128);
        }
    }elseif($masc=="/26"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,64);
        }
    }elseif($masc=="/27"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,32);
        }
    }elseif($masc=="/28"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,16);
        }
    }elseif($masc=="/29"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,8);
        }
    }elseif($masc=="/30"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,4);
        }
    }elseif($masc=="/31"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<=255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,2);
        }
    }elseif($masc=="/32"){
        for($i=0;$i<1;$i++){
            
            for($i=0;$i<255;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=array_chunk($subRede,1);
        }
    }
    return $rede;
}
//$rede= criaSubRedes("192.2.2.0","/32");
//print_r($rede);

function redeip($ip,$masc){
    $redeip= array();
    $subRede=criaSubRedes($ip,$masc);

    if($masc=="/24"){
        for ($i=0; $i <1 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }
    }elseif ($masc=="/25") {
        for ($i=0; $i <2 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }
    }elseif ($masc=="/26") {
        for ($i=0; $i <4 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }
    }elseif ($masc=="/27") {
        for ($i=0; $i <8 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }    
    }elseif ($masc=="/28") {
        for ($i=0; $i <16 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }
        
    }elseif ($masc=="/29") {
        for ($i=0; $i <32 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }
    }elseif ($masc=="/30") {
        for ($i=0; $i <64 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }
    }elseif ($masc=="/31") {
        for ($i=0; $i <128 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);
        }
    }elseif ($masc=="/32") {
        for ($i=0; $i <256 ; $i++) { 
            array_unshift($redeip,$subRede[0][$i][0]);

        }
    }
    $redeip = array_reverse($redeip);
    return $redeip;
}

//$rede= redeip("192.2.2.0","/28");
//print_r($rede);

function brodip($ip,$masc){
    $brodip= array();
    $subRede=criaSubRedes($ip,$masc);

    if($masc=="/24"){
        for ($i=0; $i <1 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }
    }elseif ($masc=="/25") {
        for ($i=0; $i <2 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }
    }elseif ($masc=="/26") {
        for ($i=0; $i <4 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }
    }elseif ($masc=="/27") {
        for ($i=0; $i <8 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }    
    }elseif ($masc=="/28") {
        for ($i=0; $i <16 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }
        
    }elseif ($masc=="/29") {
        for ($i=0; $i <32 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }
    }elseif ($masc=="/30") {
        for ($i=0; $i <64 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }
    }elseif ($masc=="/31") {
        for ($i=0; $i <128 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);
        }
    }elseif ($masc=="/32") {
        for ($i=0; $i <256 ; $i++) { 
            $brodip[]=end($subRede[0][$i]);

        }
    }
    
    return $brodip;
}

$rede= redebrod("192.2.2.0","/28");
print_r($rede);
?>
