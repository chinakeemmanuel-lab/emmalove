<a href="../lyrics/">Songs</a> | <a href="../pidgin/">Pidgin</a> | <a href="../products/">Products</a>


<?php 

if(isset($_SESSION["user"]["name"])) { 
    
    echo " | <a href='../users/logout.php'>Log out</a> | User: ".$_SESSION["user"]["name"]; 
    
} else { 
    
    echo " | <a href='../users/signup.php'>Sign up</a> | <a href='../users/login.php'>Log in</a>"; 

} 

?>
