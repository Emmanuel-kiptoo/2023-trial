<?php
$HOSTNAME= 'localhost';
$USERNAME= 'root';
$PASSWORD= '';
$DATABASE= 'regi';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con){
    echo "Connection successfully";
}else{
    die(mysqli_error($con));
}
?>