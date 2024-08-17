<?
/*
You can place here your functions and event handlers

AddEventHandler("module", "EventName", "FunctionName");
function FunctionName(params)
{
	//code
}
*/





//dev
function pre2($a='pre2 вызвана без текста'){

	$sapi = php_sapi_name();
	
	if ($sapi=='cli')
	{
		// Консольным запуск
		print_r($a);
		print_r("\n");
	}
	elseif (substr($sapi,0,3)=='cgi')
	{
		// Запуск скрипта в режиме cgi
		echo '<pre>';print_r($a);echo '</pre>';
	}
	
	elseif (substr($sapi,0,6)=='apache')
	{
		// Выполнение в качестве модуля Apache
		echo '<pre>';print_r($a);echo '</pre>';
	}
	else
	{
		// echo 'Работа в режиме '.$sapi;
		echo '<pre>';print_r($a);echo '</pre>';
	}
	
}

?>