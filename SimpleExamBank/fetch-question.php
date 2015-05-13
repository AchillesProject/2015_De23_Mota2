<?php
	$username = "root";
	$password = "";
	$hostname = "localhost";
	
	$dbhandle = mysql_connect($hostname, $username, $password)
	  or die("Unable to connect to MySQL");
	//echo "Connected to MySQL<br>";
	$selected = mysql_select_db("database_exam_bank",$dbhandle)
	  or die("Could not select database");
	if (isset($_GET['id'])){
		
		$sql = "SELECT * FROM exam_bank WHERE id=".$_GET['id'];
		//$sql = "SELECT * FROM exam_bank WHERE id=".'5';
		$row=mysql_fetch_assoc(mysql_query($sql));
		$result = json_decode($row{'question'},true);
		
		$ajax = array();
		$ajax["question"] = $result["question"];
		
		$ajax["sol_1"] = $result["answer"]["sol_1"]["text"];
		$ajax["sol_2"] = $result["answer"]["sol_2"]["text"];
		$ajax["sol_3"] = $result["answer"]["sol_3"]["text"];
		$ajax["sol_4"] = $result["answer"]["sol_4"]["text"];
		
		echo json_encode($ajax);
		//echo $row;
	}
	mysql_close($dbhandle);
?>