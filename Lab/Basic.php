<!-- <!doctype html>
<html>
    <body>
        <h1>My First PHP Page</h1>
        <?php
            echo "Hello, students! Welcome to PHP.";
        ?>
    </body>
</html> -->

<?php
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "1. Area and Perimeter<br>";
echo "Length =  $length <br>";
echo "Width = $width<br>";
echo "The area of the rectangle is: $area<br>";
echo "The perimeter of the rectangle is: $perimeter<br><br>";


$amount = 1000;
$vat = $amount * 0.15;
echo "2. VAT Calculation<br>";
echo "Amount = $amount <br>";
echo "VAT (15%) = $vat <br><br>";


 
$number = 15;
echo "3. Odd or Even<br>";
if ($number % 2 == 0) {
    echo "$number is Even <br><br>";
} else {
    echo "$number is Odd <br><br>";
}


$a = 20;
$b = 35;
$c = 15;
echo "4. Largest Number<br>";
if($a >= $b && $a >= $c){
    echo "Largest Number = $a";
}else if($b >= $a && $b >= $c){
    echo "Largest Number = $b";
}else{
    echo "Largest Number = $c";
}
echo "<br><br>";


echo "5. Odd Numbers Between 10 to 100 <br>";
for($i = 10;$i<=100;$i++){
    if($i%2!=0){
        echo "$i ";
    }
}
echo "<br><br>";


echo "6. Search an Element from an Array <br>";
$array = array(10,20,39,45,51,67,89,77,105);
$sz = count($array);
$search = 45;
$found = false;
for($i = 0;$i<$sz;$i++){
    if($array[$i] == $search){
        $found = true;
        break;
    }
}

if($found){
    echo "$search is Found in the Array.";
}
else{
    echo "$search is Not Found in the Array.";
}
echo "<br><br>";


echo "7(a). Shape <br>";

for($i = 0;$i<3;$i++){
    for($j = 0;$j<=$i;$j++){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";


echo "7(b). Shape <br>";

for($i = 3;$i>0;$i--){
    for($j = 1;$j<=$i;$j++){
        echo "$j ";
    }
    echo "<br>";
}
echo "<br>";

echo "7(c). Shape <br>";
$ch = 'A';
for($i = 0;$i<3;$i++){
    for($j = 0;$j<=$i;$j++){
        echo "$ch ";
        $ch++;
    }
    echo "<br>";
}
?>

 