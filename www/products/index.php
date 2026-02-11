<?php

require '../header.php';


if (isset($_GET["add_to_basket"]))
{
    $_SESSION["products"][$_GET["id"]]["name"] = $_GET["name"];
    $_SESSION["products"][$_GET["id"]]["qty"] += $_GET["qty"];
    $_SESSION["products"][$_GET["id"]]["price"] = $_GET["price"];
}


$sql = "SELECT id, name, description, price FROM products";
$result = mysqli_query($conn, $sql);

$products = array();
while($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}   
    
?>

<html lang="en">
    <head>
        <title>Products</title>
        <link rel="stylesheet" href="../styles.css">
    </head>
    <body>
        
        <?php include '../menu.php'; ?>
        
        <h2>Products</h2>
        
        <table>
        
        <tr><td>
            
            <table>
            
<?php  foreach($products as $product): ?>
    
            <tr>
                <td >
                    <?=$product['name']?><br>
                    <small><?=$product['description']?></small>
                </td>
                <td class="right">
                    <?=$product['price']?>&nbsp;$
                </td>
                <td class="right">
                    <form>
                        <input type="text" name="qty" style="width: 50px;" value="1">
                        <input type="submit" name="add_to_basket" value="Add to basket">
                        <input type="hidden" name="id" value='<?=$product["id"]?>'> 
                        <input type="hidden" name="name" value='<?=$product["name"]?>'> 
                        <input type="hidden" name="price" value='<?=$product["price"]?>'>
                    </form>    
                </td>
            </tr>
        
       <?php endforeach; ?>
            
        </table>
            
            </td>
            
            <td>
            
                <?php include '../users/basket.php'; ?>
                
            </td>
            </tr>
        
        </table>
        <?php include '../footer.php'; ?>
        
    </body>
</html>

