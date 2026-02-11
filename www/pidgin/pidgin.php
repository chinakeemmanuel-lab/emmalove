<?php

require '../header.php';

$sql = "SELECT * FROM pidgin_words WHERE id = '".$_GET["id"]."'";
$result = mysqli_query($conn, $sql);

// Fetch data
if (mysqli_num_rows($result) > 0) {
    $pidgin = mysqli_fetch_assoc($result);   
} else {
    die("There is no such pidgin words");
}   

?>

<html lang="en">
    <head>
        <title><?php echo $pidgin["word"]; ?></title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        
        <?php include '../menu.php'; ?>
        
        <h2><?php echo $pidgin["word"]; ?></h2>
        <p><?php echo $pidgin["explanation"]; ?></p>
        
        <?php include '../footer.php'; ?>
    </body>
</html>

