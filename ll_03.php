<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($pcode=="01") $pagename = "VR-miniature";
if($pcode=="02") $pagename = "AR-miniature";
if($pcode=="03") $pagename = "빌프레(BuilPre)";
?>

<div id="subvisual" style="background:url(./img/sv_02.jpg);">
	<div class="subvisual_inner">
	</div>
</div>
<div class="sub_tab">
	<a href="<?php echo G5_URL;?>./sub_03_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>VR-miniature</a>
	<a href="<?php echo G5_URL;?>./sub_03_02.php" <?php if ($pcode == '02') { ?>class="tab_on"<?php }?>>AR-miniature</a>
	<a href="<?php echo G5_URL;?>./sub_03_03.php" <?php if ($pcode == '03') { ?>class="tab_on"<?php }?>>빌프레(BuilPre)</a>
</div>
