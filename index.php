<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Page</title>
    <link rel="stylesheet" href="log.css">
</head>

<body>
    
    
    <form action="loginn.php" method="post">
        <div class="login">
        <h2>LOGIN PAGE</h2>
        <?php if(isset($_GET['error'])){
            ?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="uname" placeholder="Enter your username id"><br>
        <label>Password</label>
        <input type="password"name="password" placeholder="Enter your password"><br>
        <button type="Submit">Login</button></div>
    </form>
    
</body>
</html>