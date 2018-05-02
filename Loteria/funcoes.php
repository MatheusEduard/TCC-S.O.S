<?php 

function megaSena($num){
	$numeros = [];

	for ($i=0; $i <$num; $i++){ 
		
		do{
			$numero = rand(1,60);
		}while(in_array($numero, $numeros));

		$numeros[] = $numero;
	}
	sort($numeros);
	for ($i=0; $i <$num ; $i++) { 
		echo $numeros[$i];
		echo "\n";
	}
}
function lotofacil($num){
	$numeros = [];

	for ($i=0; $i <$num; $i++){ 
		
		do{
			$numero = rand(1,25);
		}while(in_array($numero, $numeros));

		$numeros[] = $numero;
	}
	sort($numeros);
	for ($i=0; $i <$num ; $i++) { 
		echo $numeros[$i];
		echo "\n";
	}
}

function quina($num){
	$numeros = [];

	for ($i=0; $i <$num; $i++){ 
		
		do{
			$numero = rand(1,80);
		}while(in_array($numero, $numeros));

		$numeros[] = $numero;
	}
	sort($numeros);
	for ($i=0; $i <$num ; $i++) { 
		echo $numeros[$i];
		echo "\n";
	}
}

function lotomania($num){
	$numeros = [];

	for ($i=0; $i <$num; $i++){ 
		
		do{
			$numero = rand(1,100);
		}while(in_array($numero, $numeros));

		$numeros[] = $numero;
	}
	sort($numeros);
	for ($i=0; $i <$num ; $i++) { 
		echo $numeros[$i];
		echo "\n";
	}
}

//$x = megaSena(6);

//Tentativa de fazer um substituto para o in_array, porem esta repetindo e eu não sei porque, desculpa
function in_arrayJr($num, $array){
	$existe = false;
	
	for ($i=0; $i <(count($array)-1) ; $i++) { 
		if ($array[$i] == $num) {
			$existe = true;
		}
	}
	return $existe;
}

//$array =array(1,2,3,4,5);

//var_dump(in_array(1,$array));

function loteria($numjogo,$qntdApostas,$qntdDezenas){
	switch ($numjogo) {
		case 1:

			echo "Os seus Números são:\n \n";
			for ($i=1; $i <=$qntdApostas ; $i++) {
				echo $i."° Aposta:\n";
				echo "\n"; 
				megaSena($qntdDezenas);
				echo "\n";
			}

		$valorAposta = precoApostaLoteria((float)$numjogo,$qntdDezenas);
			$valorTotal = $valorAposta*$qntdApostas;
			$valorTotal = number_format($valorTotal, 2, ',', '.');
			echo "O preço total foi de: R$".$valorTotal."\n \n";

		break;

		case 2:

			echo "Os seus Números são:\n";
			for ($i=1; $i <=$qntdApostas ; $i++) {
				echo $i."° Aposta:\n";
				echo "\n"; 
				lotofacil($qntdDezenas);
				echo "\n";
			}
			$valorAposta = precoApostaLoteria($numjogo,$qntdDezenas);
			$valorTotal = $valorAposta*$qntdApostas;
			$valorTotal = number_format($valorTotal, 2, ',', '.');
			echo "O preço total foi de: R$".$valorTotal."\n \n";

		break;

		case 3:

			echo "Os seus Números são:\n";
			for ($i=1; $i <=$qntdApostas ; $i++) {
				echo $i."° Aposta:\n";
				echo "\n"; 
				quina($qntdDezenas);
				echo "\n";
			}
			$valorAposta = precoApostaLoteria($numjogo,$qntdDezenas);
			$valorTotal = $valorAposta*$qntdApostas;
			$valorTotal = number_format($valorTotal, 2, ',', '.');
			echo "O preço total foi de: R$".$valorTotal."\n \n";

		break;

		case 4:

			echo "Os seus Números são:\n";
			for ($i=1; $i <=$qntdApostas ; $i++) {
				echo $i."° Aposta:\n";
				echo "\n"; 
				lotomania($qntdDezenas);
				echo "\n";
			}
			$valorAposta = precoApostaLoteria($numjogo,$qntdDezenas);
			$valorTotal = $valorAposta*$qntdApostas;
			$valorTotal = number_format($valorTotal, 2, ',', '.');
			echo "O preço total foi de: R$".$valorTotal."\n \n";
			

		break;


		
	}
}


//loteria(4,1,50);

function precoApostaLoteria($numjogo,$qntdApostas){

	switch ($numjogo) {
		case 1:

			switch ($qntdApostas) {
				case 6:
				$valor = 3.50;
					
					break;

					case 7:
				$valor = 24.50;
					
					break;

					case 8:
				$valor = 98.00;
					
					break;

					case 9:
				$valor = 294.00;
					
					break;

					case 10:
				$valor = 735.00;
					
					break;

					case 11:
				$valor = 1617.00;
					
					break;

					case 12:
				$valor = 3234.00;
					
					break;

					case 13:
				$valor = 6006.00;
					
					break;

					case 14:
				$valor = 10510.50;
					
					break;

					case 15:
				$valor = 17517.50;
					
					break;

			}
			
			break;

			case 2:
				switch ($qntdApostas) {
					case 15:
					$valor = 2.00;
						
						break;

						case 16:
					$valor = 32.00;
						
						break;

						case 17:
					$valor = 272.00;
						
						break;

						case 18:
					$valor = 1632.00;
						
						break;
				}
				break;

			case 3:
				switch ($qntdApostas) {
					case 5:
					$valor = 1.50;	
						break;

						case 6:
					$valor = 9.00;	
						break;

						case 7:
					$valor = 31.50;	
						break;

						case 8:
					$valor = 84.00;	
						break;

						case 9:
					$valor = 189.00;	
						break;

						case 10:
					$valor = 378.00;	
						break;

						case 11:
					$valor = 693.00;	
						break;

						case 12:
					$valor = 1188.00;	
						break;

						case 13:
					$valor = 1930;	
						break;

						case 14:
					$valor = 3003.00;	
						break;

						case 5:
					$valor = 4504.50;	
						break;

				}
				break;
			case 4:

				switch ($qntdApostas) {
					case 50:
						$valor = 1.50;
						break;

				}
				break;


	}
	
	return $valor;
}
//$y=3.50;
//$x = number_format((float)$y, 2, ',', '.');
//echo $x;

			//$valorAposta = 3.50;
			//$valorTotal = $valorAposta*2;
			//$valorTotal = number_format($valorTotal, 2, ',', '.');
			//echo "O preço total foi de: R$".$valorTotal."\n \n";


