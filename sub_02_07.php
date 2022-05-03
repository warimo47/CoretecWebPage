<?
$gcode = "02";
$pcode = "07";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>
<p class="s_title">safeport</p>
<div class="bottom_border"><img src="/img/bottom_border.jpg"></div>
<div class="vision">
	<ul>
		<li><img src="/img/sub_02_07.jpg"  style="border:0px solid #eee;"></li>
	</ul>
</div>
<!--
<p class="s_title">Patrol Drone</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<div class="drone_bg">
	<p class="s_title_02"><img src="/sub/img/number_01.png" style="margin-right:30px;">목적</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;일상점검, 주기점검을 요하는 시설물 감시, 공사 진행상황 기록 등<br>
		•&nbsp;&nbsp;&nbsp;대상구조물 : 역사와 역사간 철로 감시, 고속도로 공구별 공정관리, 댐/대형교량 등
	</div>
	<p class="s_title_02"><img src="/sub/img/number_02.png" style="margin-right:10px;">구현</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;관리대상 SOC 구조물의 3D 공간정보 + 드론 + 콘트롤러 + PC기반 모니터링<br>
		•&nbsp;&nbsp;&nbsp;사용엔진 : Spatium<br>
		•&nbsp;&nbsp;&nbsp;OS : Android <br>
		•&nbsp;&nbsp;&nbsp;V-world와의 연계 (계획 중)<br>
		•&nbsp;&nbsp;&nbsp;드론, 카메라, 시설물의 위치와 각도를 공간에서 계산하여 AR 형태로 display<br>
		•&nbsp;&nbsp;&nbsp;자동항해 및 영상 기록
	</div>
	<p class="s_title_02"><img src="/sub/img/number_03.png" style="margin-right:10px;">BM</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;역사간 선로/사면 등 시설물 점검<br>
		•&nbsp;&nbsp;&nbsp;댐, 고속도로 등 유지관리
	</div>
</div>

<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>


<p class="s_title">CCP (CCTV Camera Positioning)</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<div class="cctv">
	<ul class="left">
		<li>
			<div class="li_01">
				스마트시티 전문업체의 기술력 + 코아텍 CCP 결합제품 공급
			</div> 
			<div class="li_02">
				바닥, 사람, 차량의 인식정도에 대한 구분 및 정량화한 결과의 시각적인 표현
			</div>
		</li>
		<li>
			<div class="li_01">
				아파트, 관공서, 건물 등의  주차장 안전상태 확인
			</div>
			<div class="li_02">
				카메라의 이동/회전에 따른 즉각적인 계산
			</div>
		</li>
		<li>
			<div class="li_01">
				도시 우범지역 설치로 치안 안전
			</div>
			<div class="li_02">
				칼라 및 음영으로 특정 point의 특정 상황에 대한 사람, 자동차 등 객체의 감시안전도 확인
			</div>
		</li>
		<li><div class="li_01">교통상황, 도주차량 등 교통안전</div></li>
	</ul>
</div>

<div class="3d_img">
	<img src="/sub/img/3d_img_04_1.jpg" style="margin-bottom:50px;">
	<img src="/sub/img/3d_img_04_2.jpg" style="margin-bottom:50px; margin-left:15px;">
</div>


<p class="d_title">공간, CCTV 카메라, 사람(또는 자동차)의 상관관계를 3차원 공간분석하여 카메라를 재배치(또는 설계)하는 컨설팅</p>
<div class="3d_img"><img src="/sub/img/3d_img_04_3.png" style="margin-bottom:30px;"></div>
<div class="d_text">
	<ul>
		<li>
			<p>평면상에서 카메라를 배치</p>
			사각지대 최소화가 어려움<br>
			수직각도에 대한 고려 없음
		</li>
		<li class="text_02">3차원 실내공간 및 카메라 정보 구축</li>
		<li class="text_03">공간분석을 통한 감시안전도 분석 및 재배치<br> (당사의 특허기술)</li>
	</ul>
	<div style="clear:both;"></div>
</div>


<div class="d_0102">
	<ul>
		<li>
			<p class="d_title">1. 실내공간정보 모델링 및 카메라, 객체 삽입</p>
			<div class="d_img"><img src="/sub/img/3d_img_04_4.jpg" style="margin-bottom:30px;"></div>
		</li>
		<li>
			<p class="d_title">2. 공간 감시안전도 분석</p>
			<div class="d_img"><img src="/sub/img/3d_img_04_5.jpg" style="margin-bottom:30px;"></div>
		</li>
	</ul>
	<div style="clear:both;"></div>
</div>

<div class="d_0102">
	<ul>
		<li>
			<p class="d_title">3. 경로 감시안전도 분석</p>
			<div class="d_img"><img src="/sub/img/3d_img_04_6.jpg" style="margin-bottom:30px;"></div>
		</li>
		<li>
			<p class="d_title">4. 포인트 분석</p>
			<div class="d_img"><img src="/sub/img/3d_img_04_7.jpg" style="margin-bottom:30px;"></div>
		</li>
	</ul>
	<div style="clear:both;"></div>
</div>



<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>

<p class="s_title">PIPEBOT</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>

<div class="s_text_02">
	PB20A series 는 2inch PipeRail을 기반으로합니다.<br>
	기본 PTZ HD Camera가 장착되어 있으며, 고객이 요구하는 소형 카메라로 변경 가능한 모델입니다.
</div>

<p class="s_title_02"><img src="/sub/img/number_01.png" style="margin-right:10px;">PB20A series</p>
<div class="3d_img"><img src="/sub/img/3d_img_01.jpg" style="margin-bottom:50px;"></div>

<p class="s_title_02"><img src="/sub/img/number_02.png" style="margin-right:10px;">3D / AR 기능 (전력구)</p>
<div class="3d_img"><img src="/sub/img/3d_img_02_01.png"></div>
<div style="margin:30px 0;">
<div class="3d_img"><img src="/sub/img/3d_img_02_02.png"></div>



<div style="clear:both;">
</div>-->
<?
include_once('./rr.php');
?>