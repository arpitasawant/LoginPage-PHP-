<?php
// logout page
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="log.css">
    </head>
    <body>
        <h1>Hello,<?php echo $_SESSION['user_name']; ?></h1>
        <a href="logout2.php">Logout</a>
    </body>
    </html>
    <?php
}
else{
 header("Location: index.php");
 exit();
}
?>
