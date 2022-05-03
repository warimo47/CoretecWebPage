<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($filename=="sub_01_01.php") $pagename = "인사말";
if($filename=="sub_01_02.php") $pagename = "연혁";
if($filename=="sub_04_01.php") $pagename = "오시는길";
if($bo_table=="01_01") $pagename = "회사소개";
?>

<div id="subvisual" style="background:url(./img/sv_02.jpg);">
	<div class="subvisual_inner"></div>

</div>
	<div class="sub_tab">
		<a href="<?php echo G5_URL;?>./sub_05_06.php" <?php if ($pcode == '06') { ?>class="tab_on"<?php }?>>실내측위</a>
		<a href="<?php echo G5_URL;?>./sub_05_05.php" <?php if ($pcode == '05') { ?>class="tab_on"<?php }?>>3D 지하철 – 서울</a>
		<a href="<?php echo G5_URL;?>./sub_05_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>Impact Analysis</a>
		<a href="<?php echo G5_URL;?>./sub_05_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>PATS</a>
		<a href="<?php echo G5_URL;?>./sub_05_03.php" <?php if ($pcode == '03') { ?>class="tab_on"<?php }?>>Vr sim-core</a>
		<!-- <a href="<?php echo G5_URL;?>./sub_05_04.php" <?php if ($pcode == '04') { ?>class="tab_on"<?php }?>>Dronenavi</a> -->
		
	</div>
<div id="container">
	<div class="container_inner">

	<!-- <div class="sub_title">
		<p class="subject"><?=$board["bo_subject"] ?><?=$pagename;?></p>
		<p class="content"></p>
	</div> -->
	

	
	
	

