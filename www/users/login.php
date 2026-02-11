<?php
require '../header.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = trim($_POST["email"]);
    $password = md5(trim($_POST["password"]));
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password';";
    $result = mysqli_query($conn, $sql);
    
    // Check that we found some record 
    if (mysqli_num_rows($result) > 0) {
        
        $user = mysqli_fetch_assoc($result);   
        
        $_SESSION["user"]["name"] = $user["name"];
        $_SESSION["user"]["email"] = $user["email"]; 
        
        header("Location: /lyrics/index.php");
        exit(); // Important to stop further script execution
        
    } else {
        $error = "User is not found";
    }
    
}

?>


<html lang="en">
    <head>
        <title>Log in</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        
        <?php include '../menu.php'; ?>
        
        <h2>Log in</h2>

<?php if(!isset($_SESSION["user"])) : ?>
        
        <p><span class="error"><?=$error?></span></p>
        
        <form method="post">
            E-mail: <input type="text" name="email" >
            <br><br>
            Password: <input type="password" name="password">
            <br><br>
            <input type="submit" name="login" value="Log in">
        </form>
        
<?php else: ?>
        
        <p>You are already logged in</p>
        
<?php endif; ?>
        
        <?php include '../footer.php'; ?>
        
    </body>
</html>