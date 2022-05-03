<?
include_once(G5_PATH."/head.sub.php");
// include_once(G5_LIB_PATH."/latest.lib.php");
// include_once(G5_LIB_PATH."/outlogin.lib.php");
// include_once(G5_LIB_PATH."/poll.lib.php");
// include_once(G5_LIB_PATH."/visit.lib.php");
// include_once(G5_LIB_PATH."/connect.lib.php");
// include_once(G5_LIB_PATH."/popular.lib.php");
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
<script type="text/javascript">
	$(document).ready(function() {
		$(window).scroll();
		$("a.anchorLink").anchorAnimate()
	});



	$.fn.anchorAnimate = function(settings) {
		 settings = $.extend({
			speed : 500
		}, settings);    
		
		return this.each(function(){
			var caller = this
			$(caller).click(function (event) {    
				event.preventDefault()
				var locationHref = window.location.href
				var elementClick = $(caller).attr("href")
				
				var destination = $(elementClick).offset().top;
				console.log(destination);
				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
					window.location.hash = elementClick
				});
				  return false;
			})
		})
	}


	$(window).scroll(function () {
		var height = $(document).scrollTop();
		console.log(height);
		if ( height < 899 )
		{
			$(".anchorLink").removeClass("a_on");
			$(".a1").addClass("a_on");
		}
		else if ( height >= 900 && height < 1936)
		{
			$(".anchorLink").removeClass("a_on");
			$(".a2").addClass("a_on");
		}
		else if ( height >= 1937 && height < 2518 )
		{
			$(".anchorLink").removeClass("a_on");
			$(".a3").addClass("a_on");
		}else if ( height >= 2518  )
		{
			$(".anchorLink").removeClass("a_on");
			$(".a4").addClass("a_on");
		}else{
			$(".anchorLink").removeClass("a_on");
		}
	}); 

</script>
<style>

</style>
<div id="wrap">
<ul class="right_menu">
		<li class="right_close">
			<img src="../sub/img/btn_close.png" width="16px">
		</li>
		<li><a href="<?php echo G5_URL; ?>/sub/sub_01_01.php">Company Overview</a></li>
		<li><a href="<?php echo G5_URL; ?>/sub/sub_02_01.php">방재•안전</a></li>
		<li><a href="<?php echo G5_URL;?>/sub/sub_03_01.php">디지털트윈</a></li>
		<li><a href="<?php echo G5_URL;?>/sub/sub_06_01.php">QMaker</a></li>
		<li><a href="<?php echo G5_URL; ?>/sub/sub_04_01.php">오시는길</a></li>
	</ul>
<div id="header">
	<div class="header_inner">
		<div class="main_menu">
			<a href="<?php echo G5_URL; ?>/sub/sub_01_01.php">Company Overview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>/sub/sub_02_01.php">방재•안전</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>/sub/sub_03_01.php">디지털트윈</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>/sub/sub_06_01.php">QMaker</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>/sub/sub_04_01.php">오시는길</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
		<a href="../sub/index.php"><div class="ci"></div></a>
		<div class="main_m_icon"></div>
	</div>
</div>
