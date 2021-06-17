<?PHP
    session_start();
    require '../model/functions.php';
    $db_link = connect();

if(isset($_POST["update_event"])) {

    

    $event_id = $_POST['event_id']; 
    $event_title = $_POST['event_title'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $place_name = $_POST['place_name'];
    $address = $_POST['address'];
    

    //Update CUSTOMER
    $sql_update = "UPDATE event SET event_title='$event_title', description='$description', place_name='$place_name', address='$address', status = '$status' WHERE event_id  = '$event_id'";
    
    $query_update = mysqli_query($db_link, $sql_update);
    checkSQL($query_update);

    header('Location: ../index.php?page=Event_list');


    }

if(isset($_GET["delete_id"])) {

    

    $event_id=$_GET["delete_id"];
    $sql_delete = "DELETE FROM event WHERE event_id ='$event_id'";
    $query_delete = mysqli_query($db_link, $sql_delete);
    checkSQL($query_delete);
    header('Location: ../index.php?page=Event_list');
    }
    
    ?>