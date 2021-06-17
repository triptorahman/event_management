<?PHP
    
session_start();
require '../model/functions.php';
$db_link = connect();

$flag=1; 

$target_dir = "../asset/uploads/";
$strtotime = strtotime("now");
$target_file = $target_dir .$strtotime. basename($_FILES["fileToUpload"]["name"]);
$image_path="asset/uploads/".$strtotime. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["event"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    /*echo "File is an image - " . $check["mime"] . ".";*/
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
   /* echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";*/
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

if(isset($_POST["event"])) {

    /*Server Side Validation Start*/

if (!empty($_POST['event_title'])) {
            $eventtitle = $_POST['event_title'];
        }
        elseif (empty($_POST['event_title'])) {
            echo"<p>Event Title is required.</p>";
            $flag=0;
            
        }

    

    if (!empty($_POST['description'])) {
            $event_description = $_POST['description'];
        }
        elseif (empty($_POST['description'])) {
            echo"<p>Description is required.</p>";
            $flag=0;
            
        }

    if (!empty($_POST['event_date'])) {
        $event_date = strtotime($_POST['event_date']);
    }
    elseif (empty($_POST['event_date'])) {
        echo"<p>Event date is required.</p>";
        $flag=0;
        
    }

    if (!empty($_POST['place_name'])) {
            $place_name = $_POST['place_name'];
        }
        elseif (empty($_POST['place_name'])) {
            echo"<p>Place Name is required.</p>";
            $flag=0;
            
        }

    if (!empty($_POST['address'])) {
        $address = $_POST['address'];
    }
    elseif (empty($_POST['address'])) {
        echo"<p>address is required.</p>";
        $flag=0;
        
    }

    if (!empty($_POST['status'])) {
        $status = $_POST['status'];
    }
    elseif (empty($_POST['status'])) {
        echo"<p>status is required.</p>";
        $flag=0;
        
    }

    /*Server Side Validation End*/ 

    /*Save*/

    if($flag==1){

        $sql_insert_event = "INSERT INTO event (event_id, event_title, description, image, place_name, address, event_date,  status, posted_by) VALUES ('', '$eventtitle','$event_description', '$image_path', '$place_name', '$address', '$event_date', '$status', '$_SESSION[userid]')";
        
        $query_insert_event = mysqli_query($db_link, $sql_insert_event);
        checkSQL($query_insert_event);
        header('Location: ../index.php?page=Event_list');

    }
    else{
        echo'Not Saved';
    }
   

    }


    //Update Part

    




    

        
?>