<?
include_once("./_common.php");
include_once(G5_PATH."/sub/head.php");

if($filename=="register.php") $pagename = "약관동의";
if($filename=="register_form.php") $pagename = "회원정보입력";
if($filename=="register_result.php") $pagename = "가입완료";
if($filename=="member_confirm.php") $pagename = "회원확인";
if($filename=="login.php") $pagename = "로그인";
if($filename=="privacy1.php") $pagename = "이용약관";
if($filename=="privacy2.php") $pagename = "개인정보취급방침";
if($filename=="privacy3.php") $pagename = "이메일무단수집거부";
?>

<div id="subvisual">
	<div class="subvisual_inner"></div>
</div>

<div id="container">
	<div class="container_inner">

	<div class="sub_title">
		<p class="subject"><?=$board["bo_subject"] ?><?=$pagename;?></p>
		<p class="content"></p>
	</div>