<?php

session_start();
require 'model/functions.php';
$db_link = connect();


$today_ini=date("Y/m/d");
$today=strtotime($today_ini); 

if(isset($_GET["event_id"]) && isset($_GET["user_id"])) {


	    $total_event=event_check($_GET["event_id"],$_GET["user_id"]);

	    if($total_event<1){

	    	$sql_enroll_event = "INSERT INTO event_enroll (event_enroll_id  , user_id, event_id, enroll_date) VALUES ('', '$_GET[user_id]','$_GET[event_id]','$today')";
	        $query_enroll_event = mysqli_query($db_link, $sql_enroll_event);
	        checkSQL($query_enroll_event);
	        header('Location: index.php?page=Active_event_list&msg=1');

	    }else{
	    	 header('Location: index.php?page=Active_event_list&failed=0');
	    }

		
}

 ?>