$(document).ready(function(){
//$('.autocomplete').autocomplete();
$('.autoCmplt input[name=autoText]').keyup(function(){
if($(this).val()){
var AutCmpltWhdtfnkel255 = parseInt($(this).css('width'))+3;
if($(this).parent('.result').length > 0){
$(this).parent('.result').html('<div class="result" style="width:'+AutCmpltWhdtfnkel255+'px;"><div class="result_focus">Hola sirve el autocomplete</div><div class="result_focus">'+$(this).val()+'</div></div>');
}else{
$(this).parent().append('<div class="result" style="width:'+AutCmpltWhdtfnkel255+'px;"><div class="result_focus">Hola sirve el autocomplete</div><div class="result_focus">'+$(this).val()+' + '+$(this).parent('.result').length+'</div></div>');
}
}else{
$(this).parent('.result').hide();
}
});
});