<?php

include "funcoes.php";


echo "Bem vindo a loteria, informe o jogo desejado:\n \n";
echo "MegaSena(1). \n";
echo "Lotofácil(2). \n";
echo "Quina(3). \n";
echo "Lotomania(4). \n";
echo "\n \n";

$numjogo = trim(fgets(STDIN));

while ($numjogo != 1 and $numjogo != 2  and $numjogo  != 3 and $numjogo != 4) {
	echo "Por favor, informe um número válido:\n";
	$numjogo = trim(fgets(STDIN));
}

echo "Informe quantas apostas você gostaria de fazer:\n";

$qntdApostas = trim(fgets(STDIN));

while ($qntdApostas <= 0) {
	echo "Por favor, informe um número válido:\n";
	$qntdApostas = trim(fgets(STDIN));
}


switch ($numjogo) {
	case 1:
		echo "Informe quantos números você deseja(6-15):\n";

		$qntdDezenas = trim(fgets(STDIN));

		while ($qntdDezenas > 15 or $qntdDezenas < 6) {
			echo "Informe um número válido,por favor:\n";
			$qntdDezenas = trim(fgets(STDIN));	
		}
	break;

	case 2:
		echo "Informe quantos números você deseja(15-18):\n";

		$qntdDezenas = trim(fgets(STDIN));

		while ($qntdDezenas > 18 or $qntdDezenas < 15) {
			echo "Informe um número válido,por favor:\n";
			$qntdDezenas = trim(fgets(STDIN));	
		}
	break;

	case 3:
		echo "Informe quantos números você deseja(5-15):\n";

		$qntdDezenas = trim(fgets(STDIN));

		while ($qntdDezenas > 15 or $qntdDezenas < 5) {
			echo "Informe um número válido,por favor:\n";
			$qntdDezenas = trim(fgets(STDIN));	
		}
	break;

	case 4:
		echo "Informe quantos números você deseja(Aposta única : 50):\n";

		$qntdDezenas = trim(fgets(STDIN));

		while ($qntdDezenas != 50) {
			echo "Informe um número válido,por favor:\n";
			$qntdDezenas = trim(fgets(STDIN));	
		}
	break;

}
echo "\n \n";
echo "Gerando suas apostas, porfavor aguarde...";
sleep(4);
loteria($numjogo,$qntdApostas,$qntdDezenas);
echo "Obrigado por jogar, até um outro dia! \n \n";

