<?
include_once("./_common.php");
include_once(G5_PATH."/sub/head.php");

if($filename=="sub_mypage.php") $pagename = "나의정보";
if($filename=="sub_mypage_inquiry.php") $pagename = "나의문의";
if($filename=="sub_mypage_point.php") $pagename = "나의포인트내역";
if($filename=="orderinquiry.php") $pagename = "주문조회";
if($filename=="orderinquiryview.php") $pagename = "주문/배송조회";
if($filename=="wishlist.php") $pagename = "위시리스트";?>

<div id="subvisual">
	<div class="subvisual_inner"></div>
</div>

<div id="container">
	<div class="container_inner">

	<div class="sub_title">
		<p class="subject"><?=$board["bo_subject"] ?><?=$pagename;?></p>
		<p class="content"></p>
	</div>
	
	<div class="cb"></div>

	<table width="100%" class="sub_tabmenu">
	<tr>
		<td width="20%" class="<? if($filename=="sub_mypage.php") echo "on"; ?>"><a href="<?=G5_URL?>/sub/sub_mypage.php">마이페이지</a></td>
		<td width="20%" class="<? if($filename=="sub_mypage_inquiry.php"); ?>"><a href="<?=G5_URL?>/sub/sub_mypage_inquiry.php">나의문의</a></td>
		<td width="20%" class="<? if($filename=="sub_mypage_point.php"); ?>"><a href="<?=G5_URL?>/sub/sub_mypage_point.php">나의포인트</a></td>
		<td width="20%" class="<? if($filename=="orderinquiry.php"||$filename=="orderinquiryview.php") echo "on"; ?>"><a href="<?=G5_SHOP_URL?>/orderinquiry.php">주문내역</a></td>
		<td width="20%" class="<? if($filename=="wishlist.php") echo "on"; ?>"><a href="<?=G5_SHOP_URL?>/wishlist.php">위시리스트</a></td>
	</tr>
	</table>