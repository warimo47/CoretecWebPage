<?
$gcode = "03";
$pcode = "01";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>
<p class="s_title">safeport</p>
<div class="bottom_border"><img src="./img/bottom_border.jpg"></div>
<div class="vision">
	<ul>
		<li><img src="./img/sub_02_01.jpg"  style="border:0px solid #eee;"></li>
	</ul>
</div>
<!--
<p class="s_title">VE (Virtual English)</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>

<div class="s_text_02">
	영어회화 학습용 VR 콘텐츠 제공 서비스
</div>

<div class="vr">
	<ul class="left">
		<li>
			<div class="li_01_title">영어회화 학습용<br> VR 솔루션</div> 
			<div class="li_02_title">영어회화 학습용<br> 밴드형 VR 인터페이스</div>
		</li>
		<li>
			<div class="li_01">콘텐츠 제공을 위한 통합 어플리케이션</div>
			<div class="li_02">밴드형 VR 콘트롤러</div>
		</li>
		<li>
			<div class="li_01">영어회화 학습용 VR 휴먼 인터페이스 기술 </div>
			<div class="li_02">모션센서 기술</div>
		</li>
		<li>
			<div class="li_01">영상-스크립트 매칭 기술</div>
			<div class="li_02">밴드형 VR 인터페이스 </div>
		</li>
		<li>
			<div class="li_01" style="margin-bottom:16px;"><img src="/sub/img/v_img_01.jpg"></div>
			<div class="li_02" style="margin-bottom:16px;"><img src="/sub/img/v_img_02.jpg"> </div>
		</li>
	</ul>
</div>

<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>

<p class="s_title">VR - 운전면허</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<div class="s_text_02">
	VR을 통해 1인칭 및 3인칭으로 운전면허 기능시험관련, 주행경로 숙지 및 각 평가항목에 맞는 기능 조작법 숙지
</div>
<img src="/sub/img/v_img_03.jpg">


<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>


<p class="s_title">VR - Fire drill (화재 대피 시뮬레이션)</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>

<div class="fire">
	<p class="s_title_02"><img src="/sub/img/number_01.png" style="margin-right:10px;">목적</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;초중등학생을 대상 화재 대피 시뮬레이션 교육 콘텐츠<br>
		•&nbsp;&nbsp;&nbsp;종합쇼핑몰, 극장, 공공기관 등 대중장소 활용<br>
		•&nbsp;&nbsp;&nbsp;실내정보에 대해 익숙해지면 유사시 대피 가능성이 높아짐<br>
		•&nbsp;&nbsp;&nbsp;안전교육 의무화 → 안전교육 콘텐츠로 활용<br>
	</div>
	<p class="s_title_02"><img src="/sub/img/number_02.png" style="margin-right:10px;">구현</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;3D 실내 공간정보 + HMD + 보행모사장치<br>
		•&nbsp;&nbsp;&nbsp;사용엔진 : 언리얼 4<br>
		•&nbsp;&nbsp;&nbsp;HMD : Oculus Rift DK2<br>
		•&nbsp;&nbsp;&nbsp;motion 센서 적용<br>
	</div>
	<p class="s_title_02"><img src="/sub/img/number_03.png" style="margin-right:10px;">BM</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;업체별 100여 개의 지점<br>
		•&nbsp;&nbsp;&nbsp;고객센터<br>
		•&nbsp;&nbsp;&nbsp;인근 초교, 중학교에 무상공급<br>
		•&nbsp;&nbsp;&nbsp;콘텐츠 내 광고 모델<br>
	</div>
</div>


<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>


<p class="s_title">VR - 어항</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<img src="/sub/img/v_img_10.png">

<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>


<p class="s_title">VR - miniature</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<img src="/sub/img/v_sf.jpg" style="margin-bottom:30px;">

<p class="s_title_02"><img src="/sub/img/number_01.png" style="margin-right:10px;">아파트</p>
<span style="font-size:18px; color:#000; margin-left:90px;">1) 모델하우스</span> <span style="font-size:18px; color:#000; margin-left:330px;">2) VR 전시상담사 상담</span><br>
<div class="v_img_05_06">
	<img src="/sub/img/v_img_05_01.jpg">
	<img src="/sub/img/v_img_05_02.jpg" style="margin-left:50px;">
</div>

