<?php

 /*  $arr = [1,2,3,4,5];
 foreach ($arr as $key => $value) {
     # code...
     if($key==1) {
         $arr[$key] = 'gaurav';
     }
     if($key==4) {
         $arr[$key] = 'shivam';
     }
 }
 echo "<pre>";
 print_r($arr); */

/* $arr=[1,2,3,4,5];
 $a=0;
 foreach ($arr as $value) {
     $a = $a+$value;
 }
 echo '<pre>';
 echo ($a);
 exit(); */


/* $a=[1,2,3,5,6,7];
 for($c=count($a)-1; $c>=0; $c--){
    echo  $a[$c];
 } */


/*  $a=[1,2,3,4,5,6];
$b=0;
foreach($a as $key=>$value){
 if( $value==6){
 $b=$key;
 }
}
echo $b ; */ 

/* $a=[1,2,3,4,5];
$b=0;
foreach ($a as $key => $value) {
    if($key==3){
        $b=$value;
    }
}
echo $b; */

/* $a=[1,2,3,4,5];
foreach ($a as $key => $value) {
    if($value==2){
        $a[$key]="shivam";
    }
}
    echo "<pre>";
    print_r($a) */;

/* $a=[];
for($i=1; $i<=50; $i++){
    if($i%1==0){
        $a[]=$i;

    }
}
print_r ($a); */


/* $str='shivam';
$b=0;
while($str[$b]!=''){
    $b++;
}
 echo $b */;


 /* for($i=1;$i<=10;$i++) {
    for($j=1;$j<=10;$j++) {
        echo $j;
        echo ", ";
       continue 2;
    }
    echo $i;
    echo '<br>';
 } */


/*  $a=[1,2,1,2,3,4,54,3,2];
$b=[];
foreach($a as $value){
    foreach($b as $balue) {
        if($value==$balue) {
            continue 2;
        }
    }
    $b[]=$value;
} 
 echo '<pre>';
 print_r($b);
 exit(); */


/* $array = [50,12, 30, 10, 9, 14];
$count = 0;
foreach($array as $elem){
    $count++;
}
//for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) { 
            $temp = $array[$j];
            $array[$j] = $array[$j + 1]; 
            $array[$j +1] = $temp; 
        }
    }
//}
print_r($array); */



/* $a=57.95;
$c=1159;
$total = $c*100/$a;
echo $total;
 */

/*     $arr = [1,2,3,4,3,2];
    $v = $arr[0];
    $a = $arr[0];
    foreach($arr as $value) {
        if($v<$value) {
            $v= $value;
        }
        if($a>$value) {
            $a= $value;
        }

    }
    echo "the max number element:",$v;
    echo '<br>';
    echo "the min number element:",$a; */




/* $a=[1,2,3,5,7,8];
foreach($a as $key=>$value){
    if($value==5){
        $a[$key]="gaurav";
    }
    if($key==2){
        $a[$key]="thakur";
    }
  
}
print_r($a); */

/* $a=[1,2,3,4,5,6,7,8];
$b=0;
foreach($a as $key=> $value){
if($key==2){
    $b=$value;
}
if($value==5){
    $b=$key;
}

}
echo $b; */

/* $a=[1,2,3,4,5,6];
$b=0;
foreach($a as $key=>$value){
    $b=$b+$value;
}
echo $b; */

/* $a=[1,2,3,4,5,6];
for($b=count($a)-1; $b>=0; $b--){
echo  $a[$b];
}
$a=[];
for($b=1; $b<=100; $b++){
    if($b%1==0){
        $a[]=$b;
    }
}
print_r ($a); */

/* $a=[1,2,6,4,2,4,3,5,6,3,4,5];
$b=[];
foreach($a as $key=>$value){
    foreach($b as $key=>$antom){
        if($value==$antom){
            continue 2;
        }        
    }
    $b[]=$value;
}
echo "<pre> ";
print_r($b); */


/* $a = [2,3,4,5];

for($i = 0; $i<count($a);$i++) {
    for($j = $i+1; $j<count($a);$j++) {
        if($a[$i]>$a[$j]) {
            $temp = $a[$i];

            $a[$i] = $a[$j];

            $a[$j] = $temp;
        }
    }
}
echo '<pre>';
print_r($a);
exit(); */


/* $a=5;
$flage=1;
for($b=2; $b<$a;$b++){
    if($a%$b==0){
        $flage=0;
    }
}
if($flage==1){
    echo "this no. is prime".$a;
}
else{
    echo "this no. is not prime".$a;
} */


/* $a=100;
for($b=1; $b<=$a; $b++){
    $flage=1;
for($c=2; $c<=$b/2; $c++){
    if($b%$c==0)
    $flage=0;
}
if($flage==1){
    echo " $b";
}
} */


$a=[1,2,3,4,5];
 $c=1;
for($b=1; $b<=count($a); $b++){
    for($d=1; $d<=$b; $d++){
        $c=$c*$d;
    }
    echo " $c";   
}









?>
