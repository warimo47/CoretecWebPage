<?php
include_once(G5_PATH."/head.sub.php");
?>
<script>
	$(
		function()
		{
			// 우측메뉴
			$(".business_right_menu").click(function()
			{
				$(".right_menu").animate({"right":"0px"} , 300);
				$(this).css("visibility","hidden");
			});
			
			$(".right_close").click(function()
			{
				$(".right_menu").animate({"right":"-500px"} , 300);
				$(".business_right_menu").css("visibility","initial");
			});
		}
	);
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
		<li><a href="<?php echo G5_URL; ?>./sub_03_01.php">프롭테크</a></li>
		<li><a href="<?php echo G5_URL; ?>./sub_04_01.php">교통</a></li>
		<li><a href="<?php echo G5_URL; ?>./sub_05_01.php">생활</a></li>
		<li><a href="<?php echo G5_URL; ?>./sub_06_01.php">오시는길</a></li>
	</ul>
</div>
<div id="header">
	<div class="header_inner_1">
		<div class="main_menu_sub">
			<a href="<?php echo G5_URL; ?>./sub_01_01.php">Company Overview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_02_01.php">인프라</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_03_01.php">프롭테크</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_04_01.php">교통</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_05_01.php">생활</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_06_01.php">오시는길</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="business_right_menu" src="./img/main_menu_sub_btn.png">
		</div>
		<a href="<?php echo G5_URL; ?>./index.php"><div class="ci_sub"></div></a>
	</div>
</div>
