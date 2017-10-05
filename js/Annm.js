var annm = {
	lgg: function(){
	$(".tltHmLgg div").html('<span id="error_flat">Enviando</span>');
	$.post(global_data.url+'/ajax/user-logg.php', {'usarPrLggr': $('.usrlgg').val(), 'cntsniaplggr' : $('.pasurslgg').val()}, function(h){
       switch(h.charAt(1)){case 0: case '0': $('.tltHmLgg div #error_flat').addClass('red_flat'); break;}
	$('.tltHmLgg div #error_flat').html(h.substring(3));
	if(h.charAt(1) == 1 || h.charAt(1) == '1'){ location.reload(true); }
	});
	}
}

$(document).ready(function(){
$('.logg').click(function(){ annm.lgg(); });
});