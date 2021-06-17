<?PHP
    
    session_start();
    require '../model/functions.php';
    

    if(isset($_POST['login'])){

    	/*var_dump($_POST);*/

    	$user_name = sanitize($_POST['username']);
        $password = sanitize($_POST['password']);

        $userdata=getLogin($user_name,$password);




        //store login credential to session
        $_SESSION['username']=$user_name;
        $_SESSION['userid']=$userdata['uid'];
        $_SESSION['type']=$userdata['user_type'];

        if($userdata['user_type']==1){ //Admin Panel
        	
        	header('Location: ../index.php?page=Admin_panel');
        }
        else if($userdata['user_type']==2){ //user Panel
            header('Location: ../index.php?page=Admin_panel');
        }

    }

        
?>