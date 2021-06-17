<?php require_once 'layouts/header.php';

        
?>
<?php 
if($_SESSION['type']==1){ ?>
<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Add Event
            </div>
            <div class="card-body">

                <!-- PAGE HEADING -->
                

                <!-- CONTENT -->
                <div class="content_center">
                    <form action="controller/event_controller.php" method="post"  enctype="multipart/form-data">

                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="event_title">Event Title*</label>
                                    <input class="form-control" id="event_title" name="event_title"  type="text" placeholder="Enter Event Title"/>
                                    <div class="text-danger" id="error1" hidden=""></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="description">Description*</label>
                                    <input class="form-control" id="description" name="description" type="text" placeholder="Enter Description"/>
                                    <div class="text-danger" id="error2" hidden=""></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="event_date">Event Date*</label>
                                    <input class="form-control" id="event_date" name="event_date" placeholder="DD.MM.YYYY" type="date"/>
                                    <div class="text-danger" id="error3" hidden=""></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="place_name">Place Name*</label>
                                    <input class="form-control" id="place_name" name="place_name" type="text" placeholder="Enter Place Name"/>
                                    <div class="text-danger" id="error4" hidden=""></div>
                                </div>
                            </div>

                        </div>
                         
                        
                               
                        <div class="form-row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="address">Address*</label>
                                    <input class="form-control" id="address" name="address" type="text" placeholder="Enter Address"/>
                                    <div class="text-danger" id="error5" hidden=""></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="small mb-1" for="status">Status</label>
                                    <select class="form-control" id="status" name="status">';
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="event_image">Event Image</label>
                                    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" />
                                    <div class="text-danger" id="error6" hidden=""></div>

                                </div>
                            </div>
                            
                        </div>
                                

                        <div class="form-row">
                            <div class="col-md-4"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    
                                    <input type="submit" class="form-control btn btn-primary" name="event" value="Save" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php }else{ ?>

<main>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Enroll which Event you like. Click Active Event List.
            </div>
            
        </div>
    </div>
</main>


<?php } ?>

<?php require_once 'layouts/footer.php';?>

<script>
    $("form").submit(function(){



        $("#error1").attr("hidden",true);
        $('#error1').html('');
        $("#error2").attr("hidden",true);
        $('#error2').html('');
        $("#error3").attr("hidden",true);
        $('#error3').html('');
        $("#error4").attr("hidden",true);
        $('#error4').html('');
        $("#error5").attr("hidden",true);
        $('#error5').html('');
        $("#error6").attr("hidden",true);
        $('#error6').html('');
        

    /*Front Side Validation*/
        
        var event_title=$('#event_title').val();
        if(event_title==''){
            $('#error1').removeAttr('hidden');
            $('#error1').html('Need Event Title');
            return false;
        }


        var description=$('#description').val();
        if(description==''){
            $('#error2').removeAttr('hidden');
            $('#error2').html('Need Description');
            return false;
        }

        var event_date=$('#event_date').val();
        if(event_date==''){
            $('#error3').removeAttr('hidden');
            $('#error3').html('Need Event Date');
            return false;
        }


        var place_name=$('#place_name').val();
        if(place_name==''){
            $('#error4').removeAttr('hidden');
            $('#error4').html('Need Place Name');
            return false;
        }

        var address=$('#address').val();
        if(address==''){
            $('#error5').removeAttr('hidden');
            $('#error5').html('Need Address');
            return false;
        }

        var fileToUpload=$('#fileToUpload').val();
        if(fileToUpload==''){
            $('#error6').removeAttr('hidden');
            $('#error6').html('Need Photo');
            return false;
        }


       

});

</script>

