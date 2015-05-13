<?php
	$username = "root";
	$password = "";
	$hostname = "localhost";
	
	$dbhandle = mysql_connect($hostname, $username, $password)
	  or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";
	$selected = mysql_select_db("database_exam_bank",$dbhandle)
	  or die("Could not select database");
	$result = mysql_query("SELECT id, question FROM exam_bank");
	if (empty($_GET)){
		$ajax = array("id"=>array(),
				   "description"=>array());
		$i = 0;
		while ($row = mysql_fetch_array($result)){
			$ajax["id"][$i] = $row{'id'};
			$ajax["description"][$i] = json_decode($row{'question'},true)['description'];
			$i++;
		}
		echo json_encode($ajax);
	}
	mysql_close($dbhandle);

	/*	$result = mysql_query("SELECT * FROM table1", $link);
		$num_rows = mysql_num_rows($result);
	*/

?>