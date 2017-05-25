<?php

class Util {
	
	/*
	 * @param $x	=> horizontal length
	 * @param $y	=> vertical length
	 * @param $default	=> default value for each RGB element
	 * 					e.g. if 0 --> array(0, 0, 0)
	 * 
	 */
	static function init_RGB_Values($x, $y, $default = 0) {
		
		$ary = array();
		
		for ($i = 0; $i < $y; $i++) {
	
			$ary_tmp = array();
			
			for ($j = 0; $j < $x; $j++) {
			
				array_push($ary_tmp, array($default, $default, $default));
				
			}//for ($j = 0; $j < $x; $j++)
				
			array_push($ary, $ary_tmp);
			
		}//for ($i = 0; $i < $x; $i++)
		
		// return
		return $ary;
		
	}//function init_RGB_Values($x, $y)
	
	/*
	 * @param $ary_RGB array(123, 203, 12)
	 * 
	 * @return "#7BCB0C"
	 */
	static function conv_RGB_2_HexString($ary_RGB) {
		
		$r = sprintf("%02x", $ary_RGB[0]);
		$g = sprintf("%02x", $ary_RGB[1]);
		$b = sprintf("%02x", $ary_RGB[2]);
		
		// return
		return "#".$r.$g.$b;
		
		
	}//function conv_RGB_2_HexString($ary_RGB) {

	static function calc_RGB_Values__Mix_3($ary_Data) {
	
		/*******************************
			column : 0
		*******************************/
		// red color, gradation
		$height = count($ary_Data);
		$width = count($ary_Data[0]);
		
		$tick_Height = 255 / $height;

		for ($i = 0; $i < $height; $i++) {
		
			$ary_Data[$i][0][0] = 255 - $i * $tick_Height;
			
		}//for ($i = 0; $i < $height; $i++)
		
		// return
		return $ary_Data;
	
	}//static function calc_RGB_Values__Mix_3($x, $y, $default = 0)
	
	
	
}

