<?php

$name = $_GET ['name'];
$age = $_GET ['age'];


 if ($age >= 18){
     echo " <h2> You have the right to vote </h2>";
 }
 else {
    echo "<h2> You cannot vote <br> </h2>";
}

?>