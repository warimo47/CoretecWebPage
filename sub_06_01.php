<?
$gcode = "06";
$pcode = "01";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>

<div id="container">
	<div class="container_inner">
		<div style="margin:15px 0;">
			<!-- * 카카오맵 - 지도퍼가기 -->
			<!-- 1. 지도 노드 -->
			<div id="daumRoughmapContainer1649292318251" class="root_daum_roughmap root_daum_roughmap_landing"  style="width:100%"></div>

			<!-- 2. 설치 스크립트 * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다. -->
			<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

			<!-- 3. 실행 스크립트 -->
			<script charset="UTF-8">
				new daum.roughmap.Lander({
					"timestamp" : "1649292318251",
					"key" : "29r2n",
					"mapWidth" : "",
					"mapHeight" : "400"
				}).render();
			</script>

			<p class="map_text"><img src="./img/img_001.png"><span>기업명</span>  (주)코아텍</p>
			<p class="map_text"><img src="./img/img_001.png"><span>소재지</span>  경기도 의왕시 오봉산단1로 12, 804,805호 (이동, 에이스하이테크비전21)</p>
			<p class="map_text"><img src="./img/img_001.png"><span>연락처</span>  031-461-0111</p>
		</div>
	</div>
</div>

<?
include_once('./tail.php');
?>