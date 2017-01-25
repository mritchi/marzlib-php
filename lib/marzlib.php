<?php

/**
 * 
 * 
 */
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace dbtest\lib\marzlib;
/**
 * 
 * @param mixed $x
 * @paeam int|double $length 
 * @return string first character of the typename
 */
function getshorttype($x,$length = 3) {
	$len = 0;
	if (\is_double($length)) {
		$y = \floor(\abs($length));
		$n =  (($y> 0) && ($y < 4)) ? $y : 1;
		$len = \intval($y,10);
	} elseif (\is_int($length)) {
		$n = \intval(\abs($length),10);
		$len = (($len > 0) && ($len < 5)) ? \intval($len) : 1;
	} else {
		$len = 1;
	}
	return \strtolower(\substr(\gettype($x),0,$len));
}

function getshortestType($x) {
	return getshorttype($x,1);
}
function getsubtype($x) {
	switch(getshorttype($x)) {
	case 's':
			
	case 'i':
	case 'd':
	}
}

*/
?>
