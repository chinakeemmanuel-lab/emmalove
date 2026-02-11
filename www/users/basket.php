<?php

if(!isset($_SESSION["products"]))
{
    exit();
}
?>
      <table class="basket">
            <tr>
                <th colspan="2">
                    Basket
                </th>              
            </tr>
<?php  
          $total = 0;
          
          foreach($_SESSION["products"] as $id => $product): 
          
                $amount = $product["price"]*$product["qty"];
                $total += $amount;  
          
          ?>
            <tr>
                <td>
                    <?=$product["name"]?>
                </td>
                <td class="right">
                    <?=number_format($product["price"], 2)?>&nbsp;x&nbsp;<?=$product["qty"]?>&nbsp;=&nbsp;<?=number_format($amount, 2)?>&nbsp;$
                </td>                
            </tr>
       <?php endforeach; ?>
            <tr>
                <th class="right" colspan="2">
                    Total amount:&nbsp;<?=number_format($total, 2)?>&nbsp;$
                </th>
            </tr>  
            <tr>
                <td class="right" colspan="2">
                    <input type="submit" name="checkout" value="Check out">
                </td>
            </tr>  
        </table> 


