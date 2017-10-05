var favn = {
det: function(i, o){
mydialog.loading('Borrando de favoritos...');
$.post(global_data.url+'/ajax/new-favdet.php', {'gi':i,'go':o}, function(h){
switch(h.charAt(1)){
case 0: case '0': default:
mydialog.alert('Aviso', h.substring(3));
break;
case 1: case '1':
$('#'+i+i+'_L').fadeOut(250); $('#'+i+i+'_L').remove(); mydialog.close();
break;
}
});
}
}