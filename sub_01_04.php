<?
$gcode = "01";
$pcode = "04";
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
		<li><img src="./img/sub_01_04.jpg"  style="border:0px solid #eee;"></li>
	</ul>
</div>



<?
include_once('./rr.php');
?>