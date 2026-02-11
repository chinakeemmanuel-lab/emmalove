<?php

require '../header.php';

$sql = "SELECT id, word FROM pidgin_words";
$result = mysqli_query($conn, $sql);

$pidgins = array();
while($row = mysqli_fetch_assoc($result)) {
    $pidgins[] = $row;
}   
    
?>

<html lang="en">
    <head>
        <title>Pidgin words and meaning</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        
        <?php include '../menu.php'; ?>
        
        <h2>Pidgin words</h2>
<?php  foreach($pidgins as $pidgin) : ?>
        <a href='pidgin.php?id=<?=$pidgin["id"]?>'><?=$pidgin["word"]?></a><br>
<?php endforeach; ?>
        
        <?php include '../footer.php'; ?>
        
    </body>
</html>

