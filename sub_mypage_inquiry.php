<?php
include_once('./_common.php');
include_once(G5_PATH.'/sub/ll_mypage.php');

$bo_table = "ir_order"; //게시판테이블명
$page_rows = "15";
$list = array();

$sql_common = " from  g5_write_$bo_table where wr_is_comment = '0' and mb_id = '".escape_trim($member['mb_id'])."' ";
$sql_order = " order by wr_datetime desc ";

$sql = " select count(*) as cnt {$sql_common} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $page_rows;
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함
?>

<table class="boardlist">
<col width="200" />
<col width="" />
<col width="100" />
<tr>
	<th>등록</th>
	<th>제목</th>
	<th>진행</th>
</tr>
<?php
$sql = " select *
			{$sql_common}
			{$sql_order}
			limit {$from_record}, {$rows} ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++) {
?>
<tr>
	<td><?php echo $row['wr_datetime']; ?></td>
	<td style="text-align:left"><a href="<?=G5_URL?>/bbs/board.php?bo_table=<?=$bo_table?>&wr_id=<? echo $row['wr_id']?>"><?php echo $row['wr_subject']; ?></td>
	<td><?php echo $row['ca_name']; ?></td>
</tr>
<?php
}

if ($i == 0) echo '<tr><td colspan="5" class="empty_table">자료가 없습니다.</td></tr>';
?>
</table>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='); ?>

<?
include_once(G5_PATH.'/sub/rr.php');
?>