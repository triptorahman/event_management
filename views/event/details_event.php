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
                
                    <div class="mb-2"><p class="font-weight-bold">Event Title:</p> <?php echo $event_data['event_title']; ?></div>
                    <div class="mb-2"><p class="font-weight-bold">Description:</p> <?php echo $event_data['description']; ?></div>
                    <div class="mb-2"><p class="font-weight-bold">Place Name:</p> <?php echo $event_data['place_name']; ?></div>
                    <div class="mb-2"><p class="font-weight-bold">Address:</p> <?php echo $event_data['address']; ?></div>
                    <div class="mb-2" ><p class="font-weight-bold">Event Date:</p> <?php echo date("d.m.Y",$event_data['event_date']); ?></div>
                    <div ><p class="font-weight-bold">Total Member Enroll:</p> <?php echo $total_event_enroll_member; ?></div>
                    

                    
                
            </div>
        </div>
    </div>
</main>


<?php require_once 'layouts/footer.php';?>

