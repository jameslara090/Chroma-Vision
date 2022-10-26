<?php
// Send do not cache headers if not sent already
if (!headers_sent()) {
	header("Cache-control: private, no-cache");
	header("Expires: Mon, 10 Jan 2000 09:00:00 GMT");
	header("Pragma: no-cache");
}

// Include some files
include 'functions.php';
include 'data/prefs.php';
include 'classes/calendar.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
 <head>
  <title>Calendar: <?php
  echo date('F', $mkdate);
  echo ' ' . $year;
  ?></title>
  <link rel="stylesheet" title="Default" type="text/css" href="style.css" />
  <script src="e_edit.js" type="text/javascript"></script>
 </head>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/cblogo-273x68.png" type="image/x-icon">
    <meta name="description" content="Site Builder Description">
    <title>Book Online:<?php
  echo date('F', $mkdate);
  echo ' ' . $year;?></title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/gallery/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="assets/custom/custom.css">
 <link rel="stylesheet" href="style.css">

</head>
 <body>
<?php
 if (file_exists('header.php')) {
	readfile('header.php');
 }
elseif (file_exists('header.html')) {
	readfile('header.html');
}
?>

  <table class="header" cellpadding="0" cellspacing="0">
   <tbody>
    <tr>
     <td class="back">
      <?php
      if ($month == '01') {
      	$backy = $year;
      	echo "<a href=\"calendar.php?year=" . --$backy . '&month=12">';
      }
      else {
      	$bmonth = $month;
      	$bmonth--;
      	$bmonth = sprintf('%02d' , $bmonth);
      	echo '<a href="calendar.php?year=' . $year . '&month=' . $bmonth . '">';
      }
      ?>
      <img src="images/back.png" alt="Back" /></a>
     </td>
     <td class="title">
      <?php echo $year . ' - '; echo date('F', $mkdate); ?>
     </td>
     <td class="next">
      <?php
      if ($month == '12') {
      	$nexty = $year;
      	echo '<a href="calendar.php?year=' . ++$nexty . '&month=01">';
      }
      else {
      	$nmonth = $month;
      	$nmonth++;
      	$nmonth = sprintf('%02d' , $nmonth);
      	echo '<a href="calendar.php?year=' . $year . '&month=' . $nmonth . '">';
      }
      ?>
      <img src="images/next.png" alt="Next" /></a>
     </td>
    </tr>
   </tbody>
  </table>
  <table class="calendar" cellpadding="0" cellspacing="0">
   <tbody>
    <tr>
     <td class="weekday">Sunday</td>
     <td class="weekday">Monday</td>
     <td class="weekday">Tuesday</td>
     <td class="weekday">Wednesday</td>
     <td class="weekday">Thursday</td>
     <td class="weekday">Friday</td>
     <td class="weekday">Saturday</td>
    </tr>
    <tr>

<?php
$weeks = '1';

$loopCount = '1';
while ($loopCount <= $weekday) {
	echo '<td class="day"><img src="images/something.gif" alt="0" /> </td>';
	$loopCount++;
}

//Now generate all the days

$weekday++;

while ($day <= $days) {
	
	echo "\r<td class=\"day\"";
	
	//Check if this is the current day
	if (date("d") == $day && date("m") == $month && date("Y") == $year) {
    	echo ' id="now"';
    }
    
    echo '>';

	$lday = sprintf('%02d' , $day);
	

	echo "<a style=\"float: right;\" href=\"#\"" . "onclick=\"popUp('bookingform.php?year=" . $year . '&month=' . $month . '&day=' . $lday . "')\">" . '<img src="images/control.png" alt="o" style="margin-right: 3px;" /></a>';
	
	echo   $day ;
	
	if ($handle = opendir('data')) {
     	while (false !== ($file = readdir($handle))) {
     		if (preg_match("/$sieve/", "$file")) {
     			$data = file_get_contents('data/' . $file);
     			list($title, $desc, $time, $class) = explode("|-NN-|", $data);
    			echo '<div class="' . $class . '"><span>' . $title . '</span>';
     			echo $desc;
     			echo '<span>' . $time . '</span></div>';
     		}
     	}
     	closedir($handle);
     }
	
	echo "\r</td>";
	
	//If last day of week then start new week
	if ($weekday == '7') {
		echo '</tr><tr>';
		$weekday = '0';
		$weeks++;
	}
	
	$day++;
	$sieve++;
	$weekday++;
}

