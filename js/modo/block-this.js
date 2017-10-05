if ($('.tooltip-anonimo').length){
$('.require-login').removeAttr('href').removeAttr('onclick').unbind('click').bind('click',function(){
var obj = this;
$('.tooltip-anonimo').show().position({
my: 'left top', at: 'left bottom', of: obj, offset: '-13 5', collision: 'flip' 
});
var className = [ 'at' ], rel = $(obj).offset(), self = $('.tooltip-anonimo').offset();
if(rel.top <= self.top - 5){ className.push('bottom'); }else{ className.push('top'); }
if(rel.left <= self.left + 14){ className.push('right'); }else{ className.push('left'); }
$('.tooltip-anonimo').removeClass('at-bottom-right at-bottom-left at-top-right at-top-left').addClass(className.join('-'));
$('.tooltip-anonimo').data('rel', $(obj));
});
}