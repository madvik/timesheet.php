<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <title>TimeSheet.php</title>
    <link href="../sources/css/timesheet.css" rel="stylesheet" type="text/css">
    <link href="prism.css" rel="stylesheet" type="text/css">

</head>
    <style>
    body{
        padding:5%;
        background-color:#E8E8E8;
        font-family:Arial;
    }
    h1{
        color: #FF9112;
        font-family: "Open Sans";
        font-size: 60pt;
        font-weight: 800;
        margin:20px auto 50px auto;
        text-align:center;
    }
    h1 span{
        color: grey;
        font-weight: 300;
    }
    h2{
        color: #FF9112;
    }
    h3{
        margin-bottom:10px;
        border-bottom: 1px solid grey;
    }
    .code{
        width:100%;
        height:100%;
        font-size:12px;
        background-color: #FFF;
        margin:20px 0;
        padding :1em;
    }
    figure{
        float:left;
        position:relative;
        vertical-align:top;
        border:1px dashed grey;
        padding: 10px;
        margin: 0 30px 30px 0;
    }
    #footer{
        position: fixed;
        bottom: 0;
        font-size:12px;
        background-color:#E8E8E8;
        width:100%;
        line-height:2em;
    }
    </style>
<body>
<h1>Timesheet<span>.php</span></h1>

<p>
Visualize your data and events with HTML5 and CSS3. Create simple time sheets with PHP. Inspired by <a href="http://semu.github.io/timesheet.js/">Timesheet.js</a> (css forked).
</p>
<p>Repository GitHub : <a href="https://github.com/madvik/timesheet.php">https://github.com/madvik/timesheet.php</a></p>
<p>
    Features
    <ul>
        <li>Several segment by row</li>
        <li>Choose your units</li>
        <li>Format the date display</li>
        <li>Responsive</li>
        <li>Add a line for date of interest</li>
    </ul>
</p>


<h2>Usage exemple</h2>
<?php include "../sources/class.timesheet.php"; ?>

<h3>Seasons</h3>
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
<div class="code">
<code class="language-php">
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
</code>
</div>
    
<h3>Works</h3>

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
<div class="code">
<code class="language-php">
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
</code></div>
<br>
<h3>Week</h3>
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
<div class="code">
<code class="language-php">
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
</code></div>
    
<h2>Responsive</h2>

<div class="item">
    
     <figure>
         <figcaption>Resolution &lt; 500px</figcaption>
        <img src="week.png" width="353" height="339" alt="Week time sheet" title="Week time sheet"/>
    </figure>

</div>
<div class="item">
         <figure>
         <figcaption>Resolution &lt; 350px</figcaption>
        <img src="season.png" width="309" height="407" alt="Season time sheet" title="Season time sheet"/>
    </figure> 

</div>

<div id="footer">Copyright 2015 - Madvic</div>
<script src="prism.js"></script>
</body>
</html>
