<?
$gcode = "02";
$pcode = "03";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>

<div id="container">
	<div class="container_inner">
		<div class="sub_title">
			<p class="s_title"><?=$pagename;?></p>
			<div class="bottom_border"><img src="./img/bottom_border.jpg"></div>
			<div class="vision">
				<img src="./img/sub_02_03.jpg"  style="border:0px solid #eee;">
			</div>
		</div>
	</div>
</div>

<?
include_once('./tail.php');
?>