<?php
// $sum=0;
// for($a=1; $a<=50; $a++){
//     $sum=$sum+$a;
// }
// echo $sum;

// for($a=1; $a<=200; $a++){
//     if($a%3==0 && $a%7==0){
//         echo " $a";
//     }
  
// elseif( $a%3==0){
//     echo " $a"."yuo";
// }
    
// }
// $var=5;
// $b=1;
// for($a= $var; $a>0; $a--){
//     $b=$b*$a;

// }
// echo $b;

// $count=0;
// for( $a=1; $a<=250; $a++){
//     if($a%7==0){
//         echo " $a";
//         $count=$count+1;
//     }
// }
// echo  "<br>"."$count";

// $b=6;
// for($a=$b; $a<=$b; $a++){
//     if($a%2==0){
//        echo "this is even num"."$a";
//     }
//     else{
//         echo "this is odd num"."$a";
//     }
// }

$num=140;
$sum=0;
for($a=$num;$a!=0; $a=$a/10){
    $x=$a%10;
    $sum=$sum+$x*$x*$x;
}  
    if($num=$sum){
        echo "$num"."this is armstrong num";
    }
    else{
        echo "$num"."this is not";
    }



?>