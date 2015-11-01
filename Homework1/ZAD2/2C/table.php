<?php

/*
  Като спазвате конвенциите за писане на PHP си направете контролер, който има следните методи:
  в) метод, който отпечатва в таблица ТОП 3 на любимите ви ястия. 
      За всяко ястие имате номер, наименование, снимка, основен продукт.
*/

	echo "<table style='border:1px pink dashed'>";
  	
  	echo "<tr>";
    	echo "<td>№</td>";
    	echo "<td>Name</td>";
    	echo "<td>Picture</td>";
    	echo "<td>Product</td>";
  	echo "</tr>";
  	
  	echo "<tr>";
    	foreach ($first as $key=> $value) {
    		echo "<td>$value</td>";
    	}
  	echo "</tr>";
  	
  	echo "<tr>";
    	foreach ($second as $key=> $value) {
    		echo "<td>$value</td>";
    	}
  	echo "</tr>";
  	
  	echo "<tr>";
    	foreach ($third as $key=> $value) {
    		echo "<td>$value</td>";
    	}
  	echo "</tr>";
  	
	echo "</table>";
?>
