<!DOCTYPE html>
<?php
include 'functions.php';
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Online Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./styles.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row" id="header" style="text-align: center;">
                <div class="col-md-4">
                    <?php echo date("d.m.Y") . "<br>"; ?>
                </div>
                <div class="col-md-4">
                    <?php echo "TIMER" . "<br>"; ?>
                </div>
                <div class="col-md-4">
                    <?php echo  "NAME" . "<br>"; ?>
                </div>
            </div>