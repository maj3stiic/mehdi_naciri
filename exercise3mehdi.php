<?php

#github : https://github.com/maj3stiic/mehdi_naciri
#project's website: http://shell.hamk.fi/~bbcap21_5/homepage.html


echo "<h3>Q1</h3>";
$d = date("F");
if ($d == "August"){
    echo "It's August, so it's still holiday. <br>";
    
}
else {
    echo "Not August, This is  $d  so i don't have any holidays <br>";
}

echo "<h3>Q2</h3>";
$color = "Red";
if ($color == "Red"){
    echo "The color is red. <br>";
    
}
else {
    echo "The color is not red. <br>";
}

echo "<h3>Q3</h3>";




$grade = 70;
if ($grade >= 80){
    echo "Excellent ! <br>";
  
}
elseif ($grade >= 70){
    echo "Great ! <br>";
}
elseif ($grade >= 60){
    echo "Good !<br>";
}
elseif ($grade >= 50){
    echo "Pass <br>";
}
else {
    echo "Fail <br>";
}

echo "<h3>Q4</h3>";


# Check input.html / input.php

echo "<h3>Q5</h3>";

for($i=8;$i>=1;$i--){
    for($j=1;$j<=$i;$j++){
      echo " $j ";
    }
    echo '</br>';
  }


echo "<h3>Q6</h3>";

for ($i=0; $i <10; $i++){
    for ($j=1;$j<$i; $j++) {
        echo" * ";
    }
    
    echo "<br>";
}





?>

