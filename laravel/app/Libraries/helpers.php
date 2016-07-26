<?php
date_default_timezone_set('Asia/Calcutta');
/*namespace App\Helpers;*/

function showMobileURL()
{
	$detect = BrowserDetect::detect();
	if( $detect->isMobile ){ //Any mobile device (phones or tablets)
		return TRUE;
	}
	return FALSE;
}

function now(){
	return (date("Y-m-d H:i:s"));
}

function strip_zeros_from_date($marked_string="") {
	$no_zeros=str_replace('*0', '', $marked_string);
	$cleaned_string=str_replace('*', '', $no_zeros);
	return $cleaned_string;
}

function ConvertDate($sql_date) {
	$date=strtotime($sql_date);
	$final_date=strip_zeros_from_date(strftime("*%d %B %Y at *%I:%M %p", $date));
	return $final_date;
}

function ConvertDate2($sql_date) {
	$date=strtotime($sql_date);
	$final_date=strip_zeros_from_date(strftime("*%d-%m-%Y", $date));
	return $final_date;
}

function timediff($lastsent, $now){
	$timediff=round(abs(strtotime($now) - strtotime($lastsent))/ 60,2); /*$timediff output format minutes.seconds*/
	return $timediff;
}