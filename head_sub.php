<?
include_once(G5_PATH."/head.sub.php");
include_once(G5_LIB_PATH."/latest.lib.php");
include_once(G5_LIB_PATH."/outlogin.lib.php");
include_once(G5_LIB_PATH."/poll.lib.php");
include_once(G5_LIB_PATH."/visit.lib.php");
include_once(G5_LIB_PATH."/connect.lib.php");
include_once(G5_LIB_PATH."/popular.lib.php");
?>
<script>
	$( function() {
		//우측메뉴
		$(".main_m_icon").click(function(){
			$(".right_menu").animate({"right":"0px"} , 300)
			$(this).css("display","none")
		})
		$(".right_close").click(function(){
			$(".right_menu").animate({"right":"-500px"} , 300)
			$(".main_m_icon").css("display","block")
		})
	} );
</script>
<style>
.main_menu_sub a{ color:#000 !important; font-weight:400; }
</style>
<div id="wrap">
<ul class="right_menu">
		<li class="right_close">
			<img src="<?php echo G5_URL; ?>./img/btn_close.png" width="16px">
		</li>
		<li><a href="<?php echo G5_URL; ?>./sub_01_01.php">Company Overview</a></li>
		<li><a href="<?php echo G5_URL; ?>./sub_02_01.php">인프라</a></li>
		<!--<li><a href="<?php echo G5_URL;?>./sub_03_01.php">보안</a></li>-->
		<li><a href="<?php echo G5_URL; ?>./sub_04_01.php">프롭테크</a></li>
		<li><a href="<?php echo G5_URL;?>./sub_05_06.php">교통</a></li>
		<li><a href="<?php echo G5_URL;?>./sub_08_01.php">생활</a></li>
		<li><a href="<?php echo G5_URL; ?>./sub_07_01.php">오시는길</a></li>
	</ul>
<div id="header">
	<div class="header_inner_1">
		<!--<div>
			<?php if ($is_admin) {  ?>
			<a href="<?php echo G5_ADMIN_URL; ?>">관리자</a><span></span>
			<?php }  ?>
			<a href="<?php echo G5_URL; ?>/sub/index.php">홈으로</a><span></span>
			<?php if ($is_member) { ?>
			<a href="<?php echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정</a><span></span>
			<a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop">로그아웃</a><span></span>
			<?php } else { ?>
			<a href="<?php echo G5_BBS_URL; ?>/register.php">회원가입</a><span></span>
			<a href="<?php echo G5_BBS_URL; ?>/login.php?url=<? echo $urlencode; ?>">로그인</a><span></span>
			<?php } ?>
			<a href="<?php echo G5_URL; ?>/sub/sub_mypage.php">마이페이지</a><span></span>
			<a href="<?php echo G5_SHOP_URL; ?>/orderinquiry.php">주문조회</a><span></span>
			<a href="<?php echo G5_SHOP_URL; ?>/cart.php">장바구니</a>
		</div>-->
		<div class="main_menu_sub">
			<a href="<?php echo G5_URL; ?>./sub_01_01.php">Company Overview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_02_01.php">인프라</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!--<a href="<?php echo G5_URL; ?>./sub_03_01.php">보안</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
			<a href="<?php echo G5_URL; ?>./sub_04_01.php">프롭테크</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_05_06.php">교통</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_08_01.php">생활</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_07_01.php">오시는길</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		<a href="<?php echo G5_URL; ?>./index.php"><div class="ci_sub"></div></a>
		<div class="main_m_icon main_m_sub_icon"></div>
	</div>
</div>
