<?
include_once("./_common.php");
include_once(G5_PATH."/head_sub.php");

if($filename=="sub_01_01.php") $pagename = "인사말";
if($filename=="sub_01_02.php") $pagename = "연혁";
if($filename=="sub_04_01.php") $pagename = "오시는길";
if($bo_table=="01_01") $pagename = "회사소개";
?>

<div id="subvisual" style="background:url(./img/sv_04.jpg);">
	<div class="subvisual_inner"></div>
</div>

<div id="container">
	<div class="container_inner">

	<div class="sub_title">
		<p class="subject"><?=$board["bo_subject"] ?><?=$pagename;?></p>
		<p class="content"></p>
	</div>

