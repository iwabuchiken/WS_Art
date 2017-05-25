<!-- 
#source
C:\WORKS_2\WS\WS_Art
choose dir => ART_D-22

#destination
/PHP_server

 -->

<?php 

	require_once 'utils.php';

?>

<html>
<head>
	
	<title><?php echo basename(__FILE__); ?></title>
	
	<meta name="viewport"
           content="width=device-width,
			user-scalable=yes,
			initial-scale=0.8,
                    maximum-scale=3.0" />

	<link rel="stylesheet" href="./stylesheet/main.css" type="text/css">
                    
	<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

	<!-- http://www.pori2.net/js/kihon/16.html -->
	<script type="text/javascript" src="./javascript/main.js"></script>
	
</head>

<?php

	//REF http://www.4web8.com/2581.html
	date_default_timezone_set('Asia/Tokyo');
	
// 	setlocale(LC_ALL, 'nl_NL');

	$current = time();
	
	$date_label = date("d/m/Y H:i:s");
	$date_only_label = date("d/m/Y");
	$time_label = date("H:i:s");
	$time_label_serial = date("Ymd_His");

	
?>

<body>

<a href="#table_Red">Red</a>
<a href="#table_Green">Green</a>
<a href="#table_Blue">Blue</a>

&nbsp;&nbsp;

<a href="#table_Mix">Mix</a>

&nbsp;&nbsp;

<a href="#table_Mix_2">Mix-2</a>

&nbsp;&nbsp;

<a href="#table_Mix_3">Mix-3</a>

<hr>

<?php 

	//ref http://www.jonasjohn.de/snippets/php/color-inverse.htm
	//search https://www.google.co.jp/search?q=php+complementary+color&oq=php+complementary&aqs=chrome.2.69i64j5j0l2.8817j0j1&sourceid=chrome&ie=UTF-8
	function color_inverse($color){
		$color = str_replace('#', '', $color);
		if (strlen($color) != 6){ return '000000'; }
		$rgb = '';
		for ($x=0;$x<3;$x++){
			$c = 255 - hexdec(substr($color,(2*$x),2));
			$c = ($c < 0) ? 0 : dechex($c);
			$rgb .= (strlen($c) < 2) ? '0'.$c : $c;
		}
		return '#'.$rgb;
	}

?>

<table id='table_Red'>

	<?php 
	
	
// 		for ($i = 0; $i < 10; $i++) {
		$i = 0; $j = 0;
		$i_max = 22;
		
		while ($i < $i_max) {
		
			;
			
	?>
			
		<tr>
		
			<?php 
				
				while ($j < 10) {
// 				for ($j = 0; $j < 10; $j++) {
				
					;
				
			?>
<!-- 			ref https://www.w3schools.com/tags/att_td_bgcolor.asp -->
				<td
					id='<?php echo "cell_$i"."x"."$j"; ?>'
					bgcolor='
						<?php
							
							$val = $i*10 + $j * 5;
							//ref http://php.net/manual/en/function.dechex.php
							$hex = ($val <= 16 ? "0".dechex($val) : dechex($val));
							
							echo "#".$hex."0000";
// 							echo "#".dechex($i*10 + $j * 5)."0000";
							
							?>
						'
					>
<!-- 					bgcolor=' -->
						<?php 
								//echo "#ff00ff"; ?>
<!-- 								' -->
					
<!-- 					bgcolor='#ff0000' //=> works. -->
<!-- 					bgcolor='rgb( -->
						<?php //echo 0; ?>
<!-- 								, 0, 0)' -->
					<!-- bgcolor='rgb(<?php //echo (100 + $i * 10)?>, 0, 0)' -->
				
					<font color="#aaaaaa">
					
						<?php 
							
							echo $val."(".$hex.")"; 
// 							echo ($i*10 + $j * 5)."(".dechex($i*10 + $j * 5).")"; 
							
							?>
						
					</font>
					
					<?php //echo ($i * 10) + $j; ?>
					<?php //echo $i * $j; ?>
					<?php //echo $i * $j; ?>
				
				</td>
			
			<?php 
			
					$j += 1;
			
				}//while ($j < 10) {
