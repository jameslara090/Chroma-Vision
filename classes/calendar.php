<?php
// Get the year
if ($_GET['year'] != '') {
        $year = $_GET['year'];
}
else {
        $year = date('Y');
}

// Get the month
if ($_GET['month'] != '') {
        $month = $_GET['month'];
}
else {
        $month = date('m');
}

// Get some dates and time
$mkdate = mktime(0,0,0, $month, 1, $year);
$weekday = date('w', $mkdate);
$pweekday = date('w', $mkdate);
$firstday = date('w', $mkdate);
$day = '1';
$days = date('t', $mkdate);
$sieve = $year . $month . '01';
        $lday = sprintf('%02d' , $day);
?>