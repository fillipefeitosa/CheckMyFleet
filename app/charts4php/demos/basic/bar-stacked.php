<?php
/**
 * Charts 4 PHP
 *
 * @author Shani <support@chartphp.com> - http://www.chartphp.com
 * @version 1.2.1
 * @license: see license.txt included in package
 */
 
include("../../lib/inc/chartphp_dist.php");

// Horizontal
$p = new chartphp();
$p->data = array(
				array(
					array(6,1), array(3,2), array(7,3), array(5,4), array(8,5)
					), 
				array(
					array(7,1), array(5,2), array(3,3), array(3,4), array(10,5)
					), 
				array(
					array(5,1), array(9,2), array(9,3), array(8,4), array(3,5)
					)
				);
				
$p->chart_type = "bar-stacked";

// Common Options
$p->title = "Horizontal Bar Stacked";
$p->xlabel = "My X Axis";
$p->ylabel = "My Y Axis";
$p->series_label = array('Q1','Q2','Q3');
$p->direction = "horizontal";
$out1 = $p->render('c1');

// Vertical
$p = new chartphp();
$p->data = array(
				array(
					array(1,4), array(2,6), array(3,7), array(4,10), array(5,8)
					), 
				array(
					array(1,7), array(2,5),array(3,3),array(4,2), array(5,10)
					), 
				array(
					array(1,14), array(2,9), array(3,9), array(4,8), array(5,3)
					),
				array(
					array(1,14), array(2,9), array(3,9), array(4,8), array(5,8)
					)
				);
				
$p->chart_type = "bar-stacked";

// Common Options
$p->title = "Vertical Bar Stacked";
$p->xlabel = "My X Axis";
$p->ylabel = "My Y Axis";
$p->series_label = array('Q1','Q2','Q3','Q4');
$out2 = $p->render('c2');
?>
<!DOCTYPE html>
<html>
	<head>
		<script src="../../lib/js/jquery.min.js"></script>
		<script src="../../lib/js/chartphp.js"></script>
		<link rel="stylesheet" href="../../lib/js/chartphp.css">
	
	<style>
		/* white color data labels */
		.jqplot-point-label{color:white;}
	</style>
	</head>
	
	<body>
		<div style="width:40%; min-width:450px;">
			<?php echo $out1; ?>
			<br>
			<?php echo $out2; ?>
		</div>
	</body>
</html>