<?php
echo "For Loop</br>";
for($i=0;$i < 10;$i++){
    
    echo "number $i </br>";
}
echo "<br></br>";
echo "Do while Loop</br>";
do{
    echo "$i is the value"."</br>";
}while($i < 9);

echo "<br></br>";

echo "while loop</br>";
$i=0;
while($i < 5){
    echo $i + 1 . "</br>";
$i++;
}
echo "<br></br>";
echo "Foreach Loop</br>";
$anime_list = array("My hero academia","naruto","fairyTail","Blue lock","One piece");

foreach($anime_list as $array_values){
    echo $array_values . "</br>";
}
echo "<br></br>";

echo "foreach associative Loop</br>"; 
$info = array("Darea" => "First Name", "Jawili" => "Surname", "Gender" => "Female");
foreach($info as $key => $values){
    echo "$key is $values". "</br>";
}


?>