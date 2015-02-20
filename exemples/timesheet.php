<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TimeSheet.php</title>
<link href="../sources/css/timesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include "../sources/class.timesheet.php"; ?>


<?php

$alpha =array('Janv', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$data = array(
		'prun' => array(
					array('start' => '01-15','end' => '02-20'),
					array('start' => '09-07','end' => '12-07'),
					),
		'orange' => array(
					array('start' => '02-01','end' => '06-31'),
					),
		'kiwi' => array(
					array('start' => '08-30','end' => '01-20'),
					),
		'tomatoes' => array(
					array('start' => '12-15','end' => '05-20'),
					array('start' => '09-07','end' => '12-05'),
					),
		'nuts' => array(
					array('start' => '02-01','end' => '06-31'),
					),
		'banana' => array(
					array('start' => '05-20','end' => '09-20'),
					),
		'prun2' => array(
					array('start' => '01-15','end' => '02-20'),
					array('start' => '09-07','end' => '12-01'),
					),
		'orange2' => array(
					array('start' => '02-01','end' => '06-31'),
					),
		'kiwi2' => array(
					array('start' => '08-30','end' => '01-20'),
					),
		'tomatoes2' => array(
					array('start' => '09-15','end' => '05-20'),
					array('start' => '07-07','end' => '08-01'),
					),
		);

$args = array(
		'id' => 'season',
		'theme' =>'white',
		'alpha_first' => 1,
		'omega_base' => 31,
		'line' => date('m-d'),
		'line_text' => 'Today',
		);

$fruits = new timesheet($alpha, $args, $data );
$fruits->display();
?>
<br>

<?php

$alpha =array('2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015');

$data = array(
		'estate agent' => array(
					array('start' => '2005-02','end' => '2006-03'),
					),
		'lumberjack' => array(
					array('start' => '2006-05','end' => '2006-06'),
					),
		'clown' => array(
					array('start' => '2006-07','end' => '2006-08'),
					),
		'hairdresser' => array(
					array('start' => '2006-09','end' => '2007-02'),
					array('start' => '2011-01','end' => '2012-10'),
					),
		'florist' => array(
					array('start' => '2008-12','end' => '2010-05'),
					),
		'plumber' => array(
					array('start' => '2007-03','end' => '2008-04'),
					array('start' => '2010-08','end' => '2010-12'),
					),
		'teacher' => array(
					array('start' => '2013-01','end' => '2015-12'),
					),
		'student' => array(
					array('start' => '1978-01','end' => '2015-12'),
					),
		);
//http://php.net/manual/fr/function.date.php
$format = array(
		'segment_des'		=> '%s to %s',
		'timesheet_format'	=> 'Y-m',
		'date_format' => 'M Y',
		);
$args = array(
		'id' => 'job',
		'theme' =>'white',
		'alpha_first' => 2005,
		'omega_base' => 12,
		'format' => $format
		);

$works = new timesheet($alpha, $args, $data );
$works->display();
?>
<br>

<?php

$alpha =array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');

$data = array(
		'free' => array(
					array('start' => '06-09','end' => '07-24'),
					),
		'work meeting' => array(
					array('start' => '01-09','end' => '01-12'),
					array('start' => '03-13','end' => '03-17'),
					array('start' => '05-13','end' => '05-16'),
					),
		'personnal work' => array(
					array('start' => '01-13','end' => '01-17'),
					array('start' => '02-13','end' => '02-17'),
					array('start' => '04-09','end' => '04-12'),
					),
		'sport' => array(
					array('start' => '04-13','end' => '04-18'),
					),
		'tv' => array(
					array('start' => '01-19','end' => '01-24'),
					array('start' => '02-19','end' => '02-24'),
					array('start' => '03-19','end' => '03-24'),
					array('start' => '04-19','end' => '04-24'),
					array('start' => '05-19','end' => '05-24'),
					),

		);


$args = array(
		'id' => 'week',
		'theme' =>'white',
		'alpha_first' => 1,
		'omega_base' => 15,
		'omega_first' => 9,
		'format' => null
		);


$week = new timesheet($alpha, $args, $data );
$week->display();
?>
<br><br><br><br><br>
</body>
</html>
