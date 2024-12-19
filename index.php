<h1>File index.php</p>
<?php
$myvar="Hello World";
$myvar=1;
echo "<h1>".$myvar."</h1>";




$my_arry = array(1,2,3,4,5);
print_r($my_arry);
echo"<br>";
$my_arry2[]= 1;
$my_arry2[]= 2;
$my_arry2[]= 3;
print_r($my_arry2);




echo "<br>";
$x = 1;
function x(){
    global $x;
    $x = 2;
}
echo $x;
echo "<br>";
x();
echo $x;
echo "<br>";
echo "1.5"+"1";
echo  "<br>";
$x ="B";
echo $x++;
echo $x;
echo "<br>";
?>