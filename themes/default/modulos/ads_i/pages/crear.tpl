<div class="adsform_create floatL">
<div class="cntn_adsfrmcrt_">
<div id="contn_adds_cntn_imtx">
<div class="input_cnt">
<div class="tltl_cnt">Nombre</div>
<div class="cntnt_inpt"><input type="text" name="name" required="1"/></div>
<div class="color_gray info_cntn">Este campo se utilizara como identificador de tu anuncio</div>
</div>

{if $action == 'campaña'}
<div class="input_cnt">
<div class="tltl_cnt">Url</div>
<div class="cntnt_inpt"><input type="text" name="desc" required="1" class="rul_ads_ann" placholder="http://"></div>
<div class="color_gray info_cntn">Este campo sera la url referida de donde proviene el trafico.
<input type="hidden" name="sdtr" value="nvb">
</div>
</div>
{/if}

{if $action != 'campaña'}
<div class="input_cnt">
<div class="tltl_cnt">Tipo</div>
<div class="cntnt_inpt">
<select name="ubicdds">
<option value="">Selecciona una ubicación de tu anuncio</option>
<option value="1">Anuncios en paginas web</option>
<option value="2">Anuncios en buscador</option>
<option value="3">Anuncios en noticias</option>
<option value="4">Anuncios en contenido relacionado</option>
<option value="5">Anuncios en Chats de Wortit</option>
<option value="6">Anuncios en Aula de Wortit</option>
<option value="7">Anuncios en Wortit (azar)</option>
</select>
</div>
<div class="color_gray info_cntn">El tipo de anuncio determina donde se mostrara.</div>
</div>
{/if}

<div class="input_cnt">
<div class="tltl_cnt">Tamaño del anuncio</div>
<div class="cntnt_inpt">
<div class="contn_adss hidden">
<div class="hidden">
<div class="floatL" style="margin: 0px 8px 0px 0px;">Anuncios Disponibles</div>
<div class="floatL">
<select class="dsnone"><option value="">Recomendado</option><option value="1">Banner horizontal</option><option value="2">Banner vertical</option><option value="2">Banner rectangular</option><option value="2">Banner adaptable</option></select></div>
</div>
<div class="contn_ovflwaut">
<input type="hidden" name="dimen" value="1" class="dtyep_ann"/>
<div class="CNTNADSWRDPRS ACTVWRDPRS" dtype="1" dkey="4DSF564S35AS4F_5SD87F-SD4F7_1"><div><div class="HDR_CNDRWRDPRS"><div class="BOX" style="width: 75%; height: 15%;"></div></div><div class="INF_CNDRWRDPRS"><div class="clearfix">700 x 90</div><div class="clearfix">Skyscraper horizontal</div></div></div></div>
<div class="CNTNADSWRDPRS" dtype="2" dkey="4F749A8SD6Q5W_6S8DF_8-554"><div><div class="HDR_CNDRWRDPRS"><div class="BOX" style="width: 34%; height: 46%;"></div></div><div class="INF_CNDRWRDPRS"><div class="clearfix">336 x 280</div><div class="clearfix">Rectángulo grande</div></div></div></div>
<div class="CNTNADSWRDPRS" dtype="3" dkey="685SD6S8_S57D-69S8E"><div><div class="HDR_CNDRWRDPRS"><div class="BOX" style="width: 30%; height: 100%;"></div></div><div class="INF_CNDRWRDPRS"><div class="clearfix">300 x 600</div><div class="clearfix">Skyscraper grande</div></div></div></div>
<div class="CNTNADSWRDPRS" dtype="4" dkey="S4S98S8498S4_5S7D-S74_54"><div><div class="HDR_CNDRWRDPRS"><div class="BOX" style="width: 30%; height: 41%;"></div></div><div class="INF_CNDRWRDPRS"><div class="clearfix">300 x 250</div><div class="clearfix">Rectángulo mediano</div></div></div></div>
</div>
</div>
</div>
</div>

{if $action != 'campaña'}
<div class="input_cnt">
<div class="tltl_cnt">Fecha de finalización</div>
<div class="cntnt_inpt"><input type="text" required="1" class="cripter" name="date" value="{$smarty.now|date_format:"%d-%m-%Y"}"></div>
<div class="color_gray info_cntn">Fecha cuando finalizara tu anuncio y se dejara de mostrar en nuestro sistema y se cancelara la suscripción el pago.</div>
</div>
{/if}

<div class="input_cnt">
<div class="tltl_cnt">Idioma</div>
<div class="cntnt_inpt">
<select name="idddoomw" required="1">
<option value="1">Español</option>
<option value="2">Ingles</option>
</select>
</div>
<div class="color_gray info_cntn">El idioma que hablan los usuarios a los que te gustaria mostrarles tu anuncio.</div>
</div>

