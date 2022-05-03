<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($pcode=="01") $pagename = "경영철학";
if($pcode=="02") $pagename = "회사소개";
if($pcode=="03") $pagename = "연혁";
if($pcode=="04") $pagename = "주요인력";
if($pcode=="05") $pagename = "지적재산권";
if($pcode=="06") $pagename = "사업포트폴리오";
if($pcode=="07") $pagename = "비젼";
?>

<div id="subvisual" style="background:url(./img/sv_01.jpg);">
	<div class="subvisual_inner">
	</div>
</div>
<div class="sub_tab">
	<a href="<?php echo G5_URL;?>./sub_01_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>경영철학</a>
	<a href="<?php echo G5_URL;?>./sub_01_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>회사소개</a>
	<a href="<?php echo G5_URL;?>./sub_01_03.php" <?php if ($pcode == '03') { ?>class="tab_on"<?php }?>>연혁</a>
	<a href="<?php echo G5_URL;?>./sub_01_04.php" <?php if ($pcode == '04') { ?>class="tab_on"<?php }?>>주요인력</a>
	<a href="<?php echo G5_URL;?>./sub_01_05.php" <?php if ($pcode == '05') { ?>class="tab_on"<?php }?>>지적재산권</a>
	<a href="<?php echo G5_URL;?>./sub_01_06.php" <?php if ($pcode == '06') { ?>class="tab_on"<?php }?>>사업포트폴리오</a>
	<a href="<?php echo G5_URL;?>./sub_01_07.php" <?php if ($pcode == '07') { ?>class="tab_on"<?php }?>>비젼</a>
</div>
