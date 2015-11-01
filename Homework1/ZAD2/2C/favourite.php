<?php

	/*
	 Като спазвате конвенциите за писане на PHP си направете контролер, който има следните методи:
	 в) метод, който отпечатва в таблица ТОП 3 на любимите ви ястия. 
	   За всяко ястие имате номер, наименование, снимка, основен продукт.
	*/

	class Favourite extends CI_Controller
	{
		public function top()
		{
			$yammy = array(array());
			$yammy['first'] = array(1, 'Cake', "<img style='width:100px' src='http://calendars-birthdays.com/wp-content/uploads/2015/04/Birthday-Cake-Candles.jpeg'/>", 'chocolate');
			$yammy['second'] = array(2, 'Marshmallow', "<img style='width:100px' src='http://royceconfectusa.com/wp-content/uploads/2012/10/marshmallow_chocolate_sl.jpg'/>", 'sugar');
			$yammy['third'] = array(3, 'Ice-cream', "<img style='width:100px' src='http://www.real-results.co.uk/wp-content/uploads/icecream.jpg'", 'milk');
			$this->load->view("list", $yammy);
		}
	}
?>
