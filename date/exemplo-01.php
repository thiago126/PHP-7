<?php 
	
	echo "Tudo minusculo</br>";
	echo date("d/m/y");
	echo "</br></br>";
	echo "Tudo maiusculo</br>";
	echo date("D/M/Y");
	echo "</br></br>";
	echo "Tudo minusculo</br>";
	echo date("h:i:s");
	echo "</br></br>";
	echo "Tudo maiusculo</br>";
	echo date("H:I:S");
	echo "</br></br>";

	echo date("d/m/Y H:i:s", 1552888380);
	echo "</br>";
	echo time();

	// Modifica a zona de tempo a ser utilizada. Disnovível desde o PHP 5.1
	date_default_timezone_set('UTC');
	echo "</br></br>";

	// Exibe alguma coisa como: Monday
	echo date("l");
	echo "</br></br>";

	// Exibe alguma coisa como: Monday 8th of August 2005 03:12:46 PM
	echo date('l jS \of F Y h:i:s A');
	echo "</br></br>";

	// Exibe: July 1, 2000 is on a Saturday
	echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
	echo "</br></br>";

	/* utiliza as constantes do parâmetro de formato */
	// Exibe alguma coisa como: Mon, 15 Aug 2005 15:12:46 UTC
	echo date(DATE_RFC822);
	echo "</br></br>";

	// Exibe alguma coisa como: 2000-07-01T00:00:00+00:00
	echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
	echo "</br></br>";

	//Y- exibe o campo ano completo. Ex: 2019.
	//y- exibe apenas os dois ultimos algarismo do campo ano. Ex 19.
	//M- exibe as 3 primeiras letras do mês. Ex feb.
	//m-exibe o número correspondente do mês. Ex 02.
	//D- exibe as 3 primeiras letras do dia da semana. Ex Mon.
	//d- exibe o dia do mês. Ex 12.
	// H e h - Exibem a hora.
	// I - Exibe 1 se for horario de verão, 0 caso contrario.
	//i - Exibe o minuto
	//S - Sufixo ordinal para o dia do mes. Ex 12th.
	//s - Exibe os segundos

 ?>