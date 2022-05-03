<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($pcode=="01") $pagename = "실내측위";
if($pcode=="02") $pagename = "3D 지하철 - 서울";
if($pcode=="03") $pagename = "Impact Anlysis";
if($pcode=="04") $pagename = "PATS";
if($pcode=="05") $pagename = "VR Sim-core";
?>

<div id="subvisual" style="background:url(./img/sv_02.jpg);">
	<div class="subvisual_inner">
	</div>
</div>
<div class="sub_tab">
	<a href="<?php echo G5_URL;?>./sub_04_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>실내측위</a>
	<a href="<?php echo G5_URL;?>./sub_04_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>3D 지하철 - 서울</a>
	<a href="<?php echo G5_URL;?>./sub_04_03.php" <?php if ($pcode == '03') { ?>class="tab_on"<?php }?>>Impact Analysis</a>
	<a href="<?php echo G5_URL;?>./sub_04_04.php" <?php if ($pcode == '04') { ?>class="tab_on"<?php }?>>PATS</a>
	<a href="<?php echo G5_URL;?>./sub_04_05.php" <?php if ($pcode == '05') { ?>class="tab_on"<?php }?>>VR Sim-core</a>
</div>
