<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($filename=="sub_02_01.php") $pagename = "VR";
if($filename=="sub_02_02.php") $pagename = "3D Monitor";
if($filename=="sub_02_03.php") $pagename = "APP";
?>

<!-- <div id="subvisual">
	<div class="subvisual_inner"></div>
</div>

<div id="container">
	<div class="container_inner">

	<a href="<?php echo G5_URL;?>/sub/sub_02_01.php">VR</a>
	<a href="<?php echo G5_URL;?>/sub/sub_02_02.php">3D Monitor</a>
	<a href="<?php echo G5_URL;?>/sub/sub_02_03.php">APP</a> -->



<div id="subvisual" style="background:url(./img/sv_02.jpg);">
	<div class="subvisual_inner"></div>

</div>
	<div class="sub_tab">
		<a href="<?php echo G5_URL;?>./sub_03_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>safeport</a>
		<a href="<?php echo G5_URL;?>./sub_03_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>CCP</a>
		<a href="<?php echo G5_URL;?>./sub_03_03.php" <?php if ($pcode == '03') { ?>class="tab_on"<?php }?>>통합감시</a>
		<!--<a href="<?php echo G5_URL;?>/sub/sub_03_04.php" <?php if ($pcode == '04') { ?>class="tab_on"<?php }?>>Vr-miniature/smart-city</a>
		
		<a href="<?php echo G5_URL;?>/sub/sub_03_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>Impact Analysis</a>
		<a href="<?php echo G5_URL;?>/sub/sub_03_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>PATS</a>
		
		<a href="<?php echo G5_URL;?>/sub/sub_03_04.php" <?php if ($pcode == '04') { ?>class="tab_on"<?php }?>>Dronenavi</a>
		<a href="<?php echo G5_URL;?>/sub/sub_03_05.php" <?php if ($pcode == '05') { ?>class="tab_on"<?php }?>>3D 지하철 – 서울</a>-->
	</div>
<div id="container">
	<div class="container_inner">

	<!-- <div class="sub_title">
		<p class="subject"><?=$board["bo_subject"] ?><?=$pagename;?></p>
		<p class="content"></p>
	</div> -->

	

