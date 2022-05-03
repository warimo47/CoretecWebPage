<?php
include_once('./_common.php');

if ($is_guest)
    alert_close('회원만 조회하실 수 있습니다.');

$g5['title'] = get_text($member['mb_nick']).' 님의 포인트 내역';
include_once(G5_PATH.'/sub/ll_mypage.php');

$list = array();

$sql_common = " from {$g5['point_table']} where mb_id = '".escape_trim($member['mb_id'])."' ";
$sql_order = " order by po_id desc ";

$sql = " select count(*) as cnt {$sql_common} ";
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함
?>

<table class="boardlist">
<tr>
	<th>일시</th>
	<th>내용</th>
	<th>만료일</th>
	<th>지급포인트</th>
	<th>사용포인트</th>
</tr>
<?php
$sum_point1 = $sum_point2 = $sum_point3 = 0;

$sql = " select *
			{$sql_common}
			{$sql_order}
			limit {$from_record}, {$rows} ";
$result = sql_query($sql);
for ($i=0; $row=sql_fetch_array($result); $i++) {
	$point1 = $point2 = 0;
	if ($row['po_point'] > 0) {
		$point1 = '+' .number_format($row['po_point']);
		$sum_point1 += $row['po_point'];
	} else {
		$point2 = number_format($row['po_point']);
		$sum_point2 += $row['po_point'];
	}

	$po_content = $row['po_content'];

	$expr = '';
	if($row['po_expired'] == 1)
		$expr = ' txt_expired';
?>
<tr>
	<td class="td_datetime"><?php echo $row['po_datetime']; ?></td>
	<td><?php echo $po_content; ?></td>
	<td class="td_date<?php echo $expr; ?>">
		<?php if ($row['po_expired'] == 1) { ?>
		만료<?php echo substr(str_replace('-', '', $row['po_expire_date']), 2); ?>
		<?php } else echo $row['po_expire_date'] == '9999-12-31' ? '&nbsp;' : $row['po_expire_date']; ?>
	</td>
	<td class="td_numbig"><?php echo $point1; ?></td>
	<td class="td_numbig"><?php echo $point2; ?></td>
</tr>
<?php
}

if ($i == 0)
	echo '<tr><td colspan="5" class="empty_table">자료가 없습니다.</td></tr>';
else {
	if ($sum_point1 > 0)
		$sum_point1 = "+" . number_format($sum_point1);
	$sum_point2 = number_format($sum_point2);
}
?>
<tr>
	<th colspan="3">소계</th>
	<td><?php echo $sum_point1; ?></td>
	<td><?php echo $sum_point2; ?></td>
</tr>
<tr>
	<th colspan="3">보유포인트</th>
	<td colspan="2"><?php echo number_format($member['mb_point']); ?></td>
</tr>
</table>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, $_SERVER['SCRIPT_NAME'].'?'.$qstr.'&amp;page='); ?>

<?
include_once(G5_PATH.'/sub/rr.php');
?>