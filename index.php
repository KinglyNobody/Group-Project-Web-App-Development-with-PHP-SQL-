<!DOCTYPE html>
<?php?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container">
            <h1>Login</h1>
            <form method="post" action="BasicCalculations.php">
                Name:<br>
                <input type='text' name='name'>
                <br>
                <br>
                
                Student Id:<br>
                <input type='text' name='studentid'>
                <br>
                <br>
                
                <input type="submit" value="Start Test" name="login" />
            </form>
        </div>
    </body>
</html>
