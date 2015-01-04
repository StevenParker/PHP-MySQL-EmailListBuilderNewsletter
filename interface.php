<?php
require '\example.php';

	$hostname = 'localhost';
	$username = 'root';
	$password = '2axx50Zc156';
	$dbname = 'emailrecords';
	$column1 = 'forename';
	$column2 = 'surname';
	$column3 = 'emailadress';
	$forename = $_POST['forename'];
	$surname = $_POST['surname'];
	$emailaddress = $_POST['emailaddress'];

	$objdbconnect = mysql_connect($hostname, $username, $password);
	$objselect = mysql_select_db($dbname, $dbconnection);
	$objquery = "	INSERT INTO $dbname		(forename, surname, emailaddress) 
					VALUES 					($forename, $surname, $emailaddress)";
?>
<html>
<head>
	<title>Email Client Builder</title>
	<link rel="stylesheet" type="text/css" href="interface.css" />
</head>
<body>
	<div id="box">
		<div class="Title">
		</div>
		<div class="Table">
		<fieldset>
			
			<h4>Email Client List</h4>
			<label><input type="checkbox" name="emailaddress" value="bar1"> 40 characters long......................<br/></label>
			<label><input type="checkbox" name="emailaddress" value="bar2"> 40 characters long......................<br/></label>
			<label><input type="checkbox" name="emailaddress" value="bar3"> 40 characters long......................<br/></label>
			<label><input type="checkbox" name="emailaddress" value="bar4"> 40 characters long......................<br/></label>
			<label><input type="checkbox" name="emailaddress" value="bar5"> 40 characters long......................<br/></label>
			<label><input type="checkbox" name="emailaddress" value="bar6"> 40 characters long......................<br/></label>
			<label><input type="checkbox" name="emailaddress" value="bar7"> 40 characters long......................<br/></label>
			<label><input type="checkbox" name="emailaddress" value="bar8"> 40 characters long......................<br/></label>
			<p>
			<label><input type="checkbox" onClick="toggle(this)" /> Toggle All<br />
			</fieldset>	
		</div>
	</div>
	
	<script>
	function toggle(source) 
	{
		checkboxes = document.getElementsByName('emailaddress');
		for(var i=0, n=checkboxes.length;i<n;i++) 
		{
			checkboxes[i].checked = source.checked;
		}
	}
	</script>
</body>
</html>
