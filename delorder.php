﻿echo include_once "<header.php>" ;
<body>  
<h1>Баскетбольный турнир</h1>   
<h2>Удаление данных</h2>  
<?php  

echo "<body bgcolor=#ADFF2F>";  


$nomer = $_REQUEST['nomer']; 
include_once 'config.php' ;
 $query = "DELETE FROM Turnir WHERE nomer=$nomer"; 
 
 $result = $handle->query($query);   
 
 if ($result) echo "Данные удалены";  if (!$result) 
	 echo "Ошибка удаления данных"; 
 
 echo "<p><a href='index.php'>Проведенные игры</a>";  ?> 
 </body> 
 </html> 