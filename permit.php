<?php
include 'config.php';

if(isset($_GET['activate-id'])){
    $id = $_GET['activate-id'];

    $queryActivate = "UPDATE `wcp_permit` SET permitStatus = 'activated' WHERE id = $id";
    $sqlActivate = mysqli_query($con, $queryActivate);
    if($sqlActivate){
        header('location:wildlife-collector.php');
    }else{
        die(mysqli_error($con));
    }
}

if(isset($_GET['deactivate-id'])){
    $id = $_GET['deactivate-id'];
    $queryDeactivate = "UPDATE `wcp_permit` SET permitStatus = 'deactivated' WHERE id = $id";
    $sqlDeactivate = mysqli_query($con, $queryDeactivate);
    if($sqlDeactivate){
        header('location:wildlife-collector.php');
    }else{
        die(mysqli_error($con));
    }
}

if(isset($_GET['fp-activate-id'])){
    $id = $_GET['activate-id'];

    $queryActivate = "UPDATE `wfp_permit` SET permitStatus = 'activated' WHERE id = $id";
    $sqlActivate = mysqli_query($con, $queryActivate);
    if($sqlActivate){
        header('location:wildlife-farm.php');
    }else{
        die(mysqli_error($con));
    }
}

if(isset($_GET['fp-deactivate-id'])){
    $id = $_GET['deactivate-id'];
    $queryDeactivate = "UPDATE `wfp_permit` SET permitStatus = 'deactivated' WHERE id = $id";
    $sqlDeactivate = mysqli_query($con, $queryDeactivate);
    if($sqlDeactivate){
        header('location:wildlife-farm.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
