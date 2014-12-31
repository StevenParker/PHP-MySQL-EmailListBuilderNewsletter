<?php

	class clientemaillist
	{	
		function __construct() 
		{
			echo 'In clientemaillist constructor\n';
		}
		
		function __destruct()
		{
			echo 'In clientemaillist destruct\n';
		}
	}
	
	class editionlistfunctions extends clientemaillist
	{
		public $clients;	
			
		function add_client($email, $emaillist)
		{
			$this->clients[$email] += $emaillist;
		}
		
		function remove_client($email, $emaillist)
		{
			if($this->clients[$email] > $emaillist)
			{
				$this->clients[$email] -= $emaillist;
				return true;
			} 
			elseif ($this->clients[$email] == $emaillist)
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
	
	class database extends clientemaillist
	{
		function mysql_connect($hostname, $username, $password){;}

		function mysql_select_db($dbname, $dbconnection){;}
	}
	
	class databasedatapull extends database
	{
		function db_data_pull()	
	}
		
	$addclient = new editionlistfunctions();
	$addclient->add_client($email, $emaillist);

	$removeclient = new editionlistfunctions();
	$removeclient->remove_client($email, $emaillist);
	
	$dbconnection = new database();
	$dbconnection->mysql_connect($hostname, $username, $password);
	
	$dbselect = new database();
	$dbselect->mysql_select_db($dbname, $dbconnection);
	
?>
