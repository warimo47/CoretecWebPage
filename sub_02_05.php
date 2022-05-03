<?
$gcode = "02";
$pcode = "05";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>
<p class="s_title">재해저감시설 모니터링</p>
<div class="bottom_border"><img src="./img/bottom_border.jpg"></div>
<div class="vision">
	<ul>
		<li><img src="./img/sub_02_05.jpg"  style="border:0px solid #eee;"></li>
	</ul>
</div>
<!--
<p class="s_title">딥러닝이란?</p>
<div class="bottom_border"><img src="./img/bottom_border.jpg"></div>
<div class="ss_text_c">
	딥러닝(Deep Learning)이란 머신러닝(Machine Learning)의 한 부분으로<br>
	'신경계 기본 단위인 뉴런과 모양이흡사한 선형 모델인 퍼셉트론의 조합 및 확장의 결과' 라고 일컬어집니다.<br><br>
	<img src="./img/deep_01.png"><br><br>
	은닉층의 개수가 많아질수록 인공신경망이 깊어졌다(Deep)고 표현.<br>
	충분히 깊어진 인공신경망을 러닝 모델로 하는 머신 러닝 패러다임을 딥러닝(Deep Learning)이라고 부릅니다.<br><br>
	<img src="./img/deep_02.png">
</div>
<div style="border-bottom:1px dashed #ccc; margin:50px 0;"></div>


<p class="s_title">딥러닝의 종류</p>
<div class="bottom_border"><img src="./img/bottom_border.jpg"></div>

<p class="ss_title">1) 완전 연결 신경망 (Fully-Connected Neural Network)</p>
<div class="ss_text">
	다층 연결 신경망 (Multi Layer Perceptron)을 지칭하는 또 다른 용어로 서로 다른 층의<br>
	노드 간 연결은 존재하지 않고, 인접한 층에 위치한 노드들 간의 연결만 존재합니다.
</div>

<p class="ss_title">2) CNN (Convolutional Neural Network)</p>
<div class="ss_text">
	2차원 형태의 연결망을 필터링을 거쳐 필터가 겹치는 부분에 한해서만
	가중합 및 활성함수 연산을 하도록 한 형태입니다.<br><br>
	이미지 인식분야에서 가장 활발하게 사용됩니다.<br>
	<img src="./img/deep_03.png"><br><br>
	Ex) 소리를 이미지로 전환 후 비명 인식<br>
	<img src="./img/deep_04.png">
</div>

<p class="ss_title">3) RNN (Recurrent Neural Network)</p>
<div class="ss_text">
	순환 신경망이라 부르며 입력 순서가 중요한 데이터인 시퀀소(Sequence)를 이용한 딥러닝입니다.<br><br>
	자연어 처리(natural language processing) 분야에서 많이 사용되는데 언어를 텍스트 시퀀스 형태의<br>
	데이터로 변환했을 때, 길이 가변성과 선후 관계의 특징을 갖기 때문입니다.
</div>
-->

<?
include_once('./rr.php');
?>