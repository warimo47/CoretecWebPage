<?
$gcode = "01";
$pcode = "06";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>

<div id="container">
	<div class="container_inner">
		<div class="sub_title">
			<p class="subject"><?=$pagename;?></p>
			<p class="content"></p>
			<div class="vision">
				<img src="./img/portfolio.jpg"  style="border:0px solid #eee;">
			</div>
		</div>
	</div>
</div>

<?
include_once('./tail.php');
?>