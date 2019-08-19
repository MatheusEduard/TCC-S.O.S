<?php
function divideIP($ip){
$array_ip = explode(".",$ip);
return $array_ip;
}
//$ip ="192.65.100.0";
//$aa=divideIP($ip);
//print_r($aa);
function verificaIPeMasc($ip,$masc){
    $valida="valor valido";
    $array_ip = divideIP($ip);
if(count($array_ip)==4 and $masc=="/24" or $masc=="/25" or $masc=="/26" or $masc=="/27" or $masc=="/28" or $masc=="/29" or$masc=="/30" or $masc=="/31" or $masc=="/32"){
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
$ip ="255.255.100.0";
$validacao=verificaIPeMasc($ip,"/34");
echo $validacao;
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
//$rede= brodip("192.2.2.0","/28");
//print_r($rede);

function qtdSubRed($masc){
    $qtdSubRed=0;
    if($masc=="/24"){
        $qtdSubRed=1;
        
    }elseif ($masc=="/25") {
        $qtdSubRed=2;   
    
    }elseif ($masc=="/26") {
        $qtdSubRed=4;  
    
    }elseif ($masc=="/27") {
        $qtdSubRed=8;    
        
    }elseif ($masc=="/28") {
        $qtdSubRed=16;   
        
    }elseif ($masc=="/29") {
        $qtdSubRed=32;    

    }elseif ($masc=="/30") {
        $qtdSubRed=64;   

    }elseif ($masc=="/31") {
        $qtdSubRed=128;

    
    }elseif ($masc=="/32") {
        $qtdSubRed=256;

    }
    
    return $qtdSubRed;
}
//$rede= qtdSubRed("/28");
//print_r($rede);

function qtdHostIp($masc){
    
$qtdHostIp=0;

if($masc=="/24"){
    $qtdHostIp=254;
    
}elseif ($masc=="/25") {
    $qtdHostIp=126;   

}elseif ($masc=="/26") {
    $qtdHostIp=62;  

}elseif ($masc=="/27") {
    $qtdHostIp=30;    
    
}elseif ($masc=="/28") {
    $qtdHostIp=14;   
    
}elseif ($masc=="/29") {
    $qtdHostIp=6;    

}elseif ($masc=="/30") {
    $qtdHostIp=2;   

}elseif ($masc=="/31") {
    $qtdHostIp=2;


}elseif ($masc=="/32") {
    $qtdHostIp=1;

}

return $qtdHostIp;
}

//$rede= qtdHostIp("/28");
//print_r($rede);

function primHostIp($ip,$masc){
    $primHostIp= array();
    $subRede=criaSubRedes($ip,$masc);
    if($masc=="/24"){
        for ($i=0; $i <1 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][1]);
        }
    }elseif ($masc=="/25") {
        for ($i=0; $i <2 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][1]);
        }
    }elseif ($masc=="/26") {
        for ($i=0; $i <4 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][1]);
        }
    }elseif ($masc=="/27") {
        for ($i=0; $i <8 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][1]);
        }    
    }elseif ($masc=="/28") {
        for ($i=0; $i <16 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][1]);
        }
        
    }elseif ($masc=="/29") {
        for ($i=0; $i <32 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][1]);
        }
    }elseif ($masc=="/30") {
        for ($i=0; $i <64 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][1]);
        }
    }elseif ($masc=="/31") {
        for ($i=0; $i <128 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][0]);
        }
    }elseif ($masc=="/32") {
        for ($i=0; $i <256 ; $i++) { 
            array_unshift($primHostIp,$subRede[0][$i][0]);
        }
    }
    $primHostIp = array_reverse($primHostIp);
    return $primHostIp;
}
//$rede= primHostIp("192.2.2.0","/31");
//print_r($rede);
function ultHostIp($ip,$masc){
    $ultHostIp= array();
    $subRede=criaSubRedes($ip,$masc);
    if($masc=="/24"){
        for ($i=0; $i <1 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][count($subRede[0][$i])-2]);
        }
    }elseif ($masc=="/25") {
        for ($i=0; $i <2 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][count($subRede[0][$i])-2]);
        }
    }elseif ($masc=="/26") {
        for ($i=0; $i <4 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][count($subRede[0][$i])-2]);
        }
    }elseif ($masc=="/27") {
        for ($i=0; $i <8 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][count($subRede[0][$i])-2]);
        }    
    }elseif ($masc=="/28") {
        for ($i=0; $i <16 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][count($subRede[0][$i])-2]);
        }
        
    }elseif ($masc=="/29") {
        for ($i=0; $i <32 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][count($subRede[0][$i])-2]);
        }
    }elseif ($masc=="/30") {
        for ($i=0; $i <64 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][count($subRede[0][$i])-2]);
        }
    }elseif ($masc=="/31") {
        for ($i=0; $i <128 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][count($subRede[0][$i])-1]);
        }
    }elseif ($masc=="/32") {
        for ($i=0; $i <256 ; $i++) { 
            array_unshift($ultHostIp,$subRede[0][$i][0]);
        }
    }
    $ultHostIp = array_reverse($ultHostIp);
    return $ultHostIp;
}
//$rede= ultHostIp("192.2.2.0","/26");
//print_r($rede);

function mascDec($masc){
    
    $mascDec=0;
    
    if($masc=="/24"){
        $mascDec="255.255.255.0";
        
    }elseif ($masc=="/25") {
        $mascDec="255.255.255.128";   
    
    }elseif ($masc=="/26") {
        $mascDec="255.255.255.192";  
    
    }elseif ($masc=="/27") {
        $mascDec="255.255.255.224";    
        
    }elseif ($masc=="/28") {
        $mascDec="255.255.255.240";   
        
    }elseif ($masc=="/29") {
        $mascDec="255.255.255.248";    
    
    }elseif ($masc=="/30") {
        $mascDec="255.255.255.252";   
    
    }elseif ($masc=="/31") {
        $mascDec="255.255.255.254";
    
    
    }elseif ($masc=="/32") {
        $mascDec="255.255.255.255";
    
    }
    return $mascDec;
}
?>
