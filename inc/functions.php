<?php

function getMonth($month){
	switch ($month) {
		case '01': $month = "Tháng Một";break;
		case '02': $month = "Tháng Hai";break;
		case '03': $month = "Tháng Ba";break;
		case '04': $month = "Tháng Tư";break;
		case '05': $month = "Tháng Năm";break;
		case '06': $month = "Tháng Sáu";break;
		case '07': $month = "Tháng Bảy";break;
		case '08': $month = "Tháng Tám";break;
		case '09': $month = "Tháng Chín";break;
		case '10': $month = "Tháng Mười";break;
		case '11': $month = "Tháng Mười Một";break;
		default: $month = "Tháng Mười Hai";break;
	}
	return $month;
}


?>