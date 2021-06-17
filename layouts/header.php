<!DOCTYPE html>
<?php 
    require 'model/functions.php';
    $db_link=connect(); 
    checkLogin();

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgba(0, 0, 0, 0.2)">
        <?php if($_SESSION['type']==1){?>
        <a href="index.php?page=Admin_panel" class="navbar-brand">
            Admin Home
        </a>
    <?php }else{ ?>
        <a href="index.php?page=Admin_panel" class="navbar-brand">
            User Home
        </a> <?php }?>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <?php if($_SESSION['type']==1){ ?>
                <a href="index.php?page=Event_list" class="nav-item nav-link active">Event List</a>
            <?php }else{ ?>

                <a href="index.php?page=Active_event_list" class="nav-item nav-link active">Active Event List</a>
                <a href="index.php?page=Enrolled_event_list" class="nav-item nav-link active">Enrolled Event List</a>

            <?php } ?>
                
            </div>
            <div class="navbar-nav ml-auto">
                <a href="controller/logout.php" class="nav-item nav-link text-dark text-">Log Out</a>
            </div>
        </div>
    </nav>
</div>
</body>
</html>