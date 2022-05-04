<?php
include_once(G5_PATH."/head.sub.php");
?>

<script>
	$(
		function()
		{
			// 우측 메뉴
			$(".main_m_icon").click(function()
			{
				$(".right_menu").animate({"right":"0px"} , 300);
				$(this).css("visibility","hidden");
			});
			
			$(".right_close").click(function()
			{
				$(".right_menu").animate({"right":"-500px"} , 300);
				$(".main_m_icon").css("visibility","initial");
			});
		}
	);
</script>

<script type="text/javascript">
	$(document).ready(function()
	{
		$(window).scroll();
		$("a.anchorLink").anchorAnimate();
	});
	
	$.fn.anchorAnimate = function(settings)
	{
		settings = $.extend({speed : 500}, settings);
		
		return this.each(function()
		{
			var caller = this;
			$(caller).click(function (event)
			{    
				event.preventDefault();
				var locationHref = window.location.href;
				var elementClick = $(caller).attr("href");
				
				var destination = $(elementClick).offset().top;
				console.log(destination);
				$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function()
				{
					window.location.hash = elementClick;
				});
				
				return false;
			});
		});
	};

	$(window).scroll(function ()
	{
		var height = $(document).scrollTop();
		// console.log(height);
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
		}
		else if ( height >= 2518  )
		{
			$(".anchorLink").removeClass("a_on");
			$(".a4").addClass("a_on");
		}
		else
		{
			$(".anchorLink").removeClass("a_on");
		}
	}); 
</script>

<div id="wrap">
	<ul class="right_menu">
		<li class="right_close">
			<img src="./img/btn_close.png" width="16px">
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
	<div class="header_inner">
		<div class="main_menu">
			<a href="./index.php"><img src="./img/ci.png" style="position: relative;left: -500px;"></a>
			<a href="<?php echo G5_URL; ?>./sub_01_01.php">Company Overview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_02_01.php">인프라</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_03_01.php">프롭테크</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_04_01.php">교통</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_05_01.php">생활</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo G5_URL; ?>./sub_06_01.php">오시는길</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img class="main_m_icon" src="./img/main_menu_btn.png">
		</div>
	</div>
</div>
