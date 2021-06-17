<?PHP
	//timezone
	date_default_timezone_set('Asia/Dhaka');
/**
	* Establish Database Connection
	*/
function connect() {
		//require_once '../../config/config.php';
		if (!defined('DB_HOST')) define('DB_HOST', 'localhost');
    	if (!defined('DB_USER')) define('DB_USER', 'root');
    	if (!defined('DB_PASS')) define('DB_PASS', '');
    	if (!defined('DB_NAME')) define('DB_NAME', 'event_db');
		$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if (!$connect) header('Location:setup.php');
		mysqli_set_charset($connect, 'utf8');
		return $connect;
	}

	function sanitize($var) {
		
		$db_link=connect();
		$var = stripslashes($var);
		$var = htmlentities($var);
		$var = strip_tags($var);
		$var = mysqli_real_escape_string($db_link, $var);
		return $var;
	}

	function checkSQL($sqlquery){
		$db_link=connect();
		if (!$sqlquery) die ('SQL-Statement failed: '.mysqli_error($db_link));
	}

	
	function getLogin($username,$password){
		$db_link=connect();
		$sql_login = "SELECT * FROM user where user_name = '$username' and password='$password'";
		$query_login = mysqli_query($db_link, $sql_login);
		checkSQL($query_login);
		$login_data_arr=array();
		$login_data_arr = mysqli_fetch_assoc($query_login);
		return $login_data_arr;
		
	}


	function getAllEvent(){
		$db_link=connect();
		$sql_all_event = "SELECT * FROM event";

		$query_all_event = mysqli_query($db_link, $sql_all_event);
		checkSQL($query_all_event);
		return $query_all_event;
		
	}

	function checkLogin() {
		
		session_start();
		if (!isset($_SESSION['userid'])) header('Location: controller/logout.php');
		session_regenerate_id();
	}

	function email_check($email){
		$db_link=connect();
		$sql_email_check = "SELECT count(*) as total_email FROM user where email = '$email'";
		$query_email_check = mysqli_query($db_link, $sql_email_check);
		checkSQL($query_email_check);
		$total_email = mysqli_fetch_assoc($query_email_check);
		return $total_email['total_email'];
		
	}


	function username_check($username){
		$db_link=connect();
		$sql_user_check = "SELECT count(*) as total_user FROM user where user_name = '$username'";
		$query_user_check = mysqli_query($db_link, $sql_user_check);
		checkSQL($query_user_check);
		$total_user = mysqli_fetch_assoc($query_user_check);
		return $total_user['total_user'];
		
	}


	function getAllActiveEvent(){
		$db_link=connect();
		$sql_all_active_event = "SELECT * FROM event where status=1";

		$query_all_active_event = mysqli_query($db_link, $sql_all_active_event);
		checkSQL($query_all_active_event);
		return $query_all_active_event;
		
	}


	function getEventData($event_id){
		$db_link=connect();
		$sql_event_data = "SELECT * FROM event where event_id = '$event_id'";
		$query_event_data = mysqli_query($db_link, $sql_event_data);
		checkSQL($query_event_data);
		$event_data = mysqli_fetch_assoc($query_event_data);
		return $event_data;
		
	}

	function event_check($event_id,$user_id){
		$db_link=connect();
		$sql_event_check = "SELECT count(*) as total_event FROM event_enroll where user_id = '$user_id' and event_id = '$event_id'";
		$query_event_check = mysqli_query($db_link, $sql_event_check);
		checkSQL($query_event_check);
		$total_event = mysqli_fetch_assoc($query_event_check);
		return $total_event['total_event'];
		
	}

	function total_event_enroll($event_id){
		$db_link=connect();
		$sql_total_event_enroll = "SELECT count(*) as total_event_enroll FROM event_enroll where event_id = '$event_id'";
		$query_total_event_enroll = mysqli_query($db_link, $sql_total_event_enroll);
		checkSQL($query_total_event_enroll);
		$total_event_enroll = mysqli_fetch_assoc($query_total_event_enroll);
		return $total_event_enroll['total_event_enroll'];
		
	}


	function getEnrolledEvent($user_id){
		$db_link=connect();
		$sql_enrolled_event = "SELECT * FROM event_enroll a,event b where a.user_id='$user_id' and a.event_id=b.event_id";
		$query_enrolled_event = mysqli_query($db_link, $sql_enrolled_event);
		checkSQL($query_enrolled_event);
		return $query_enrolled_event;
		
	}


	function get_event_title($event_id){
		$db_link=connect();
		$sql_total_event_enroll = "SELECT count(*) as total_event_enroll FROM event_enroll where event_id = '$event_id'";
		$query_total_event_enroll = mysqli_query($db_link, $sql_total_event_enroll);
		checkSQL($query_total_event_enroll);
		$total_event_enroll = mysqli_fetch_assoc($query_total_event_enroll);
		return $total_event_enroll['total_event_enroll'];
		
	}




?>