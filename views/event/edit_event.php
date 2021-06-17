<?php require_once 'layouts/header.php';

if(isset($_GET["event_id"])) {

    $event_id=$_GET["event_id"];
    $event_data=getEventData($event_id);
    $total_event_enroll_member=total_event_enroll($event_id);


}

        
?>

<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6"><img style="width: 80%; height: 80%;" src="<?php echo $event_data['image']; ?>"></div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

                <form action="controller/event_edit_controller.php" method="post"  enctype="multipart/form-data">
                
                    <div class="mb-2">
                        <label class="small mb-1" for="event_title">Event Title*</label>
                        <input class="form-control" id="event_title" name="event_title"  type="text" value="<?php echo $event_data['event_title']; ?>" /> 
                    </div>
                    <div class="mb-2">
                        <label class="small mb-1" for="description">Description*</label>
                        <input class="form-control" id="description" name="description"  type="text" value="<?php echo $event_data['description']; ?>" /> 
                    </div>
                    <label class="small mb-1" for="status">Status</label>
                                    <select class="form-control" id="status" name="status">';
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                    <div class="mb-2">
                        <label class="small mb-1" for="place_name">Place Name*</label>
                        <input class="form-control" id="place_name" name="place_name"  type="text" value="<?php echo $event_data['place_name']; ?>" /> 
                    </div>
                    <div class="mb-2">
                        <label class="small mb-1" for="address">Address*</label>
                        <input class="form-control" id="address" name="address"  type="text" value="<?php echo $event_data['address']; ?>" /> 
                    </div>

                    <div class="mb-2">
                        <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                        <input type="submit" class="form-control btn btn-primary" name="update_event" value="Update" /> 
                    </div>
                    
                    </form>
                    

                    
                
            </div>
        </div>
    </div>
</main>


<?php require_once 'layouts/footer.php';?>