// 				}//for ($j = 0; $j < 10; $j++)
			
			?>
		
		</tr>
		
	<?php
	
			$j = 0;
	
			$i += 1;
	
		}//while ($i < 10) {
// 		}//for ($i = 0; $i < 10; $i++)
	
	?>

</table>

<table id='table_Green'>

	<?php 
	
// 		for ($i = 0; $i < 10; $i++) {
		$i = 0; $j = 0;
		$i_max = 22;
		
		while ($i < $i_max) {
		
			;
			
	?>
			
		<tr>
		
			<?php 
				
				while ($j < 10) {
// 				for ($j = 0; $j < 10; $j++) {
				
					;
				
			?>
<!-- 			ref https://www.w3schools.com/tags/att_td_bgcolor.asp -->
				<td
					id='<?php echo "cell_$i"."x"."$j"; ?>'
					bgcolor='
						<?php
							
							$val = $i*10 + $j * 5;
							//ref http://php.net/manual/en/function.dechex.php
							$hex = ($val <= 16 ? "0".dechex($val) : dechex($val));
							
							echo "#"."00".$hex."00";
// 							echo "#"."0000".$hex;
// 							echo "#".$hex."0000";
// 							echo "#".dechex($i*10 + $j * 5)."0000";
							
							?>
						'
					>
<!-- 					bgcolor=' -->
						<?php 
								//echo "#ff00ff"; ?>
<!-- 								' -->
					
<!-- 					bgcolor='#ff0000' //=> works. -->
<!-- 					bgcolor='rgb( -->
						<?php //echo 0; ?>
<!-- 								, 0, 0)' -->
					<!-- bgcolor='rgb(<?php //echo (100 + $i * 10)?>, 0, 0)' -->
				
					<font color='
							<?php 
							
								$val2 = 255 - $val;
								
								$hex_2 = dechex($val2);
								
								echo "#".$hex_2.$hex_2.$hex_2;
								
							?>
							
							'>
<!-- 					<font color="#aaaaaa"> -->
					
						<?php 
							
							echo $val."(".$hex.")"; 
// 							echo ($i*10 + $j * 5)."(".dechex($i*10 + $j * 5).")"; 
							
							?>
						
					</font>
					
					<?php //echo ($i * 10) + $j; ?>
					<?php //echo $i * $j; ?>
					<?php //echo $i * $j; ?>
				
				</td>
			
			<?php 
			
					$j += 1;
			
				}//while ($j < 10) {
// 				}//for ($j = 0; $j < 10; $j++)
			
			?>
		
		</tr>
		
	<?php
	
			$j = 0;
	
			$i += 1;
	
		}//while ($i < 10) {
// 		}//for ($i = 0; $i < 10; $i++)
	
	?>

</table>



<table id='table_Blue'>

	<?php 
	
// 		for ($i = 0; $i < 10; $i++) {
		$i = 0; $j = 0;
		$i_max = 22;
		
		while ($i < $i_max) {
		
			;
			
	?>
			
		<tr>
		
			<?php 
				
				while ($j < 10) {
// 				for ($j = 0; $j < 10; $j++) {
				
					;
				
			?>
<!-- 			ref https://www.w3schools.com/tags/att_td_bgcolor.asp -->
				<td
					id='<?php echo "cell_$i"."x"."$j"; ?>'
					bgcolor='
						<?php
							
							$val = $i*10 + $j * 5;
							//ref http://php.net/manual/en/function.dechex.php
							$hex = ($val <= 16 ? "0".dechex($val) : dechex($val));
							
							echo "#"."0000".$hex;
// 							echo "#".$hex."0000";
// 							echo "#".dechex($i*10 + $j * 5)."0000";
							
							?>
						'
					>
<!-- 					bgcolor=' -->
						<?php 
								//echo "#ff00ff"; ?>
<!-- 								' -->
					
<!-- 					bgcolor='#ff0000' //=> works. -->
<!-- 					bgcolor='rgb( -->
						<?php //echo 0; ?>
<!-- 								, 0, 0)' -->
					<!-- bgcolor='rgb(<?php //echo (100 + $i * 10)?>, 0, 0)' -->
				
					<font color="#aaaaaa">
					
						<?php 
							
							echo $val."(".$hex.")"; 
// 							echo ($i*10 + $j * 5)."(".dechex($i*10 + $j * 5).")"; 
							
							?>
						
					</font>
					
					<?php //echo ($i * 10) + $j; ?>
					<?php //echo $i * $j; ?>
					<?php //echo $i * $j; ?>
				
				</td>
			
			<?php 
			
					$j += 1;
			
				}//while ($j < 10) {
