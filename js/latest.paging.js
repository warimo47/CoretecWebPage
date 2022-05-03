var latestParam = [];
var latestPopup = [];
var latestIndex = [];
var latestLayer = [];

$.latestInit = function(unique_id, option_arr)
{
	var option_cfg = {
		layer_type : 'horizontal',
		layer_btn : true
	};
	if(option_arr)
	{
		$.extend(option_cfg, option_arr);
	}
	if(!option_arr.exe_file || !option_arr.bo_table || !option_arr.layer_id || !option_arr.pager_id || !option_arr.pager_row || !option_arr.popup_id)
	{
		window.alert('환경설정이 올바르지 않습니다.');
		return;
	}
	latestParam[unique_id] = option_arr;
	$.latestLoad(unique_id);
};

$.latestMore = function(unique_id, wr_id)
{
	$.post(
		latestParam[unique_id]['exe_file'],
		{
			action : 'more',
			bo_table : latestParam[unique_id]['bo_table'],
			wr_id : wr_id
		},
		function(result)
		{
			latestIndex[unique_id] = wr_id;
			var object = $('#' + latestParam[unique_id]['popup_id']);
			object.find('.subject').html(result.subject);
			object.find('.content').html(result.content);
			if(latestParam[unique_id]['popup_img'])
			{
				object.find('.content').find('img').css('width', latestParam[unique_id]['popup_img']);
			}
			latestPopup[unique_id] = object.bPopup({
				positionStyle : 'fixed',
				speed : 100,
				transition : latestParam[unique_id]['popup_in'],
				transitionClose : latestParam[unique_id]['popup_out']
			});
		},
		'json'
	);
};

$.latestPrev = function(unique_id)
{
	$.post(
		latestParam[unique_id]['exe_file'],
		{
			action : 'prev',
			bo_table : latestParam[unique_id]['bo_table'],
			wr_id : latestIndex[unique_id]
		},
		function(result)
		{
			if(result)
			{
				latestIndex[unique_id] = result;
				var object = $('#' + latestParam[unique_id]['popup_id']);
				$.latestOkay(unique_id);
				setTimeout(function()
				{
					$.latestMore(unique_id, latestIndex[unique_id]);
				}, 1000);
			}
			else
			{
				window.alert('이전 게시글이 없습니다.');
				return;
			}
		}
	);
};

$.latestNext = function(unique_id)
{
	$.post(
		latestParam[unique_id]['exe_file'],
		{
			action : 'next',
			bo_table : latestParam[unique_id]['bo_table'],
			wr_id : latestIndex[unique_id]
		},
		function(result)
		{
			if(result)
			{
				latestIndex[unique_id] = result;
				var object = $('#' + latestParam[unique_id]['popup_id']);
				$.latestOkay(unique_id);
				setTimeout(function()
				{
					$.latestMore(unique_id, latestIndex[unique_id]);
				}, 1000);
			}
			else
			{
				window.alert('다음 게시글이 없습니다.');
				return;
			}
		}
	);
};

$.latestOkay = function(unique_id)
{
	latestPopup[unique_id].close();
};

$.latestLoad = function(unique_id)
{
	latestLayer[unique_id] = $('#' + latestParam[unique_id]['layer_id']).bxSlider({
		mode : latestParam[unique_id]['layer_type'],
		controls : latestParam[unique_id]['layer_btn'],
		pager : false,
		infiniteLoop : false,
		onSlidePrev : function($slideElement, oldIndex, newIndex)
		{
			$.latestList(unique_id, $slideElement, newIndex);
		},
		onSlideNext : function($slideElement, oldIndex, newIndex)
		{
			$.latestList(unique_id, $slideElement, newIndex);
		},
		onSlideAfter : function($slideElement, oldIndex, newIndex)
		{
			if(newIndex % latestParam[unique_id]['pager_cnt'] > 0)
			{
				var page = (Math.ceil((newIndex + 1) / latestParam[unique_id]['pager_row']) - 1) * latestParam[unique_id]['pager_row'] + 1;
			}
			else
			{
				var page = newIndex + 1;
			}
			var object = $('#' + latestParam[unique_id]['pager_id']).children();
			object.hide();
			object.first().show();
			for(var key = page; key < page + latestParam[unique_id]['pager_cnt']; key++)
			{
				object.eq(key).show();
			}
			object.last().show();
			object.removeClass('over');
			object.eq(newIndex + 1).addClass('over');
		}
	});
	var object = $('#' + latestParam[unique_id]['pager_id']).children();
	object.hide();
	object.first().show();
	for(var key = 1; key < 1 + latestParam[unique_id]['pager_cnt']; key++)
	{
		object.eq(key).show();
	}
	object.last().show();
	object.eq('1').addClass('over');
};

$.latestList = function(unique_id, slideElement, newIndex)
{
	if(slideElement && slideElement.attr('rel') != 'done')
	{
		$.post(
			latestParam[unique_id]['exe_file'],
			{
				action : 'list',
				bo_table : latestParam[unique_id]['bo_table'],
				newIndex : newIndex,
				pager_row : latestParam[unique_id]['pager_row'],
				unique_id : unique_id
			},
			function(result)
			{
				slideElement.html(result);
				slideElement.attr('rel', 'done');
			}
		);
	}
};

$.latestPage = function(unique_id, page)
{
	var nowIndex = Math.ceil((latestLayer[unique_id].getCurrentSlide() + 1) / latestParam[unique_id]['pager_cnt']);
	if(page == 'prev' || page == 'next')
	{
		if(page == 'prev')
		{
			if(nowIndex > 1)
			{
				var page = (nowIndex - 2) * latestParam[unique_id]['pager_cnt'] + 1;
			}
			else
			{
				return;
			}
		}
		if(page == 'next')
		{
			if(Math.ceil(($('#' + latestParam[unique_id]['pager_id']).children().size() - 2) / latestParam[unique_id]['pager_cnt']) > nowIndex)
			{
				var page = nowIndex * latestParam[unique_id]['pager_cnt'] + 1;
			}
			else
			{
				return;
			}
		}
	}
	var newIndex = parseInt(page) - 1;
	var $slideElement = $('#' + latestParam[unique_id]['layer_id']).children().eq(newIndex);
	if($slideElement.attr('rel') != 'done')
	{
		$.latestList(unique_id, $slideElement, newIndex);
	}
	latestLayer[unique_id].goToSlide(newIndex);
}