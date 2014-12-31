<?php

	class clientemaillist
	{
		var $clients;	
			
		function add_client($email, $email_list)
		{
			$this->clients[$email] += $email_list;
		}
		
		function remove_client($email, $email_list)
		{
			if($this->clients[$email] > $email_list)
			{
				$this->clients[$email] -= $email_list;
				return true;
			} 
			elseif ($this->clients[$email] == $email_list)
			{
				unset($this->clients[$email]);
				return true;
			}
			else
			{
				return false;
			}
		}
	}
		

?>
