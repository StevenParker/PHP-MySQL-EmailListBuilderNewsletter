<?php
class clientemaillist
{
	public $dbconnection;
	public $dbselect;
	public $tableselect;
	public $column1;
	public $column2;
	public $column3;
	public $forename;
	public $surname;
	public $emailaddress;
	public $queryresults;
	public $result;
	public $rowcheck;

	public function __construct() 
		{
			echo 'In clientemaillist constructor';
		}
		
	public function __destruct()
		{
			echo 'In clientemaillist destruct';
		}
}

//dbcm = database connection methods
class dbcm extends clientemaillist
{
	function databaseconnection($dbconnection)
	{
		global $dbconnection;
		$dbconnection = mysql_connect($hostname, $username, $password);

		if ($dbconnection->connect_error)
		{
			die("Connection Failed: " . $dbconnection->connect_error);
		}

		$objdbconnect = new dcbm;
		$objdbconnect->databaseconnection($dbconnection = mysql_connect($hostname, $username, $password))
	}

	function databaseselect($dbselect)
	{
		global $dbselect;
		$dbselect = mysql_select_db($dbname, $dbconnection);

		$objselect = new dcbm;
		$objselect->databaseselect($dbselect = mysql_select_db($dbname, $dbconnection));
	}

	function tablequery($tableselect)
	{
		

		if($dbconnection->query($tableselect) === TRUE)
		{
			echo "New record created successfully";
		}
		else
		{
			echo "Error" . $tablequery . "<br>" . $dbconnection->error;
		}

		global $tableselect;
		$tableselect = "INSERT INTO $dbname	($column1, $column2, $column3) 
						VALUES 				($forename, $surname, $emailaddress)";

		if($dbconnection->tablequery($tableselect) === TRUE)
		{
			echo "New record created successfully";
		}
		else
		{
			echo "Error: " . $tableselect . "<br>" . $dbconnection->error;
		}

		$objquery = new dbcm;
		$objquery->tablequery($tableselect = "INSERT INTO $dbname		($column1, $column2, $column3) 
											VALUES 					($forename, $surname, $emailaddress)");
	}

	function displayresult($queryresults)
	{
		global $queryresults;
		$queryresults = mysql_query($tableselect);
	}

	function numrows($rowcheck)
	{
		global $rowcheck;
		$rowcheck = mysql_num_rows($queryresults);
	}
}

/*
class editionlistfunctions extends clientemaillist
	{

		public function add_client($email, $emaillist)
		{
			$this->clients[$email] += $emaillist;
		}

		public function remove_client($email, $emaillist)
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
*/
?>
