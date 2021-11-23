<?php

// $GLOBALS['hostname'] = 'localhost';
// $GLOBALS['username'] = 'root';
// $GLOBALS['password'] = '';
// $GLOBALS['db'] = 'amttran1_amt';

$GLOBALS['hostname'] = 'localhost';
$GLOBALS['username'] = 'root';
$GLOBALS['password'] = '1234';
$GLOBALS['db'] = 'onz-db';


 
$GLOBALS['dbinv'] = mysqli_connect($GLOBALS['hostname'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['db']);
 
?>
