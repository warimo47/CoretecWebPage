<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($pcode=="01") $pagename = "Smart-put";
?>

<div id="subvisual" style="background:url(./img/sv_02.jpg);">
	<div class="subvisual_inner">
	</div>
</div>
<div class="sub_tab">
	<a href="<?php echo G5_URL;?>./sub_05_01.php" <?php if ($pcode == '01') { ?>class="tab_on"<?php }?>>Smart-put</a>
</div>
