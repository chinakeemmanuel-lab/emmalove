<?php
require '../header.php';

$done = false;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = trim($_POST["name"]);
    $password = md5(trim($_POST["password"]));
    $email = trim($_POST["email"]);
    
    $sql = "INSERT INTO users (name, password, email) VALUES ('$name', '$password', '$email');";
    mysqli_query($conn, $sql);
    
    $done = true;
}

?>


<html lang="en">
    <head>
        <title>Sign up</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        
        <?php include '../menu.php'; ?>
        
        <h2>Sign up</h2>

<?php if(!$done) : ?>
        
        <form method="post">
            Name: <input type="text" name="name">
            <br><br>
            Password: <input type="password" name="password">
            <br><br>
            E-mail: <input type="text" name="email" >
            <br><br>
            <input type="submit" name="signup" value="Sign up">
        </form>

<?php else: ?>
        
        <p>Thank you for registration on our website. Please, log in <a href="/users/login.php">here</a>.</p>
        
<?php endif; ?>
        
        <?php include '../footer.php'; ?>
        
    </body>
</html>