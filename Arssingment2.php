<?php
function calculateDiscount($amount, $isFemale, $age){
$discount = 0;
if ($isFemale){
//for females
if($amount < 50 && $age <= 30){
    $discount = 0.10;
}
elseif($amount >= 50 && $amount <= 100 && $age >= 30){
    $discount = 0.15;
}
else {
    $discount = 0.20;
}
}
else{
//for males
    if ($amount < 50 && $age <= 18){
        $discount = 0.00;
    }
    elseif($amount >=50 && $amount <=100 && $age >= 18){
        $discount = 0.05;
     }
     else{
        $discount = 0.10;
     }
}
//calculate the final amount after applying the discount
$finalAmount = $amount - ($amount * $discount);
return $finalAmount;
}

//how to use it
$purchaseAmount = 112;
$isFemale = true;
$age = 24;
$finalAmount = calculateDiscount($purchaseAmount, $isFemale, $age);
Echo "The discounted amount is $ $finalAmount";
?>