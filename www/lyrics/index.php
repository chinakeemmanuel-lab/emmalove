<?php

require '../header.php';

// Create and execute MYSQL query
$sql = "SELECT id, name, musician FROM songs";
$result = mysqli_query($conn, $sql);

// Fetch data
$songs = array();
while($row = mysqli_fetch_assoc($result)) {
    $songs[] = $row;
}   

?>
<html lang="en">
    <head>
        <title>Songs</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        
        <?php include '../menu.php'; ?>
        
        <h2>Songs</h2>
        <table border="1">
            
<?php  foreach($songs as $song) : ?>

            <tr>
                <td width="1%">
                    <img src='images/<?=$song["name"]?>.jpg' width="80">
                </td>
                <td>
                    <a href='song.php?id=<?=$song["id"]?>'><?=$song["name"]?></a><br>
                    <i>Song by <?=$song["musician"]?></i>
                </td>
            </tr>

<?php endforeach; ?>
            
        </table>
        
        <?php include '../footer.php'; ?>
    </body>
</html>
