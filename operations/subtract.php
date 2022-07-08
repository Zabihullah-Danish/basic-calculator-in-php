<?php
if(empty($_GET['value1'] && $_GET['value2'])){
    echo "provide input";
    
}else{
    $value1 = $_GET['value1'];
    $value2 = $_GET['value2'];

    $total  = $value1 - $value2;
    echo "<h1>$value1 - $value2 = $total</h1>";
}


?>