// 				}//for ($j = 0; $j < 10; $j++)
			
			?>
		
		</tr>
		
	<?php
	
			$j = 0;
	
			$i += 1;
	
		}//while ($i < 10) {
// 		}//for ($i = 0; $i < 10; $i++)
	
	?>

</table>

<table id='table_Mix'>

	<?php 
	
// 		for ($i = 0; $i < 10; $i++) {
		$i = 0; $j = 0;
		$i_max = 20;
// 		$i_max = 10;
// 		$i_max = 22;
		
		while ($i < $i_max) {
		
			;
			
	?>
			
		<tr>
		
			<?php 
				
				while ($j < $i_max) {
// 				while ($j < 10) {
// 				for ($j = 0; $j < 10; $j++) {
				
					;
				
			?>
<!-- 			ref https://www.w3schools.com/tags/att_td_bgcolor.asp -->
				<td
					id='<?php echo "cell_$i"."x"."$j"; ?>'
					bgcolor='
						<?php
							
							$val = $i*10 + $j * 5;
							//ref http://php.net/manual/en/function.dechex.php
							$hex = ($val <= 16 ? "0".dechex($val) : dechex($val));
							
							$tick = 7;
							$hex_R_tmp = (intval($i * $tick + $j * $tick) > 255
										? 255
										: intval($i * $tick + $j * $tick));
							
// 							$hex_R_tmp = intval(sqrt(($i*200)^2 + ($j*200)^2));
// 							$hex_R_tmp = intval(sqrt(($i*10)^2 + ($j*10)^2));
// 							$hex_R_tmp = intval(sqrt(($i*10)^2 + ($j*10)^2)*(sqrt(($i*10 + $j*10)/1000.0)));
// 							$hex_R_tmp = intval(sqrt($i^2 + $j^2)*(sqrt(($i + $j)/1000.0)));
							
							$hex_R = sprintf("%02x", $hex_R_tmp);
// 							$hex_R = ($hex_R_tmp <= 16 ? "0".dechex($hex_R_tmp) : dechex($hex_R_tmp));
// 							$hex_G = sprint("%02x", $i);
// 							$hex_G = sprint("%02x", dechex($i));
// 							$hex_B = ($i < 10 ? "0".dechex($i) : dechex($i));

							$hex_G = sprintf("%02x", $j*10);
// 							$hex_G = ($j < 16 ? "0".dechex($j*10) : dechex($j*10)); //=> works

							$hex_B = sprintf("%02x", $i*10);
// 							$hex_B = ($i < 16 ? "0".dechex($i) : dechex($i));
// 							$hex_G = ($j < 16 ? "0".dechex($j) : dechex($j));
// 							$hex_B = ($i < 16 ? "0".dechex($i) : dechex($i));
							
// 							$hex_G = ($j <= 16 ? "0".dechex($j) : dechex($j));
// 							$hex_B = ($i <= 16 ? "0".dechex($i) : dechex($i));
							
							
							
							echo "#".$hex_R.$hex_G.$hex_B;
// 							echo "#"."0000".$hex;
// 							echo "#".$hex."0000";
// 							echo "#".dechex($i*10 + $j * 5)."0000";
							
							/*******************************
								complementary
							*******************************/
							//ref https://stackoverflow.com/questions/3054873/programmatically-find-complement-of-colors ""answered Jun 7 '16 at 9:41
							$comp_Dec_R = max($hex_R_tmp, $i*10, $j*10) 
											+ min($hex_R_tmp, $i*10, $j*10) 
											- $hex_R_tmp;
							
							$comp_Dec_G = max($hex_R_tmp, $i*10, $j*10) 
											+ min($hex_R_tmp, $i*10, $j*10) 
											- $j*10;
							
							$comp_Dec_B = max($hex_R_tmp, $i*10, $j*10) 
											+ min($hex_R_tmp, $i*10, $j*10) 
											- $i*10;
							
							$col_Comp = sprintf("#%02x%02x%02x"
										, $comp_Dec_R
										, $comp_Dec_G, 
										$comp_Dec_B);
							
							
							?>
						'
					>
<!-- 					bgcolor=' -->
						<?php 
								//echo "#ff00ff"; ?>
<!-- 								' -->
					
<!-- 					bgcolor='#ff0000' //=> works. -->
<!-- 					bgcolor='rgb( -->
						<?php //echo 0; ?>
<!-- 								, 0, 0)' -->
					<!-- bgcolor='rgb(<?php //echo (100 + $i * 10)?>, 0, 0)' -->
				
					<font color='
							<?php 
								
								echo color_inverse("#".$hex_R.$hex_G.$hex_B);
// 								echo $col_Comp;
							
							?>
							
						'>
					
						<?php 
							
// 							echo "$i, $j, $hex_R_tmp";
// 							echo sqrt(($i*50)^2 + ($j*50)^2);
// 							echo "$hex_R, $hex_G, $hex_B ($i, $j)";
							echo $hex_R.$hex_G.$hex_B;
// 							echo "$hex_R, $hex_G, $hex_B";
// 							echo "(#".$hex_R.$hex_G.$hex_B.")";
// 							echo $val."(".$hex.")"; 
// 							echo ($i*10 + $j * 5)."(".dechex($i*10 + $j * 5).")"; 
							
							?>
						
					</font>
					
					<?php //echo ($i * 10) + $j; ?>
					<?php //echo $i * $j; ?>
					<?php //echo $i * $j; ?>
				
				</td>
			
			<?php 
			
					$j += 1;
			
				}//while ($j < 10) {
