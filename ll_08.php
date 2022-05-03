<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($filename=="sub_01_01.php") $pagename = "인사말";
if($filename=="sub_01_03.php") $pagename = "연혁";
if($filename=="sub_07_01.php") $pagename = "오시는길";
if($bo_table=="01_02") $pagename = "회사소개";
?>

<div id="subvisual" style="background:url(./img/sv_02.jpg);">
	<div class="subvisual_inner"></div>

</div>
	<div class="sub_tab">
		<a href="<?php echo G5_URL;?>./sub_08_01.php" <?php if ($pcode == '08') { ?>class="tab_on"<?php }?>>smart-put</a>
		
	</div>
<div id="container">
	<div class="container_inner">

	<!-- <div class="sub_title">
		<p class="subject"><?=$board["bo_subject"] ?><?=$pagename;?></p>
		<p class="content"></p>
	</div> -->
	

	
	
	

