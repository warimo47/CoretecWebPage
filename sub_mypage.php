<?
$pagecode = "mypage";
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_MSHOP_PATH.'/mypage.php');
    return;
}

if (!$is_member)
    goto_url(G5_BBS_URL."/login.php?url=".urlencode(G5_URL."/sub/sub_mypage.php"));

$g5['title'] = $member['mb_name'].'님 마이페이지';
include_once(G5_PATH.'/sub/ll_mypage.php');

// 쿠폰
$cp_count = 0;
$sql = " select cp_id
            from {$g5['g5_shop_coupon_table']}
            where mb_id IN ( '{$member['mb_id']}', '전체회원' )
              and cp_start <= '".G5_TIME_YMD."'
              and cp_end >= '".G5_TIME_YMD."' ";
$res = sql_query($sql);

for($k=0; $cp=sql_fetch_array($res); $k++) {
    if(!is_used_coupon($member['mb_id'], $cp['cp_id']))
        $cp_count++;
}
?>

<div class="shop_cart_list_title">나의정보 
<span style="float:right;text-align:right">
<a href="<? echo G5_BBS_URL; ?>/logout.php" class="win_memo btn-color small">로그아웃</a>
<a href="<? echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php" class="btn-color small">회원정보수정</a>
<a href="<? echo G5_BBS_URL; ?>/member_confirm.php?url=member_leave.php" onclick="return member_leave();" class="btn-color small">회원탈퇴</a>
<!--<a href="<? echo G5_BBS_URL; ?>/memo.php" target="_blank" class="win_memo btn-color small">쪽지함</a>-->
</span>
</div>

<table class="shop_cart_form">
<colgroup>
<col width="100" />
<col width="200" />
<col width="100" />
<col width="200" />
<col width="100" />
<col width="" />
</colgroup>
<tr>
	<th>아이디</th>
	<td><? echo ($member['mb_id']); ?></td>
	<th>닉네임</th>
	<td><? echo ($member['mb_nick']); ?></td>
	<th>가입일</th>
	<td><? echo $member['mb_datetime']; ?></td>
</tr>
<tr>
	<th>포인트</th>
	<td><a href="<? echo G5_BBS_URL; ?>/point.php" target="_blank" class="win_point"><? echo number_format($member['mb_point']); ?>점</a></td>
	<th>연락처</th>
	<td><? echo ($member['mb_tel'] ? $member['mb_tel'] : '미등록'); ?></td>
	<th>이메일</th>
	<td><? echo ($member['mb_email']); ?></td>
</tr>
<tr>
	<th>주소</th>
	<td colspan="6"><? echo sprintf("(%s-%s)", $member['mb_zip1'], $member['mb_zip2']).' '.print_address($member['mb_addr1'], $member['mb_addr2'], $member['mb_addr3'], $member['mb_addr_jibeon']); ?></td>
</tr>
</table>

<div style="height:20px"></div>

<div class="shop_cart_list_title">02. 최근 주문내역 <span style="float:right;text-align:right"><a href="<? echo G5_URL?>/shop/orderinquiry.php" class="btn-color small">주문내역 더보기</a></span></div>
<?
define("_ORDERINQUIRY_", true);
$limit = " limit 0, 5 ";
include G5_SHOP_PATH.'/orderinquiry.sub.php';
?>

<div style="height:20px"></div>

<div class="shop_cart_list_title">03. 최근 찜한내역 <span style="float:right;text-align:right"><a href="<? echo G5_URL?>/shop/wishlist.php" class="btn-color small">위시리스트 더보기</a></span></div>

<table class="shop_cart_list">
<tr>
	<th width="100">이미지</th>
	<th>상품명</th>
	<th width="200">보관일시</th>
</tr>
<?
$sql = " select *
		   from {$g5['g5_shop_wish_table']} a,
				{$g5['g5_shop_item_table']} b
		  where a.mb_id = '{$member['mb_id']}'
			and a.it_id  = b.it_id
		  order by a.wi_id desc
		  limit 0, 3 ";
$result = sql_query($sql);
for ($i=0; $row = sql_fetch_array($result); $i++)
{
	$image = get_it_image($row['it_id'], 70, 70, true);
?>

<tr>
	<td class="smb_my_img"><? echo $image; ?></td>
	<td class="subject"><a href="<? echo G5_URL?>/shop/item.php?it_id=<? echo $row['it_id']; ?>"><? echo stripslashes($row['it_name']); ?></a></td>
	<td class="td_datetime"><? echo $row['wi_time']; ?></td>
</tr>

<?
}

if ($i == 0)
	echo '<tr><td colspan="3" class="empty_table">보관 내역이 없습니다.</td></tr>';
?>
</table>

<script>
$(function() {
    $(".win_coupon").click(function() {
        var new_win = window.open($(this).attr("href"), "win_coupon", "left=100,top=100,width=700, height=600, scrollbars=1");
        new_win.focus();
        return false;
    });
});

function member_leave()
{
    return confirm('정말 회원에서 탈퇴 하시겠습니까?')
}
</script>
<!-- } 마이페이지 끝 -->

<?
include_once(G5_PATH.'/sub/rr.php');
?>