// 				}//for ($j = 0; $j < 10; $j++)
			
			?>
		
		</tr>
		
	<?php
	
			$j = 0;
	
			$i += 1;
	
		}//while ($i < 10) {
// 		}//for ($i = 0; $i < 10; $i++)
	
	?>

</table>

<table id='table_Mix_2'>

	<?php 
	
		/*******************************
			setup : index
		*******************************/
		$i = 0; $j = 0;
		
		$i_max = 20;
		$j_max = 20;

		$max_RGB = 255;
		
		$tick_i = floor($max_RGB / $i_max * 1.0) + 1;
		$tick_j = floor($max_RGB / $j_max * 1.0) + 1;
// 		$tick_i = floor($max_RGB / $i_max * 1.0);
// 		$tick_j = floor($max_RGB / $j_max * 1.0);
		
		//debug
		echo "tick_i = '$tick_i'";
		
		while ($i < $i_max) {
		
	?>
			
			<?php 
				
				while ($j < $i_max) {
				
			?>
<!-- 			ref https://www.w3schools.com/tags/att_td_bgcolor.asp -->
				<td
					id='<?php echo "cell_$i"."x"."$j"; ?>'
					bgcolor='
						<?php
							
							$val = $i*10 + $j * 5;
							//ref http://php.net/manual/en/function.dechex.php
							$hex = ($val <= 16 ? "0".dechex($val) : dechex($val));
							
// 							$tick = 7;
// 							$hex_R_tmp = (intval($i * $tick + $j * $tick) > 255
// 										? 255
// 										: intval($i * $tick + $j * $tick));
							$dec_R_Nomi = ($tick_i * $i) * ($tick_j * $j);
							$dec_R_Denomi = (($tick_i + $tick_j) / 2) 
												* (($i + $j) / 2) 
												+ 0.1 ;		// '+ 0.1' to avoid 0 devision error
							
							
							$hex_R_tmp = $max_RGB - ($dec_R_Nomi / $dec_R_Denomi);
							
							$hex_R = sprintf("%02x", $hex_R_tmp);

							$hex_G = sprintf("%02x", $j * $tick_j);
// 							$hex_G = sprintf("%02x", $j*10);

							$hex_B = sprintf("%02x", $i * $tick_i);
// 							$hex_B = sprintf("%02x", $i*10);
							
							echo "#".$hex_R.$hex_G.$hex_B;
							
							/*******************************
								complementary
							*******************************/
							//ref https://stackoverflow.com/questions/3054873/programmatically-find-complement-of-colors ""answered Jun 7 '16 at 9:41
							$comp_Dec_R = max($hex_R_tmp, $i*10, $j*10) 
											+ min($hex_R_tmp, $i*10, $j*10) 
											- $hex_R_tmp;
							
							$comp_Dec_G = max($hex_R_tmp, $i*10, $j*10) 
											+ min($hex_R_tmp, $i*10, $j*10) 
											- $j*10;
							
							$comp_Dec_B = max($hex_R_tmp, $i*10, $j*10) 
											+ min($hex_R_tmp, $i*10, $j*10) 
											- $i*10;
							
							$col_Comp = sprintf("#%02x%02x%02x"
										, $comp_Dec_R
										, $comp_Dec_G, 
										$comp_Dec_B);
							
							?>
						'>
				
					<font color='
							<?php 
								
								echo color_inverse("#".$hex_R.$hex_G.$hex_B);
							
							?>
							
						'>
					
						<?php 
							
							echo $hex_R.$hex_G.$hex_B;
							
							?>
						
					</font>
					
				</td>
			
			<?php 
			
					$j += 1;
			
				}//while ($j < 10) {
			
			?>
		
		</tr>
		
	<?php
	
			$j = 0;
			$i += 1;
	
		}//while ($i < 10) {
	
	?>

