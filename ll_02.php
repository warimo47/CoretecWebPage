<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($pcode=="01") $pagename = "GPR-core";
if($pcode=="02") $pagename = "스마트댐안전관리";
if($pcode=="03") $pagename = "AI 풍수해 관리";
if($pcode=="04") $pagename = "VR 시설물";
if($pcode=="05") $pagename = "재해저감시설 모니터링";
if($pcode=="06") $pagename = "3D 창고관리";
if($pcode=="07") $pagename = "SafePort";
if($pcode=="08") $pagename = "통합감시";
if($pcode=="09") $pagename = "CCP";
?>

<div id="subvisual" style="background:url(./img/sv_02.jpg);">
	<div class="subvisual_inner">
	</div>
</div>
<div class="sub_tab">
	<a href="<?php echo G5_URL;?>./sub_02_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>GPR-core</a>
	<a href="<?php echo G5_URL;?>./sub_02_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>스마트댐안전관리</a>
	<a href="<?php echo G5_URL;?>./sub_02_03.php" <?php if ($pcode == '03') { ?>class="tab_on"<?php }?>>AI 풍수해 관리</a>
	<a href="<?php echo G5_URL;?>./sub_02_04.php" <?php if ($pcode == '04') { ?>class="tab_on"<?php }?>>VR시설물</a>
	<a href="<?php echo G5_URL;?>./sub_02_05.php" <?php if ($pcode == '05') { ?>class="tab_on"<?php }?>>재해저감시설 모니터링</a>
	<a href="<?php echo G5_URL;?>./sub_02_06.php" <?php if ($pcode == '06') { ?>class="tab_on"<?php }?>>3D 창고관리</a>
	<a href="<?php echo G5_URL;?>./sub_02_07.php" <?php if ($pcode == '07') { ?>class="tab_on"<?php }?>>SafePort</a>
	<a href="<?php echo G5_URL;?>./sub_02_08.php" <?php if ($pcode == '08') { ?>class="tab_on"<?php }?>>통합감시</a>
	<a href="<?php echo G5_URL;?>./sub_02_09.php" <?php if ($pcode == '09') { ?>class="tab_on"<?php }?>>CCP</a>
</div>
