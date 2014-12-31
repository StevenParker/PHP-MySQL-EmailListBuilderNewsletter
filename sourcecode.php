<?php

	class clientemaillist
	{
		var $clients;	
			
		function add_client($input_email, $email_list)
		{
			$this->clients[$input_email] += $email_list;
		}
		
		function remove_client($input_email, $email_list)
		{
			if($this->clients[$input_email] > $email_list)
			{
				$this->clients[$input_email] -= $email_list;
				return true;
			} 
			elseif ($this->clients[$input_email] == $email_list)
			{
				unset($this->clients[$input_email]);
				return true;
			}
			else
			{
				return false;
			}
		}
	}
		

?>
