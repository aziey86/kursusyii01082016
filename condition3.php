<?php 
$nama="aziey";
$course="science comp";
$cgpa=3;

switch ($cgpa) {
	case $cgpa==4.0:
		$grade="high distinction";
		break;
	case $cgpa >= 3.33 && $cgpa <= 3.99:
		$grade="distinction";
		break;
	case $cgpa >= 2.67 && $cgpa <= 3.32:
		$grade="credit";
		break;
	case $cgpa >= 2.00 && $cgpa <= 2.66:
		$grade="pass";
		break;
	case $cgpa <= 1.99:
		$grade="failed";
		break;
	
	default:
		$grade=null;
		break;
}

switch ($grade) {
	case $grade==null:
		echo "sila masukkan CGPA yg betul";
		break;
	
	default:
		echo "selamat datang ".$nama.". u hv enroll ".$course.". Based on your CGPA (".$cgpa."), your grade is ".$grade;
		break;
}

 ?>