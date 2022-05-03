<?
include_once("./_common.php");
include_once(G5_PATH."/sub/head.php");

if($filename=="cart.php") 
	$pagename = "장바구니";
	$pagenameeng = "Shopping Cart";
if($filename=="orderform.php") 
	$pagename = "주문서작성";
	$pagenameeng = "Orderform to write";
if($filename=="search.php") 
	$pagename = "상품검색";
	$pagenameeng = "Shoppingmall Item Search";
if($filename=="itemqalist.php") 
	$pagename = "상품문의";
	$pagenameeng = "Item Q&A List";
if($filename=="itemuselist.php") 
	$pagename = "사용후기";
	$pagenameeng = "Item Review List";
?>

<div id="subvisual">
	<div class="subvisual_inner"></div>
</div>

<div id="container">
	<div class="container_inner">

	<? if($pagename) { ?>
	<div class="shop_title">
		<div class="box">
			<div class="subject"><?=$pagename?><br /><span><?=$pagenameeng?></span></div>
			<div style="text-align:right"><img src="../shop/img/shop_title_<?=substr($filename, 0,-4);?>.gif"></div>
		</div>
		<div class="content">
		장바구니 보관기관은 <?php echo $default['de_cart_keep_term']; ?>일 입니다. 기간이 지난 뒤 삭제되니 이점  유의 부탁드립니다.<br />
		구매를 통해 적립되는 포인트는 배송완료 이후 적립되며 취소/반품 시 사용한 적립금은 반환됩니다.
		</div>
	</div>
	<? } ?>