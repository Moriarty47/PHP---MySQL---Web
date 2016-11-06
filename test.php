<?php

error_reporting(0);
$week = array(	'星期一','星期二','星期三',
				'星期四','星期五','星期六',
				'星期日');
/*$month = array(	'一'	,	'二'	,	'三'	,
				'四'	,	'五'	,	'六'	,
				'七'	,	'八'	,	'九'	,
				'十'	,	'十一'	,	'十二');*/
$time = '';
$str = '';
$date = getdate();



if($_SERVER["REQUEST_METHOD"] == 'GET'){
	echo "<div>刷新于<p style='color:red;'>" . get_date() . get_time() . "</p></div>";
}



function get_time(){
	global $date,$time;
	$sec = $date[seconds];
	$min = $date[minutes];
	$hou = $date[hours] + 7;

	$time = $hou .':'. $min .':'. $sec;
	return ' '.$time;
}

function get_date(){
	global $date,$month,$week,$str;
	$year = $date[year];
	$mon = $date[mon];
	$day = $date[mday];
	$wk = $week[$date[wday]-1];
	$str = $year . '年' . $mon . '月' . $day . '日  ' . $wk;
	return $str;
}

?>