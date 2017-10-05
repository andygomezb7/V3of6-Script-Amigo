/* HOVER CARD CACHE */
var vcard_cache = new Array();
/* jquery tooltip beta */
(function ($) {
	$.fn.tooltip = function (opts) {

		opts = $.extend({
			className: 'tooltip',
			content: 'title',
			offset: [ 0, 0 ],
			align: 'center',
			inDelay: 100,
			outDelay: 100
		}, opts || {});

		var mouseOutCallback = function (obj) {
			var tooltip = $.data(obj, 'tooltip');
			if (tooltip && !$.data(tooltip[0], 'hover')) {
				tooltip.hide();
			}
		}
        // OBTIENE EL NUEVO TOP
        var setNewTop = function(top, obj){
            var hs = $(obj).find('.bubble-content').css('height')
            var new_top = hs.replace('px','')
            new_top = parseInt(new_top) + 25;
			$(obj).css({
				top: top - new_top,
			});
        }
        // CACHE
        //var cache = new Array();
        //
		$(this).mouseenter(function () {
			var obj = this;
			setTimeout(function () {
				var pos = $.extend({}, $(obj).offset(), { width: obj.offsetWidth, height: obj.offsetHeight });
                var move_more = true;
                //
				if (!$.data(obj, 'tooltip')) {
					var title;
					if (typeof opts.content == 'string' && $(obj).attr(opts.content) != 'undefined' && $(obj).attr(opts.content) != '') {
						title = $(obj).attr(opts.content);
					} else if (typeof opts.content == 'function') {
						title = opts.content(obj);
					}
                    //var vcard_exists = $('#vcard_' + title).attr('class');
                    //if(typeof vcard_exists == 'undefined' || vcard_exists == 'null') {
                    var vcard = '<div class="bubble-wrapper">'
                        vcard += '<div class="bubble-divot"></div>'
                        vcard += '<div class="bubble-content">'
                        vcard += '<div class="loading-msg">Cargando...</div>'
                        vcard += '</div>'
                    vcard += '</div>';
                    if(typeof vcard_cache['mf' + title] == 'undefined' || vcard_cache['mf' + title] == ''){
                        //var tooltip = $('<div id="vcard_' + title +'" class="' + opts.className + '">' + vcard  + '</div>').appendTo(document.body);
                        var tooltip = $('<div class="' + opts.className + ' sd_'+title+'">' + vcard  + '</div>').appendTo(document.body);
                        // CARGAR INFO
                    	$.post(global_data.url+'/ajax/vcard-form.php', {'uid':title}, function(h){
                            tooltip.find('.tooltip').html(h);
                            vcard_cache['mf' + title] = h;
                            setNewTop(pos.top, tooltip);
                            move_more = false;
                    		});
                    } else {
                        //var tooltip = $('#vcard_' + title);
                        var tooltip = $('<div class="' + opts.className + '">' + vcard  + '</div>').appendTo(document.body);
                        tooltip.find('.bubble-content').html(vcard_cache['mf' + title]);
                        setNewTop(pos.top, tooltip);
                        move_more = false;
                    }
					//
					$.data(obj, 'tooltip', tooltip);
					tooltip.hover(function () {
						$.data(this, 'hover', true);
					}, function () {
						$.removeData(this, 'hover');
						setTimeout(function () {
							mouseOutCallback(obj);
						}, opts.outDelay);
					});
				} else {
					var tooltip = $.data(obj, 'tooltip').show();
                    //var vcard_id = $(obj).attr(opts.content);
                    //var tooltip = $('#vcard_' + vcard_id).show();
                    setNewTop(pos.top, tooltip);
                    move_more = false;
				}
				tooltip.css({
					display: 'block',
					position: 'absolute',
					zIndex: 99,
					left: 0
				});
				var left;
				if (opts.align == 'left') {
					left = pos.left;
				} else if (opts.align == 'center') {
					left = pos.left + pos.width / 2 - tooltip[0].offsetWidth / 2;
				} else if (opts.align == 'right') {
					left = pos.left + pos.width - tooltip[0].offsetWidth;
				}
				left += opts.offset[1];
                // LEFT
				tooltip.css({left: left});
                // TOP
                if(move_more == true) {
                    tooltip.css({top: pos.top + opts.offset[0]});
                }
			}, opts.inDelay);
		}).mouseleave(function () {
			var obj = this;
			setTimeout(function () {
				mouseOutCallback(obj);
			}, opts.outDelay);
		});
	}
})(jQuery);