<?php
include "qrlib.php";
function qrcode( $string ) {
	QRcode::png($string, $string.".png","L","4","4");
	return "<img src='".$string.".png'/>";
}?>