</table>

<table id='table_Mix_3'>

	<?php 
	
		/*******************************
			setup : index
		*******************************/
		$i = 0;		// horizontal address
		$j = 0;		// vertical address
		
		$i_max = 20;
// 		$j_max = 30;
		$j_max = 20;

		$max_RGB = 255;

		$ary_Data = Util::init_RGB_Values($i_max, $j_max);
// 		$ary_Data = Util::init_RGB_Values(20, 20);

		// process values
		$ary_Data = Util::calc_RGB_Values__Mix_3($ary_Data);
		
		$tick_i = floor($max_RGB / $i_max * 1.0) + 1;
		$tick_j = floor($max_RGB / $j_max * 1.0) + 1;
// 		$tick_i = floor($max_RGB / $i_max * 1.0);
// 		$tick_j = floor($max_RGB / $j_max * 1.0);
		
		//debug
		echo "tick_i = '$tick_i'";
		
		while ($j < $j_max) {
		
	?>
			
			<?php 
				
				while ($i < $i_max) {
				
			?>
<!-- 			ref https://www.w3schools.com/tags/att_td_bgcolor.asp -->
				<td
					id='<?php echo "cell_$j"."x"."$i"; ?>'
					bgcolor='
						
						<?php 
						
							echo Util::conv_RGB_2_HexString($ary_Data[$j][$i]);
// 							echo $ary_Data[$j][$i];
						
						?>
					
					'>
				
					<font color='#ffffff
							<?php 
								
// 								echo color_inverse("#".$hex_R.$hex_G.$hex_B);
							
							?>
							
						'>
					
						<?php 
							
							echo Util::conv_RGB_2_HexString($ary_Data[$j][$i]);
							
							?>
						
					</font>
					
				</td>
			
			<?php 
			
					$i += 1;
			
				}//while ($j < 10) {
			
			?>
		
		</tr>
		
	<?php
	
			$i = 0;
			$j += 1;
	
		}//while ($i < 10) {
	
	?>

</table>

</body>

</html>