// Substitutions for PHP embedded into HTML

// foreach PHP:
<?php
foreach($products as $product) {
   echo "Some text";  
}
?>

// foreach PHP mixed with HTML:
<?php foreach($products as $product): ?>
Some HTML code here
<?php endforeach; ?>

// if PHP:
<?php
if(true) {
   echo "Some text";  
}
?>

// if PHP mixed with HTML:
<?php if(true): ?>
Some HTML code here
<?php endif; ?>

// echo PHP:
<?php
   $name = "zzz";
   echo $name;  
?>

// echo PHP mixed with HTML:
<?=$name?>