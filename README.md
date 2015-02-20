# Timesheet.php

Simple PHP class to create HTML time sheets. This is largely inspired by [Timesheet.js](https://sbstjn.github.io/timesheet.js).
Timesheet.php is licensed under GPLV3 License.

![https://madvik.github.io/timesheet.php](https://raw.githubusercontent.com/madvik/timesheet.php/master/screenshot.png)

## Features

* Several segment by level
* Choose your units
* Format the date display
* Responsive
* Add a line for date of interest
    
## Usage 

You only have to include `sources/class.timesheet.php` and `sources/css/timesheet.css` in your HTML and initialize Timesheet.php with:

Include the css
```HTML
<link href="../sources/css/timesheet.css" rel="stylesheet" type="text/css">
```

Include the PHP class
```PHP
<?php include "../sources/class.timesheet.php"; ?>
```

And an exemple 
```PHP
<?php

$alpha = array('Janv', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$data = array(
		'Prun' => array(
					array('start' => '01-15','end' => '02-20'),
					array('start' => '09-07','end' => '12-07'),
					),
		'Orange' => array(
					array('start' => '02-01','end' => '06-31'),
					),
		'Kiwi' => array(
					array('start' => '08-30','end' => '01-20'),
					),
        ...
		);

$args = array(
		'id' => 'season',            /* CSS #ID of the timesheet */
		'theme' =>'white',           /* Theme white (or null for dark) */
		'alpha_first' => 1,          /* The number of the first month is one (Janv) */
		'omega_base' => 31,          /* 31 days in 1 month (for simplify) */
		'line' => date('m-d'),       /* Today in format 'm-d' */
		'line_text' => 'Today',      /* Text to display for the line */
		);

$fruits = new timesheet($alpha, $args, $data );
$fruits->display();
?>
```

## Configuration

### Param

The class param :

| Option | Description | Type |
| :----- | :---------- | :------ |
| `$alpha` | The list of the section title. The array count represent the number of section. Exemple : `array('Janv', 'Fev', 'Mar',...)` | String array |
| `$args` | Array list of parameters. | Map array |
| `$data` | The structured data of the time sheet. | Map array |

The `$args` array

| Option | Description | Default |
| :----- | :---------- | :------ |
| `id` | The css ID of the time sheet | `timesheet` |
| `theme` | The theme of the time sheet | `null` (dark) |
| `alpha_first` | If the alpha value don't start to 1 | `1` |
| `omega_base` | The number of omega in one Alpha | `10` |
| `omega_first` | If the oimega value don't start to 1 | `1` |
| `line` | For diplay a line for a date of interest | `null` |
| `line_text` | The text legend of the line (`Today` for exemple) | `null` |
| `format` | The css ID of the time sheet | `null` |

The `$args['format']` array

| Option | Description | Default |
| :----- | :---------- | :------ |
| `segment_des` | Description of a segment. The first `%s` correspond to the start value and the second to the end. The string is for a `sprintf()` function. | `%s to %s` |
| `timesheet_format` | If the format `{alpha}-{omega}` can transform in a date format, fill it. Like `Y-m` for `{year}-{month}`. See [http://php.net/manual/en/function.date.php](http://php.net/manual/en/function.date.php) | `null` |
| `date_format` | The same for the time sheet display. | `null` |

The `$data` array

The data array is composed of level (keys), itself compound several array (segment) (a segment can be broken into several segments during in the display).
The definition of time is divided in 2 units `alpha` and `omega` (`{alpha}-{omega}`).
Alpha can be a year and omega, a month. Or Alpha a month and omega a day. It's open.
```PHP
$data = array(
        'Title1' => array(
                    array('start' => '{alpha}-{omega}','end' => '{alpha}-{omega}'),
                    ...
                    ),
         'Title2' => array(
                    array('start' => ...
```

For more information, you can see the [exemple](http://madvic.net/timesheet/).