<p class="s_title_02"><img src="/sub/img/number_02.png" style="margin-right:10px;">건축물</p>
<div class="v_img_05_06">
	<img src="/sub/img/v_img_05_03.jpg">
	<img src="/sub/img/v_img_05_04.jpg" style="margin-left:50px;">
</div>

<p class="s_title_02"><img src="/sub/img/number_03.png" style="margin-right:10px;">단지</p>
<div class="v_img_05_06">
	<img src="/sub/img/v_img_05_05.jpg">
	<img src="/sub/img/v_img_05_06.jpg" style="margin-left:50px;">
</div>

<p class="s_title_02"><img src="/sub/img/number_04.png" style="margin-right:10px;">도시</p>
<span style="font-size:18px; color:#000; margin-left:90px;">1) 도시개발사업 홍보</span> <span style="font-size:18px; color:#000; margin-left:275px;">2) 신도시 홍보용 VR-kiosk</span><br>
<div class="v_img_05_06">
	<img src="/sub/img/v_img_05_07.jpg">
	<img src="/sub/img/v_img_05_08.jpg" style="margin-left:50px;">
</div>


<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>


<p class="s_title">VR - 알콜중독치료</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<div class="s_text_04">
	1) 가상현실(VR HMD)기반의 알코올 중독 사범에 대한 콘텐츠로  기존의 주입식 치료 프로그램을 극복한 피치료자 중심의 체험형 교육<br>
	2) 알코올 범죄자의 금주, 단주, 절주를 통한 재범예방 및 감소로 사회적 비용절감 및 사회 보호<br>
	3) 국민의 편의 제공
</div>
<p class="s_title_04">실증적 콘텐츠 제작 예시</p>
<img src="/sub/img/v_img_06.jpg">


<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>-->


<!-- <p class="s_title">VR - 치매진단</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<div class="s_text_02">
	눈 앞의 가상공간을 돌아다니며 체험 후 장소나 위치를 기억하여 대응하는 정도를 체크
</div>
<div class="vr_01">
	<ul>
		<li class="vr_li_01">
			<p>< 상자 속 물건 맞추기></p>
			<img src="/sub/img/v_img_07.jpg"><br>
			<span>ex) 상자에서 나온 물체를 보기에서 선택하세요!<br>(컨트롤러를 이용하여 선택 후 아래 버튼을 당기세요)</span>
		</li>
		<li class="vr_li_02">
			<p>< 숨긴 장소 찾기></p>
			<img src="/sub/img/v_img_08.jpg"><br>
			<span>ex) 물건이 숨겨진 장소에<br>  스티커를 붙이고 출발선으로 돌아오세요!</span>
		</li>
	</ul>
</div>


<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div> -->

<!--
<p class="s_title">VR - Hitball (야구 배팅 게임)</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<div class="hitball">
<p class="s_title_02"><img src="/sub/img/number_01.png" style="margin-right:10px;">목적</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;체험형 야구 배팅 게임<br>
		•&nbsp;&nbsp;&nbsp;가상현실의 체험적인 성격 극대화<br>
		•&nbsp;&nbsp;&nbsp;130~150 km/h의 공의 속도와 구종을 체험<br>
	</div>

<p class="s_title_02"><img src="/sub/img/number_02.png" style="margin-right:10px;">스펙</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;3D 야구장 공간정보 + HMD + x-box controller<br>
		•&nbsp;&nbsp;&nbsp;사용엔진 : 언리얼4<br>
		•&nbsp;&nbsp;&nbsp;HMD : Oculus Rift DK2<br>
	</div>

<p class="s_title_02"><img src="/sub/img/number_03.png" style="margin-right:10px;">기능</p>
	<div class="s_text_03">
		•&nbsp;&nbsp;&nbsp;야구장 홍보 부스 (해당 야구장의 3D 모델, 좌석 찾기, 팀 캐릭터 구현)<br>
		•&nbsp;&nbsp;&nbsp;가상현실 체험방<br>
	</div>
</div>


<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>


<p class="s_title">VR - 과학실험</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>
<div class="s_text_02">
	가상의 실험실 안에서 불꽃반응, 대류 현상, 현미경 관찰 등의 과학실험을 체험
</div>

<img src="/sub/img/v_img_09_01.jpg" style="margin-right:45px;">
<img src="/sub/img/v_img_09_02.jpg" style="margin-right:45px;">
<img src="/sub/img/v_img_09_03.jpg">


<div style="clear:both;">
-->

<?
include_once('./rr.php');
?>