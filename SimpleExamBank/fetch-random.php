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
		$ajax = array();
		$i = 0;
		while ($row = mysql_fetch_array($result)){
			/*$ajax[$i]["id"] =  ''+$row{'id'};
			$ajax[$i]["question"] =json_decode($row{'question'},true);*/
			$ajax[$i] = strval($row{'id'});
			$i++;
		}
		$rand_keys = array_rand($ajax, 10);

		$json = array();

		/*for ($x = 0; $x < count($rand_keys); $x++) {
    		$json[] = $ajax[$rand_keys[$x]];
		}*/
		foreach ($rand_keys as $value) {		 	
		 	$json[] = $ajax[$value];
		 } 

		echo json_encode($json);
	}
	mysql_close($dbhandle);
?>