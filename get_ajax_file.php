<?php
require 'model/functions.php';
$db_link = connect(); 


if(isset($_GET['user_name']))
{
    $user_name = $_GET['user_name'];
    $json_data = array();

    $sql = "SELECT count(*) as total_username FROM user where user_name = '$user_name'";
    
    $query = mysqli_query($db_link, $sql);
    checkSQL($db_link, $query);

    $data = mysqli_fetch_assoc($query);
    $user_name_check=$data['total_username'];
    $json_data=$user_name_check; 
    echo json_encode($json_data);
}

if(isset($_GET['email']))
{
    $email = $_GET['email'];
    $json_data = array();

    $sql = "SELECT count(*) as total_email FROM user where email = '$email'";
    
    $query = mysqli_query($db_link, $sql);
    checkSQL($db_link, $query);

    $data = mysqli_fetch_assoc($query);
    $user_name_check=$data['total_email'];
    $json_data=$user_name_check; 
    echo json_encode($json_data);
}
?>