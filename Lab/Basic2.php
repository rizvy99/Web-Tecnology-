<?php
echo "1. Simple Interest<br>";
$principal = 10000;
$rate = 5;
$time = 2;

$simpleInterest = ($principal * $rate * $time) / 100;

echo "Principal = $principal <br>";
echo "Rate = $rate % <br>";
echo "Time = $time years <br>";
echo "Simple Interest = $simpleInterest <br><br>";



echo "2. Prime Number<br>";
$number = 37;
$isPrime = true;
if($number<=1){
    $isPrime = false;
}else{
    for($i = 2;$i<$number;$i++){
        if($number%$i==0){
            $isPrime = false;
            break;
        }
    }
}
if($isPrime){
    echo "$number is a Prime Number.<br><br>";
}else{
    echo "$number is NOT a Prime Number.<br><br>";
}



echo "3. Factorial<br>";
$n = 13;
$fact = 1;
for($i = 1;$i<=$n;$i++){
    $fact = $fact*$i;
}
echo "Factorial of $n = $fact <br><br>";

echo "4. Sum and Average of Array<br>";
$array = array(15,23,32,39,41,49,55,60,72,88);
$sum = 0;
foreach($array as $value){
    $sum = $sum+$value;
}
$average = $sum / count($array);
echo "Array Elements: ";

foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";
echo "Sum = $sum <br>";
echo "Average = $average <br><br>";


echo "5. Pattern<br>";
for($i = 1;$i<=4;$i++){
    for($j = 1;$j<=$i;$j++){
        echo $i . " ";
    }
    echo "<br>";
}

?> 