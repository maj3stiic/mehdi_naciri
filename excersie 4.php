<?php

echo "<h3> Question 1 </h3>";


$list = array("PHP","HTML","JavaScript","CMS","Project");
for($i=0; $i<count($list); $i++) { 
    echo "  <li>{$list[$i]}</li>\n";
}

echo "<hr><h3> Question 2 </h3>";

$courses1 = array("PHP","HTML","JavaScript","CMS","Project");

unset($courses1[1]); 
var_dump($courses1);


echo "<hr><h3> Question 3 </h3>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
asort($courses3);
print_r($courses3);
echo "<br>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
ksort($courses3);
print_r($courses3);
echo "<br>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
arsort($courses3);
print_r($courses3);
echo "<br>";

$courses3=array("PHP" => "60", "HTML" => "50", "JavaScript" => "40", "CMS" => "20", "Project" => "30");
krsort($courses3);
print_r($courses3);
echo "<br>";

echo "<hr><h3> Question 4 </h3>";


$courses4 = ['1'=>'php','2'=>'html','3'=>'javascript','4'=>'cms','4'=>'project'];
$result = array_map('strtoupper',$courses4);
print_r($result);


echo "<hr><h3> Question 5 </h3>";

$colors = array("Red","Black","Blue","Green");
for($i=0; $i<count($colors); $i++) { 
    echo "  <li>{$colors[$i]}</li>\n";
}


echo "<hr><h3> Question 6 </h3>";

$color=array(
    array (255, 0, 0),
    array (58, 0, 254),
    array (1, 255, 0),
    array(254, 254, 46),
);
foreach($color as $id =>$rgb){
    $hex_color = sprintf("#%02x%02x%02x", $rgb[0],$rgb[1],$rgb[2]);
    echo $hex_color.'<br />';
    echo "<div style='background-color:$hex_color;width:50;height:50;'></div>";
}



echo "<hr> <h3> Question 7 </h3>";




$month_names = array("January","February","March","April","May","June","July","August","September","October","November","December");

for($i=0;$i<=11;$i++)

{

  echo $month_names[$i]."<br>";

}


echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : explode function breaks a string into an array + the separator specefies where to break the srting.
$temp_array = explode(',', $month_temp);
$tot_temp = 0;

// What is count? count is used to count the elements of an array
$temp_array_length = count($temp_array); 
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do? function is an inbuilt function in PHP and is used to sort an array in ascending order i.e, smaller to greater.
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}


?>