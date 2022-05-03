<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

// if($filename=="sub_02_01.php") $pagename = "VR";
// if($filename=="sub_02_02.php") $pagename = "3D Monitor";
// if($filename=="sub_02_03.php") $pagename = "APP";
?>

<!-- <div id="subvisual">
	<div class="subvisual_inner"></div>
</div>

<div id="container">
	<div class="container_inner">

	<a href="<?php echo G5_URL;?>./sub_02_01.php">VR</a>
	<a href="<?php echo G5_URL;?>./sub_02_02.php">3D Monitor</a>
	<a href="<?php echo G5_URL;?>./sub_02_03.php">APP</a> -->



<div id="subvisual" style="background:url(./img/sv_01.jpg);">
	<div class="subvisual_inner"></div>

</div>
	<div class="sub_tab">
		<a href="<?php echo G5_URL;?>./sub_06_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>QMaker소개</a>
		<a href="<?php echo G5_URL;?>./sub_06_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>견적문의</a>
	
	</div>
<div id="container">
	<div class="container_inner">

	<!-- <div class="sub_title">
		<p class="subject"><?=$board["bo_subject"] ?><?=$pagename;?></p>
		<p class="content"></p>
	</div> -->

	