<div class="input_cnt">
<div class="tltl_cnt">Tipo de anuncio</div>
<div class="cntnt_inpt">
<select required="1" onchange="{literal}if($(this).val() == 2){$('.annc_txt_ssdcard1').fadeIn(250); $('.annc_txt_asdcarddd2').fadeOut(250); }else if($(this).val() == 1){ $('.annc_txt_asdcarddd2').fadeIn(250); $('.annc_txt_ssdcard1').fadeOut(250); }else{ $('.annc_txt_ssdcard1').fadeOut(250); $('.annc_txt_asdcarddd2').fadeOut(250);}{/literal}" name="tiposss">
<option value="">Selecciona un tipo</option>
<option value="1">Anuncio de display</option>
<option value="2">Anuncio de texto</option>
</select>
{if $action != 'campaña'}
<div class="contn_adss hidden annc_txt_ssdcard1 dsnone">
<div class="color_gray clearfix">Los anuncios de texto son mas baratos y mas simples.</div>
<div class="cntnd_ann_txt_ds">
<div class="display_anntxt floatL">
<div class="ann_txt_dsply ann_txt_200x200"><table><tbody><tr><td><div class="ann_txt_ddstrt"><table><tbody>
<tr><td><div class="ann_txt_ttl"><a href="#"><span>Titulo del anuncio</span></a></div></td></tr>
<tr><td><div class="ann_txt_url_lin"><a href="#"><span>http://sitio.com/</span></a></div></td></tr>
<tr><td><div class="ann_txt_desc_ann"><span>Descripción de tu anuncio</span></div></td></tr>
<tr><td><div class="ann_txt_btn_frm"><div class="cntn_we_ann_txt"><img src="{$tsConfig.url}/images/static/media/icons/true/icn_ns.png"></div></div></td></tr>
</tbody></table></div></td></tr></tbody></table></div>
</div>
<div class="form_anntxt floatL">
<div class="tltl_cnt">Titulo</div>
<input type="text" name="bnttls" class="ttd_ads_ann" placholder="Titulo de el anuncio">
<div class="tltl_cnt">Url</div>
<input type="text" name="desc" class="rul_ads_ann" placholder="http://">
<div class="tltl_cnt">Descripción</div>
<input type="text" class="esd_ads_ann" name="mdesc" placholder="...">
</div>
</div>
</div>
{/if}
{if $action != 'campaña'}
<div class="contn_adss hidden annc_txt_asdcarddd2 dsnone">
<div class="color_gray clearfix">Sube tu imagen para mostrar, Recuerda que la imagen deve ser de el tamaño especificado en el tamaño del anuncio para que tu anuncio no pierda nitidez</div>
<div class="cntnd_ann_txt_ds">
<div class="prn_fileup_filseize_ann_img dsnone">
<div class="barloading"><div class="bar animate_1s" style="width: 1%;"></div></div>
</div>
<div class="prn_filup_ann_img">
<span>Selecciona la imagen (jpg, jpeg, png, gif)</span><br />
<input type="file" class="fl_ann_wber" id="fl_ann_img_llc_wber"/>
</div>
</div>
</div>
{/if}
</div>
<div class="color_gray info_cntn">Tipo de anuncio que deseas mostrar.</div>
</div>

<div class="input_cnt">
<div class="tltl_cnt">Anuncio de reserva</div>
<div class="cntnt_inpt">
<select name="reservSLWL" required="1">
<option value="">Selecciona un tipo</option>
<option value="1">Anuncio en blanco</option>
<option value="2">Rellenar anuncio con color fuente</option>
</select>
</div>
<div class="color_gray info_cntn">Selecciona lo que se mostrara durante el proceso de confirmación de tu anuncio.</div>
</div>

{if $action != 'campaña'}
<div class="input_cnt">
<div class="tltl_cnt">Presupuesto por dia</div>
<div class="cntnt_inpt">#<input type="text" required="1" name="presup" style="width:45px;"> Worts por dia.</div>
<div class="color_gray info_cntn">La inversión diaria real puede variar.</div>
</div>
{/if}

<div><input type="button" class="bg_green_3d btn color_white" style="border: 1px solid #497527;" onclick="add_ss.send();" value="Crear anuncio" /> <input type="button" class="input_button" value="Cancelar anuncio nuevo" /></div>
</div>
</div>
</div>
<div class="xtracontent::">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/ads_20x200.css">
<link rel="stylesheet" type="text/css" href="{$tsConfig.url}/css/modo/formads.css"/>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/formads.js"></script>
</div>