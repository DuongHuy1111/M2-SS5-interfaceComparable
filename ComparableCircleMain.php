<?php
include "ComparableCircle.php";

$circleOne = new ComparableCircle(2,'circleOne');
$circleTwo = new ComparableCircle(2,'circleTwo');

var_dump($circleOne->compareTo($circleTwo));
?>