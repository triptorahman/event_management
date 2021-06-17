<?php 
    if(isset($_GET['page'])) 
    {
        switch ($_GET['page']) 
        { 
            
            /*Signup*/
            case 'Signup':
              include 'views/signup/signup.php';
              break; 

            /*Login*/
            case 'Login':
              include 'views/login/login.php';
              break; 

            /*Admin Panel*/
            case 'Admin_panel':
              include 'views/home/home.php';
              break;


              /*Event List*/
            case 'Event_list':
              include 'views/event/event_list.php';
              break;  


               /*Active Event List*/
            case 'Active_event_list':
              include 'views/user_home/events.php';
              break;


               /*Active Event List*/
            case 'Details_event':
              include 'views/event/details_event.php';
              break;  


              /*Enroll to Event*/
            case 'Enroll_event':
              include 'views/event/enroll_event.php';
              break;


               /*Edit Event*/
            case 'Edit_event':
              include 'views/event/edit_event.php';
              break;

               /*Edit Event*/
            case 'Enrolled_event_list':
              include 'views/user_home/enrolled_event_list.php';
              break;

                     

                           

        }
    } 
    else 
    {
      include 'views/login/login.php';
    }

/*adding footer*/
require_once 'layouts/footer.php';



?>

