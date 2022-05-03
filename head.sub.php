<!doctype html>
<html lang="ko">
<head>
	<link rel="icon"href="<?=G5_URL?>/favicon.png" type="image/png" >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=0.1,maximum-scale=1">
	<!--메타태그넣는곳-->
	<meta name="naver-site-verification" content="de8c73a812dfa09027273a4a2cc85b2a745e98f7"/>
	<!--키워드/사이트설명-->
	<meta name="description" content="인프라시설 디지털트윈 및 프롭테크">
	<!--소셜등에노출-->
	<meta property="og:type" content="website">
	<meta property="og:title" content="코아텍-인프라시설 디지털트윈 및 프롭테크">
	<meta property="og:description" content="인프라시설 디지털트윈 및 프롭테크">
	<meta property="og:url" content="http://coretec.co.kr/">
	<link rel="canonical" href="http://coretec.co.kr/">
	<meta property="al:web:url" content="http://coretec.co.kr/">
	<?php
		echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">'.PHP_EOL;
		echo '<meta name="viewport" content="width=device-width, initial-scale=0.25, minimum-scale=0.25, maximum-scale=1">'.PHP_EOL;
	?>
	<title>코아텍-인프라시설 디지털트윈 및 프롭테크</title>
	<?php
		if (defined('G5_IS_ADMIN'))
		{
			echo "<link rel='stylesheet' href='".G5_URL."/css/reset.css'>".PHP_EOL;
			echo "<link rel='stylesheet' href='".G5_ADMIN_URL."/admin.css'>".PHP_EOL;
		}
		else
		{
			echo "<link rel='stylesheet' href='".G5_URL."/css/reset.css'>".PHP_EOL;
			echo "<link rel='stylesheet' href='".G5_URL."/css/common.css'>".PHP_EOL;
			echo "<link rel='stylesheet' href='".G5_URL."/css/main.css'>".PHP_EOL;
			echo "<link rel='stylesheet' href='".G5_URL."/css/sub.css'>".PHP_EOL;
			echo "<link rel='stylesheet' href='".G5_URL."/css/shop.css'>".PHP_EOL;
			echo "<link rel='stylesheet' href='".G5_URL."/css/fonts.css'>".PHP_EOL;
		}
	?>
	<!--[if lte IE 8]>
	<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
	<![endif]-->

	<script>
	var g5_url       = "<?php echo G5_URL ?>";
	var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
	var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
	var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
	var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
	var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
	var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
	var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
	<?php if(defined('G5_IS_ADMIN')) { ?>
	var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
	<?php } ?>
	</script>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.2/jquery.min.js">
	</script>
</head>
<body<?php echo isset($g5['body_script']) ? $g5['body_script'] : ''; ?>>