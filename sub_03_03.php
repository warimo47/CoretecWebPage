<?
$gcode = "03";
$pcode = "03";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>
<p class="s_title">통합감시</p>
<div class="bottom_border"><img src="./img/bottom_border.jpg"></div>
<div class="vision">
	<ul>
		<li><img src="./img/sub_02_04.jpg"  style="border:0px solid #eee;"></li>
	</ul>
</div>
<!--
<p class="s_title">블록체인이란?</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>

<div class="block">
	<ul>
		<li class="block_01" style="margin-left:0;">
			<p><span>1</span>&nbsp;&nbsp;제니시스 블록</p>
			&nbsp;&nbsp;&nbsp;&nbsp;최초의 블록.<br>
			&nbsp;&nbsp;&nbsp;&nbsp;이후의 생성된 모든 블록은<br>
			&nbsp;&nbsp;&nbsp;&nbsp;제니시스 블록에 연결되어 있음
		</li>
		<li class="block_02">
			<p><span>2</span>&nbsp;&nbsp;블록</p>
			&nbsp;&nbsp;&nbsp;&nbsp;새로운 블록을 생성하려면<br>
			&nbsp;&nbsp;&nbsp;&nbsp;이전 블록의 해시를 찾아서<br>
			&nbsp;&nbsp;&nbsp;&nbsp;그 값을 블록 내부에 기록해야함.
		</li>
		<li class="block_03">
			<p><span>3</span>&nbsp;&nbsp;블록</p>
			&nbsp;&nbsp;&nbsp;&nbsp;이러한 과정을 통해 블록들은<br>
			&nbsp;&nbsp;&nbsp;&nbsp;연결되고 데이터를 조작하려면<br>
			&nbsp;&nbsp;&nbsp;&nbsp;이전에 연결된 모든 블록들의<br>
			&nbsp;&nbsp;&nbsp;&nbsp;해시값을 조작해야함
		</li>
		<li class="block_04" style="margin-right:0;">
			<p><span>4</span>&nbsp;&nbsp;블록</p>
			&nbsp;&nbsp;&nbsp;&nbsp;연속적인 블록들이 때<br>
			&nbsp;&nbsp;&nbsp;&nbsp;연결되었을 이전 블록들의<br>
			&nbsp;&nbsp;&nbsp;&nbsp;해시값을 모두 조작하는 것이 불가능<br>
			&nbsp;&nbsp;&nbsp;&nbsp;이를 통해 안전성 확보.
		</li>
	</ul>
	<div style="clear:both;"></div>
</div>

<p class="ss_title">분산화 (Decentralized)</p>
<div class="dec">
	<p class="dec_p">분산된 노드들이 네트워크를 구성</p>
	중앙 집중적인 서버가 필요하지 않다.<br>
	각 노드들이 거래가 기록되는 유일한 곳이 블락체인.<br>
	새로운 거래가 생성될 떄마다 거래 기록이 모든 노드로 전파됨.<br>
	각 노드들은 작업 증명으로 거래의 유효성을 증명.
</div>

<p class="ss_title">공공 거래 장부 (Public Ledger)</p>
<div class="dec_left">
	<p class="dec_p">51%</p>
	<p class="dec_p_2">새로운 보안 패러다임</p>
	일부의 악의적인 해커들이 네트워크를 공격해도<br>
	전체 노드의 51% 이상이 동의하지 않으면<br>
	데이터를 조작할 수 없는 구조.
</div>

<p class="ss_title">블록체인 비즈니스 사례 : 문서 무결성 검증</p>
<img src="/sub/img/dec_03.png" style="margin-bottom:30px;">

<p class="ss_title">블록체인 문서 무결성 검증</p>
<img src="/sub/img/dec_04.png" style="margin-bottom:50px;">

<p class="s_title">블록체인의 미래</p>
<div class="bottom_border"><img src="/sub/img/bottom_border.jpg"></div>

<div class="chain">
	<ul>
		<li>
			<p><img src="/sub/img/number_01.png">&nbsp;스마트 금융 서비스</p>
			조건에 따라 지불이 이뤄지거나 자동으로 유보되는 스마트 거래 자식에게 유산을 물려줄 때, 나아가 스무살 이상이 돼야 자녀의 지갑에 돈이 들어가는 등의 공증/유언을 대체
		</li>
		<li>
			<p><img src="/sub/img/number_02.png">&nbsp;디지털 자산관리</p>
			Colored Coin과 유사하게 실물의 자산에 대한 소유권을 블록체인에 기록 특정 자동차의 소유권을 등록해놓고 차량을 대여할 때 소유권의 주소로 특정 금액을 송금하는 계약을 설정 가능
		</li>
		<li>
			<p><img src="/sub/img/number_03.png">&nbsp;P2P 온라인 커머스</p>
			상품에 대한 데이터베이스와 결제 등 모든 통제권을 온라인 커머스 소유회사가 갖는 방식이 아니라, 블록체인 같은 공공장부에 상품을 등록하고 이용자들이 자유롭게 상품을 찾고 선택하여 거래하고 결제
		</li>
		<li>
			<p><img src="/sub/img/number_04.png">&nbsp;분산 자율 조직</p>
			회사를 설립하고 정관을 만들고 주식을 발행하는 대신, 알고리즘을 만들고 코인을 발행하고 거기에 동참할 참여자를 모으고 네트워킹제
		</li>
	</ul>
	<ul style="margin:0;">
		<li>
			<p><img src="/sub/img/number_05.png">&nbsp;전자 투표</p>
			여러 현금 소유자들을 연계시키는 블록체인의 솔루션을 이용해 사람들이 다른 것에 동의했는지 여부를 추적 가능. 블록체인은 표를 추적하고 믿을 수 있는 결과를 제공.
		</li>
		<li>
			<p><img src="/sub/img/number_06.png">&nbsp;소액 결제</p>
			온라인 소액결제 수수료를 5% 수준에서 0.1% 이내로 줄일 수 있음. <br>모든 것을 추적하여 더욱 복잡한 거래를 가능하게 할 수 있음.<br><br>
		</li>
		<li>
			<p><img src="/sub/img/number_07.png">&nbsp;사물 인터넷</p>
			사람과 조직 뿐만 아니라 기계, 사물들까지 연결시켜 중단없는 네트워크상의 워크플로우 디바이스간 소통 뿐만 아니라 디바이스 간 금융거래에 사용되는 수단
		</li>
	</ul>
	<div style="clear:both;"></div>
</div>
-->

<?
include_once('./rr.php');
?>