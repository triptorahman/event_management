<?PHP
    
session_start();
require '../model/functions.php';
$db_link = connect();

$flag=1; 
$today_ini=date("Y/m/d");
$today=strtotime($today_ini);



if(isset($_POST["signup"])) {

    /*Server Side Validation Start*/

      //first name
      if($_POST["first_name"]=="")
      {
        $flag=0;
        echo '<p style="color:red">first_name missing!<br/></p>';
      }else if(strlen($_POST["first_name"])<3)
      {
        $flag=0;
        echo "first_name too short<br/></p>";
      }

      //last name
      if($_POST["last_name"]=="")
      {
        $flag=0;
        echo '<p style="color:red">last_name missing!<br/></p>';
      }else if(strlen($_POST["last_name"])<3)
      {
        $flag=0;
        echo "last_name too short<br/></p>";
      }

      //user name
      if($_POST["user_name"]=="")
      {
        $flag=0;
        echo '<p style="color:red">user_name missing!<br/></p>';
      }else if(strlen($_POST["user_name"])<3)
      {
        $flag=0;
        echo "user_name too short<br/></p>";
      }
      //email
      $email = $_POST["email"];

      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("email is a valid email address<br/>");
      } else {
        $flag=0;
        echo("email is not a valid email address<br/>");
      }

      // password
      if($_POST["password"]=="")
      {
        $flag=0;
        echo '<p style="color:red">password missing!<br/></p>';
      }else if(strlen($_POST["password"])<5)
      {
        $flag=0;
        echo "password too short<br/></p>";
      }

      //date
      if (!empty($_POST['dob'])) {
              $dob = strtotime($_POST['dob']);
          }
          elseif (empty($_POST['dob'])) {
              echo"<p>dob is required.</p>";
              $flag=0;
              
          }


      // address
      if($_POST["address"]=="")
      {
        $flag=0;
        echo '<p style="color:red">address missing!<br/></p>';
      }
      //contact
      if($_POST["contact"]=="")
      {
        $flag=0;
        echo '<p style="color:red">contact missing!<br/></p>';
      }else if(strlen($_POST["contact"])<11 || strlen($_POST["contact"])>11)
      {
        $flag=0;
        echo "Invalid contact no<br/></p>";
      }

      //email exist check
      $exist_email_num=email_check($_POST["email"]);
      if($exist_email_num>=1){
        echo "Email already exist<br/>";
        $flag=0;
      }

      $exist_user_num=username_check($_POST["user_name"]);
      if($exist_user_num>=1){
        echo "user_name already exist<br/>";
        $flag=0;
      }

    /*Server Side Validation End*/ 

    /*Save*/

    if($flag==1){

        $sql_insert_user = "INSERT INTO user (uid , first_name, last_name, user_name, email, password, date_of_birth,  join_date, address,contact_number,user_type) VALUES ('', '$_POST[first_name]','$_POST[last_name]', '$_POST[user_name]', '$_POST[email]', '$_POST[password]', '$dob', '$today', '$_POST[address]','$_POST[contact]','2')";
        
        $query_insert_user = mysqli_query($db_link, $sql_insert_user);
        checkSQL($query_insert_user);
        header('Location: ../index.php?page=Login&msg=done');

        

    }
    else{
        echo'Not Saved';
    }
   

    }

    

        
?>