 
<?php
	//Запросить данные
    echo "Make your choise, input number 1 or 2 or 3 or 4 or 5.\n";
    
    //подключаем консоль ждем ввода
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

	//проверяем значение if
if ($number =1)
    {
        echo "You are the Man!";
    } 
 	//проверяемм значение if если первое условие не выполнененно   
elseif (($number > 2) && ($number < 4))
    {
        echo "OK :(";
    } 
	//выводим в случае когда первое и второе не выведенно
elseif($number =5)
	{ 
		echo "Are you from USSR?";
	}
	//глаголим когда не выполнены все условия.
else {
		echo "Ты Шо, братан, читай первую строку. Учи английский.\n";
    }
		