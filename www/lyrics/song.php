<?php

require '../header.php';

// Create and execute MYSQL query
$sql = "SELECT * FROM songs WHERE id = '".$_GET["id"]."'";
$result = mysqli_query($conn, $sql);

// Fetch data
if (mysqli_num_rows($result) > 0) {
    $song = mysqli_fetch_assoc($result);   
} else {
    die("There is no such songs");
}   

?>
<html lang="en">
    <head>
        <title><?php echo $song["name"]; ?></title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        
        <?php include '../menu.php'; ?>
        
        <h2><?php echo $song["name"]; ?></h2>
        <p><i>Song by <?php echo $song["musician"]; ?></i></p>
        <img src='images/<?=$song["name"]?>.jpg' height="150">
        <p><?php echo $song["lyrics"]; ?></p>
        
        <?php include '../footer.php'; ?>
    </body>
</html>
