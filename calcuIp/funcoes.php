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
            $rede[]=$subRede;
        }
    }elseif($masc="/25"){
        for($i=0;$i<2;$i++){
            
            for($i=0;$i<=127;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }elseif($masc="/26"){
        for($i=0;$i<4;$i++){
            
            for($i=0;$i<=63;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }elseif($masc="/27"){
        for($i=0;$i<8;$i++){
            
            for($i=0;$i<=31;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }elseif($masc="/28"){
        for($i=0;$i<16;$i++){
            
            for($i=0;$i<=15;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }elseif($masc="/29"){
        for($i=0;$i<32;$i++){
            
            for($i=0;$i<=7;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }elseif($masc="/30"){
        for($i=0;$i<64;$i++){
            
            for($i=0;$i<=3;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }elseif($masc="/31"){
        for($i=0;$i<128;$i++){
            
            for($i=0;$i<=1;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }elseif($masc="/32"){
        for($i=0;$i<256;$i++){
            
            for($i=0;$i<1;$i++){
                $subRede[$i]=$array_ip[0].".".$array_ip[1].".".$array_ip[2].".".$i;
            }
            $rede[]=$subRede;
        }
    }
    return $rede;
}

$rede= criaSubRedes("192.2.2.0","/30");
print_r($rede);



















?>