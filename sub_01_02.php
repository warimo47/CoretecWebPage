<?
$gcode = "01";
$pcode = "02";
include_once('./_common.php');
include_once('./ll_'.$gcode.'.php');
?>

<script>
	function doImgPop(img){ 
	 img1= new Image(); 
	 img1.src=(img); 
	 imgControll(img); 
	} 
	  
	function imgControll(img){ 
	 if((img1.width!=0)&&(img1.height!=0)){ 
		viewImage(img); 
	  } 
	  else{ 
		 controller="imgControll('"+img+"')"; 
		 intervalID=setTimeout(controller,20); 
	  } 
	}
	function viewImage(img){ 
	 W=img1.width; 
	 H=img1.height; 
	 O="width="+W+",height="+H+",scrollbars=yes"; 
	 imgWin=window.open("","",O); 
	 imgWin.document.write("<html><head><title>:*:*:*: 이미지상세보기 :*:*:*:*:*:*:</title></head>");
	 imgWin.document.write("<body topmargin=0 leftmargin=0>");
	 imgWin.document.write("<img src="+img+" onclick='self.close()' style='cursor:pointer;' title ='클릭하시면 창이 닫힙니다.'>");
	 imgWin.document.close();
	}
 </script>


<div class="vision">
	<ul>
		<li><img src="./img/sub_01_02.jpg"  style="border:0px solid #eee;"></li>
	</ul>
</div>
<!--<table border="10" class="confirm" width="1000">
	<tr >
		<td bgcolor="red" cellpadding="10" rowspan="3" width="550">
			<ul>
				<li><img src="./img/com_info.jpg" title="클릭하시면 원본크기로 보실 수 있습니다." onclick="doImgPop('./img/com_info.jpg')" style="border:1px solid #eee; width:100%;"></li>
			</ul>
			
		</td>
		<td bgcolor="orange">
		<ul>
				<li><img src="./img/confirm_03.jpg" title="클릭하시면 원본크기로 보실 수 있습니다." onclick="doImgPop('./img/confirm_03.jpg')" style="border:1px solid #eee;"></li>
		</ul>
		</td>
		<td>
		<ul>
				<li><img src="./img/confirm_02.jpg" title="클릭하시면 원본크기로 보실 수 있습니다." onclick="doImgPop('./img/confirm_02.jpg')" style="border:1px solid #eee;"></li>
		</ul>
		</td>
	</tr>
	<tr>
	<td>
		<ul>
			<li><img src="./img/confirm_07.jpg" title="클릭하시면 원본크기로 보실 수 있습니다." onclick="doImgPop('./img/confirm_07.jpg')" style="border:1px solid #eee;"></li>
		</ul>
	</td>
	<td>
		<ul>
			<li><img src="./img/confirm_08.jpg" title="클릭하시면 원본크기로 보실 수 있습니다." onclick="doImgPop('./img/confirm_08.jpg')" style="border:1px solid #eee;"></li>
		</ul>
	</td>
	</tr>
	<tr>
	<td>
		<ul>
			<li><img src="./img/confirm_07.jpg" title="클릭하시면 원본크기로 보실 수 있습니다." onclick="doImgPop('./img/confirm_07.jpg')" style="border:1px solid #eee;"></li>
		</ul>
	</td>
	<td>
		<ul>
			<li><img src="./img/confirm_08.jpg" title="클릭하시면 원본크기로 보실 수 있습니다." onclick="doImgPop('./img/confirm_08.jpg')" style="border:1px solid #eee;"></li>
		</ul>
	</td>
	</tr>
</table>-->



<?
include_once('./rr.php');
?>