$dim = $weeks * '7';
$lastdays = $dim - ($days + $pweekday);
$lc = '1';
while ($lc <= $lastdays) {
	echo '<td class="day"><img src="images/something.gif" alt="0" /> </td>';
	$lc++;
}
?>

</tr>
    
   </tbody>
  </table>
  
  <table class="footer" cellpadding="0" cellspacing="0">
   <tbody>
    <tr>
     <td class="fback">
      <?php
      if ($month == '01') {
      	$backy = $year;
      	echo "<a href=\"calendar.php?year=" . --$backy . '&month=12">';
      }
      else {
      	$bmonth = $month;
      	$bmonth--;
      	$bmonth = sprintf('%02d' , $bmonth);
      	echo '<a href="calendar.php?year=' . $year . '&month=' . $bmonth . '">';
      }
      ?>
      <img src="images/back.png" alt="Back" /></a>
     </td>
     <td class="jump">
     <form method="get" action="jump.php">
     Jump to: <select name="year">
      <?php
       echo '<option value="2017"';
       if (date('Y') == '2017') {
       	echo ' selected="selected"';
       }
       echo '>2017</option>';
       
       echo '<option value="2018"';
       if (date('Y') == '2018') {
       	echo ' selected="selected"';
       }
       echo '>2018</option>';
       
       echo '<option value="2019"';
       if (date('Y') == '2019') {
       	echo ' selected="selected"';
       }
       echo '>2019</option>';
       
       echo '<option value="2020"';
       if (date('Y') == '2020') {
       	echo ' selected="selected"';
       }
       echo '>2020</option>';
       
       echo '<option value="2021"';
       if (date('Y') == '2021') {
       	echo ' selected="selected"';
       }
       echo '>2021</option>';
       
       echo '<option value="2022"';
       if (date('Y') == '2022') {
       	echo ' selected="selected"';
       }
       echo '>2022</option>';
       
       echo '<option value="2023"';
       if (date('Y') == '2023') {
       	echo ' selected="selected"';
       }
       echo '>2023 </option>';
      ?>
     </select>
     <select name="month">
      <option value="01"<?php
      if (date('m') == '01') {
      	echo " selected=\"selected\"";
      }
      ?>>January</option>
      <option value="02"<?php
      if (date('m') == '02') {
      	echo " selected=\"selected\"";
      }
      ?>>February</option>
      <option value="03"<?php
      if (date('m') == '03') {
      	echo " selected=\"selected\"";
      }
      ?>>March</option>
      <option value="04"<?php
      if (date('m') == '04') {
      	echo " selected=\"selected\"";
      }
      ?>>April</option>
      <option value="05"<?php
      if (date('m') == '05') {
      	echo " selected=\"selected\"";
      }
      ?>>May</option>
      <option value="06"<?php
      if (date('m') == '06') {
      	echo " selected=\"selected\"";
      }
      ?>>June</option>
      <option value="07"<?php
      if (date('m') == '07') {
      	echo " selected=\"selected\"";
      }
      ?>>July</option>
      <option value="08"<?php
      if (date('m') == '08') {
      	echo " selected=\"selected\"";
      }
      ?>>August</option>
      <option value="09"<?php
      if (date('m') == '09') {
      	echo " selected=\"selected\"";
      }
      ?>>September</option>
      <option value="10"<?php
      if (date('m') == '10') {
      	echo " selected=\"selected\"";
      }
      ?>>October</option>
      <option value="11"<?php
      if (date('m') == '11') {
      	echo " selected=\"selected\"";
      }
      ?>>November</option>
      <option value="12"<?php
      if (date('m') == '12') {
      	echo " selected=\"selected\"";
      }
      ?>>December</option>
     </select><img src="images/arrow.png" alt="&gt;" />
     <input type="submit" value="Go" />
   
     </form>
     </td>
     <td class="fnext">
      <?php
      if ($month == '12') {
      	$nexty = $year;
      	echo "<a href=\"calendar.php?year=" . ++$nexty . '&month=01">';
      }
      else {
      	$nmonth = $month;
      	$nmonth++;
      	$nmonth = sprintf('%02d' , $nmonth);
      	echo '<a href="calendar.php?year=' . $year . '&month=' . $nmonth . '">';
      }
      ?>
      <img src="images/next.png" alt="Next" /></a>
     </td>
    </tr>
   </tbody>
  </table>
  
  
<?php
 if (file_exists('footer.php')) {
	readfile('footer.php');
 }
elseif (file_exists('footer.html')) {
	readfile('footer.html');
}
?>
  </body>
</html>