<?
$pcode = "index";
$newwin_site = "기본";
include_once("./_common.php");
include_once("./head.php");
include_once(G5_BBS_PATH.'/newwin.inc.php'); // 팝업레이어
?>
<style>
	.con_wrap{  }
	.main_con00{ width:100%; height:900px; background:url("./img/main_slide_img01.jpg"); text-align:center; font-size:45px; background-repeat:no-repeat; background-position:center; }
	.main_con00 p span{font-weight:500;}
	.main_con00 p{ font-weight:100; padding-top:440px; line-height:70px; color:rgba(225,225,225,0.8) }
	.main_con01{ width:100%; height:548px;background:url("./img/main_con01_gr.jpg" );background-repeat:no-repeat; background-position:center; }
	.main_con01_gr{ width:1200px; position:relative; left:50%; margin-left:-600px; top:121px;}
	.main_con01 div{ float:left; }
	.main_con01 div.main_con01_01{ width:315px; height:82px; font-size:24px; color:#46464e; text-align:right; position:relative; padding-right:25px; }
	.main_con01_qu01, .main_con01_qu02{ position:absolute; font-size:30px; }
	.main_con01_qu01{ top:-10px; left:0;  }
	.main_con01_qu02{ bottom:-35px; right:0; }
	.main_con01_02{ margin-left:38px; font-size:14px; color:#999999;  }

	.main_con02{ width:100%; height:489px;background:url("./img/main_con02_gr.jpg" );background-repeat:no-repeat; text-align:center; background-position:center;}
	.main_con02 p:first-child{ font-size:24px; padding:99px 0 25px; }
	.main_con02 p{ font-size:14px; color:#fff; }
	.main_icon_gr{ width:1200px; margin:0 auto; overflow:hidden; }
	.main_icon_gr li{ float:left; width:300px; margin-top:79px; position:relative; color:#fff; text-align:left; line-height:20px; }
	.main_icon_gr li span:first-child{ font-size:25px; }
	.main_icon_gr li span{ font-size:14px; }
	.main_icon_gr li span:last-child{ color:#bbbbbb; }
	.main_icon{ width:100px;height:100px; background:#fff; border-radius:50%; position:absolute; }
	.main_icon_01{ background:url("./img/main_icon01.png") }
	.main_icon_02{ background:url("./img/main_icon02.png") }
	.main_icon_03{ background:url("./img/main_icon03.png") }
	.main_icon_text{ margin-left:130px; }

	.main_con03{ width:100%; height:781px;background:url("./img/main_con03_gr.jpg" );background-repeat:no-repeat; background-position:center; text-align:left;}
	.main_con03_gr{ width:1200px; position:relative; left:50%; margin-left:-600px; }
	.main_con03_01{  }
	.main_con03_01 ul{ width:100%; height:157px; padding-top:99px; }
	.main_con03_01 ul li{ float:left; font-size:14px;}
	.main_con03_01 ul li:first-child{ font-size:24px; margin-right:55px;}
	.main_con03_02{  }
	.main_con03_02 ul{width:100%; height:526px;}
	.main_con03_02 ul li{width:360px; height:465px; background:#fff; float:left; margin-left:60px;}
	.main_con03_02 ul li:first-child{ margin-left:0; }
	.main_con03_02 ul li p{ padding:28px 35px; color:#000; }
	.main_con03_02 ul li p b{ font-size:20px; padding-bottom:25px; }

	.main_con04{ width:100%; height:586px; overflow:hidden; }
	.main_lo{ width:526px; height:421px; background:#000; background-color:rgba(0,0,0,0.8); z-index:11; padding:75px 0 98px 320px; color:#fff; font-weight:100; }
	.main_con04_tit{ font-size:24px; }
	.main_con04_tit01{ font-size:18px; font-weight:bold;}
	.main_lo ul{ width:429px; }
	.main_lo ul li{ padding:16px 0; border-bottom: 1px dotted #fff; }
	.main_lo hr{ width:35px; margin:31px 0; }
</style>
<?
// 관리자모드에서 배너관리에서 연동되어 출력
// show_banner("카테고리", "스킨명", "아이디명(한곳에 동일한 출력을 처리하기 위해)");
// show_banner("메인", "bxslider_index.php", "bxslider_index");
// show_banner('메인배너1', 'mainbanner.10.skin.php', 'mainbanner1');
// show_banner('메인배너2', 'mainbanner.10.skin.php', 'mainbanner2');
?>

<?php
/*
$list = new item_list();
$list->set_type(1);
$list->set_view('it_img', true);
$list->set_view('it_name', true);
$list->set_view('it_basic', true);
$list->set_view('it_cust_price', true);
$list->set_view('it_price', true);
echo $list->run();
*/
?>
<div class="left_menu">
	<ul>
		<li><a href="#sec1">intro</a></li>
		<li><a href="#sec2">about us</a></li>
		<li><a href="#sec3">product</a></li>
		<li><a href="#sec4">contact</a></li>
	</ul>
</div>
<div class="con_wrap">
	<div class="main_con00" id="sec1">
		<p>
			<span>디지털트윈 전문기업</span>
		</p>
	</div>
	<div class="main_con01" id="sec2">
		<div class="main_con01_gr">
			<div class="main_con01_01">
				<div class="main_con01_qu01">“</div>
				<div class="main_con01_qu02">”</div>
				고객님의 꿈을 함께 꾸는 기업<br>
				(주)코아텍 입니다.
			</div>
			<div class="main_con01_02">
				코아텍 홈페이지를 방문해 주신 고객분들께 감사드립니다.<br>
				저희는 한국철도기술연구원 신기술실용화센터에 입주해 있는 벤처기업으로서<br>
				한국철도기술연구원의 패밀리기업입니다.<br>
				<br>
				코아텍의 임직원들의 키워드는 "행복하고 편안한 공간을 위한 기술" 입니다.<br>
				이러한 기술을 만들기 위해, 디지털트윈 분야에서<br>
				소프트웨어 개발, 콘텐츠 제작, 서비스 제공을 하고 있습니다.<br>
				이 분야에서 저희가 개발한 기술들이 고객분들을 행복하게 하고, 편리하게 하고,<br>
				안전하게 하는 데 사용될 수 있기를 진심으로 희망합니다.<br>
				<br>
				이를 위해서 코아텍 부설연구소의 운영과 연구개발서비스업 수행으로 항상 새로운 기술을 개발하고,<br>
				수익성이 있으면서도 지속성이 있는 서비스 모델을 발굴하는데 힘쓰겠습니다.<br>
				<br>
				더불어 회사 구성원들의 성장과 발전에도 큰 가치를 부여하여,<br>
				모든 임직원들이 똘똘뭉쳐 발전해나가는 모습을 보여드릴 것을 약속드립니다.<br>
				감사합니다.<br>
				<br><br><br>
			</div>
		</div>
	</div>
	<div class="main_con02">
		<p>
			Infrastructure 디지털 트윈
		</p>
		<ul class="main_icon_gr">
			<li>
				<div class="main_icon main_icon_01"></div>
				<div class="main_icon_text">
					<span>시설물</span>&nbsp;<span></span><br><br>
					<span>
						GPR-core<br>
						스마트댐안전관리<br>
						AI풍수해관리<br>
						VR시설물<br>
						재해저감시설 모니터링<br>
						3D창고관리<br>
						safeport<br>
						통합감시<br>
						CCP
					</span>
				</div>
			</li>
			<li>
				<div class="main_icon main_icon_01"></div>
				<div class="main_icon_text">
					<span>프롭테크</span>&nbsp;<span></span><br><br>
					<span>
						VR-miniature<br>
						AR-miniature<br>
						빌프레(BuilPre)
					</span>
				</div>
			</li>
			<li>
				<div class="main_icon main_icon_01"></div>
				<div class="main_icon_text">
					<span>교통</span>&nbsp;<span></span><br><br>
					<span>
						실내측위<br>
						3D 지하철 - 서울<br>
						Impact Analysis<br>
						PATS<br>
						VR sim-core
					</span>
				</div>
			</li>
			<li>
				<div class="main_icon main_icon_01"></div>
				<div class="main_icon_text">
					<span>생활</span>&nbsp;<span></span><br><br>
					<span>
						smart-put
					</span>
				</div>
			</li>
		</ul>
	</div>
	<div class="main_con03" id="sec3">
		<div class="main_con03_gr">
			<div class="main_con03_01">
				<ul>
					<li>
						풍부한 노하우와 기술력으로 다양한 분야의<br>
						어떤 아이디어든 개발 가능합니다.
					</li>
				</ul>
			</div>
			<div class="main_con03_02">
				<ul>
					<li>
						<div style="width:100%; height:250px; background:url('./img/main_con02.jpg');"></div>
						<p>
							<b>방재.안전</b><br>
							드론, 공간분석, 지하시설물에 관한 특허를 기반으로 
							3D 감시시스템, VR 센서 시뮬레이션, 3D 창고원격관리 시스템, 
							GPR 분석 소프트웨어 등을 개발하고 있습니다. 
						</p>
					</li>
					<li>
						<div style="width:100%; height:250px; background:url('./img/main_con01.jpg');"></div>
						<p>
							<b>디지털 트윈</b><br>
							증강현실, 가상현실, 실내측위에 관한 특허를 기반으로
							도시교통분야, 설계분야, 활용분야에서 디지털트윈 기반의 콘텐츠, 
							소프트웨어, 시스템을 개발하고 있습니다.

						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main_con04" id="sec4">
		<div class="main_con04_sb" style="position: relative; left: 50%; margin-left: -960px;">
			<div class="main_lo" style="float: left;">
				<p class="main_con04_tit">
					CONTACT US
				</p>
				<hr color="#fff">
				<p class="main_con04_tit01">
					(주)코아텍 CORETEC Co.,Ltd. 
				</p>
				<ul>
					<li>
						<b>CEO</b>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;김성모
					</li>
					<li>
						<b>ADD</b>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;경기도 의왕시 오봉산단1로 12, 804호, 805호<br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(이동, 에이스하이테크비전21)
					</li>
					<li>
						<b>TEL</b>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;031-461-0111
					</li>
					<li>
						<b>FAX</b>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0303-0959-4211
					</li>
					<li>
						<b>E-MAIL</b>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kimmo@coretec.co.kr
					</li>
				</ul>
			</div>
			<!-- * 카카오맵 - 지도퍼가기 -->
			<!-- 1. 지도 노드 -->
			<div id="daumRoughmapContainer1649292318251" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 1074px;"></div>

			<!-- 2. 설치 스크립트 * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다. -->
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

			<!-- 3. 실행 스크립트 -->
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1649292318251",
					"key" : "29r2n",
					"mapWidth" : "",
					"mapHeight" : "604"
				}).render();
			</script>
		</div>
	</div>
</div>

<?
include_once("./tail.php");
?>