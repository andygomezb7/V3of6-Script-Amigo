<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 03:07:07
         compiled from "/home/babanta/wortit.net/themes/default/modulos/grupos_i/perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11187488765875f5bbc7b107-67924409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '812d382c86e24bb121f3f10f4b6143676b952e69' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/grupos_i/perfil.tpl',
      1 => 1417889680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11187488765875f5bbc7b107-67924409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsGrupo' => 0,
    'g' => 0,
    'tsConfig' => 0,
    'wuser' => 0,
    'get_' => 0,
    'catsc' => 0,
    'c' => 0,
    'getgeta' => 0,
    'raymembers' => 0,
    'ug' => 0,
    'ragpsg' => 0,
    'm' => 0,
    'relacgrups' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5875f5bc109346_97629133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5875f5bc109346_97629133')) {function content_5875f5bc109346_97629133($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?><div class="grupos_perf_i">
<div class="grupos_perf_i_c">
<div class="grupos_perf_hdr">
<div class="htd">
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['members']) {?>
<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsGrupo']->value['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
<div class="gmm">
<img src="<?php echo $_smarty_tpl->tpl_vars['g']->value['w_avatar'];?>
">
<div class="tx"><?php echo $_smarty_tpl->tpl_vars['g']->value['usuario_nombre'];?>
</div>
</div>
<?php } ?><?php } else { ?>
<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 7+1 - (1) : 1-(7)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<div class="gmm">
<img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group.png">
<div class="tx">Usuario</div>
</div>
<?php }} ?>
<?php }?>
</div>

<div class="vat">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['wdefined'];?>
/"><img src="<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['avatar']) {?><?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group.png<?php }?>"></a>
<div class="txt_d"> <div class="floatL"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['wdefined'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['nombre'];?>
</a></div>
<ul>
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['idadmin1']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['wdefined'];?>
/editar">Editar grupo</a></li><?php }?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['wdefined'];?>
/?ag=miembros">Miembros</a></li>
</ul>
</div>
</div>
</div>

<div class="grupos_perf_foo">
<?php if ($_smarty_tpl->tpl_vars['get_']->value['preg']=='editar') {?>
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['idadmin1']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?>
<div class="formuadmin dosneloksl">
<fieldset>
<dl>
<dt><label>Nombre</label><br><span>Nombre identificador del grupo</span></dt>
<dd><input type="text" name="nom" value="<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['nombre'];?>
"/></dd></dl>

<dl>
<dt><label>Nombre corto</label><br> <span>El nombre corto no se puede editar.</span></dt>
<dd><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['wdefined'];?>
" disabled="disabled" disable/></dd>
</dl>

<dl>
<dt><label>Avatar</label><br><span>Sube una imagen de tu escritorio.</span></dt>
<dd>
<div class="updvt_gru">
<div class="updvt_lodt dsnone">
<h1>Subiendo...</h1>
<div class="barloading"><div class="bar" style="width: 5%;"></div></div>
</div>

<div class="updvt_show_d <?php if (!$_smarty_tpl->tpl_vars['tsGrupo']->value['avatar']) {?>dsnone<?php }?>">
<div style="position:relative;width:175px;height:175px;">
<center><div style="position:absolute;float:center;font-size:23px;left:8px;top:8px;" class="lsf"><a onclick="$('.updvt_show_d').fadeOut(250);$('.updvt_shound').fadeIn(250);">close</a></div></center>
<img src="<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['avatar'];?>
" style="width:175px;height:175px;"></div>
<input type="hidden" name="upimg" value="<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['avatar']) {?><?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['avatar'];?>
<?php } else { ?>1<?php }?>">
</div>

<div class="updvt_shound <?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['avatar']) {?>dsnone<?php }?>">
<div style="border: 1px dashed rgba(0, 0, 0, 0.207843); padding: 2em; position: relative; text-align: -webkit-center; width: 70%;" class="hover cursorP ZErO_uNiMg"><div class="lsf" style="font-size: 56px;"><a>camera</a></div><input type="file" class="inputnone cursorP" id="upster_uNGrimg_Edtr">
</div>
</div>

</div>
</dd>
</dl>

<dl>
<dt><label>Descripcion</label><br><span>Descripción breve o larga del grupo (información sobre el).</span></dt>  
<dd><textarea name="desc" id="descgg" style="width: 451px;
height: 190px;"><?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['descripcion'];?>
</textarea></dd>
</dl>

<dl>
<dt><label>Categoria</label><br><span>Categoria del grupo</span></dt>
<dd><select id="cattg" name="cat">
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catsc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['cid'];?>
" <?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['categoria']==$_smarty_tpl->tpl_vars['c']->value['cid']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['c_nombre'];?>
</option>
<?php } ?>
</select><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['idgrupo'];?>
" /></dd>
</dl>
</fieldset>
<center><input type="button" class="bg_green_3d btn color_white" name="dnlwkd" value="Guardar cambios"></center>
</div>
<?php } else { ?><h1>No eres administrador de este grupo...</h1><?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['getgeta']->value=='miembros') {?>
<div class="pub_ongroup floatL">
<div class="clearfix hidden"><?php  $_smarty_tpl->tpl_vars['ug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['raymembers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ug']->key => $_smarty_tpl->tpl_vars['ug']->value) {
$_smarty_tpl->tpl_vars['ug']->_loop = true;
?>
<div class="floatL hidden" style="margin: 5px;">
<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['ug']->value['usuario_nombre'];?>
/" title="<?php echo $_smarty_tpl->tpl_vars['ug']->value['usuario_nombre'];?>
" style="display:block;">
<img src="<?php echo $_smarty_tpl->tpl_vars['ug']->value['w_avatar'];?>
" style="width: 120px;height:120px;padding:3px;border:2px solid #CCCCCC;"/>
</a>
</div>
<?php } ?></div>
<div class="pags hidden clearfix"><?php echo $_smarty_tpl->tpl_vars['ragpsg']->value;?>
</div>
</div>

<!----GADGETS MEIMBROS-->
<div class="pub_gadgts floatL">
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['idadmin1']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?>
<div class="box">
<div class="t">Administración del grupo</div>
<div>
<div class="clearfix"><b>Identificador</b> <?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['idgrupo'];?>
</div>
<div class="clearfix"><b>Administrador</b> <?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['admin'];?>
</div>
<div class="clearfix"><b>Miembros</b> <?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['membersnum'];?>
</div>
</div>
</div>
<div class="box">
<div class="t">Solicitudes</div>
<div id="goGDM"><?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['solicitudes']) {?>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsGrupo']->value['solicitudes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
<div class="list hidden" id="soDMG<?php echo $_smarty_tpl->tpl_vars['m']->value['idregistro'];?>
"><div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/60/60/?file=<?php echo $_smarty_tpl->tpl_vars['m']->value['w_avatar'];?>
"></div>
<div class="text floatL"><div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
/">@<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
</a></div><div class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['m']->value['fecha_registro']);?>
</div>
<div><a class="so input_button ibg" data-o='<?php echo $_smarty_tpl->tpl_vars['m']->value['idregistro'];?>
' data-i='1'>Añadir</a> &nbsp; | &nbsp; <a class="so input_button ibr" data-o='<?php echo $_smarty_tpl->tpl_vars['m']->value['idregistro'];?>
' data-i='2'>Rechazar</a></div>
</div></div>
<?php } ?><?php } else { ?><div id="error_flat" class="blue_flat">No hay solicitudes aún.</div><?php }?>
</div>
</div>
<?php }?>

<div class="box">
<div class="t">Ultimos miembros
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['solit']) {?>
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['soli']['estado']==1) {?>
<a class="input_button btn floatR folg" data-o="2">Abandonar</a><?php } else { ?><a class="input_button ibg btn floatR folg" data-o="2" title="Haz click y saldras del grupo">Solicitud enviada</a><?php }?>
<?php } else { ?><a class="input_button ibg btn floatR folg" data-o="1">Unirme</a><?php }?>
</div>
<div><?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['members']) {?>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsGrupo']->value['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
<div class="list hidden"><div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/60/60/?file=<?php echo $_smarty_tpl->tpl_vars['m']->value['w_avatar'];?>
"></div>
<div class="text floatL"><div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
/">@<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
</a></div><div class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['m']->value['fecha_registro']);?>
</div></div></div>
<?php } ?><?php } else { ?><div id="error_flat" class="blue_flat">No hay miembros aún.</div><?php }?>
</div>
</div>

<div class="box">
<div class="t">Grupos relacionados</div>
<div>
<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relacgrups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
<div class="list hidden"><div class="img floatL"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['g']->value['wdefined'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['g']->value['avatar'];?>
"></a></div>
<div class="text floatL"><div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['g']->value['wdefined'];?>
/" title="Ir al grupo"><?php echo $_smarty_tpl->tpl_vars['g']->value['nombre'];?>
</a></div><div class="color_gray size11"><?php echo $_smarty_tpl->tpl_vars['g']->value['miembros'];?>
 <?php if ($_smarty_tpl->tpl_vars['g']->value['miembros']<=1) {?>miembro<?php } else { ?>miembros<?php }?></div></div></div>
<?php } ?>
</div>
</div>

</div>
<!----GADGETS MEIMBROS-->

<?php } else { ?>
<div class="pub_ongroup floatL"><div class="dorLork"><input type="hidden" name="pGt" value="2" /><input type="hidden" name="pGtScrooll" value="2" /></div><?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['solit']&&$_smarty_tpl->tpl_vars['tsGrupo']->value['soli']['estado']==1) {?>
<?php echo $_smarty_tpl->getSubTemplate ('modulos/home_i/publicador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?>
<div class="pub_load_BWorts">Cargando bworts...</div>
</div>
<div class="pub_gadgts floatL">
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['idadmin1']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?>
<div class="box">
<div class="t">Administración del grupo</div>
<div>
<div class="clearfix"><b>Identificador</b> <?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['idgrupo'];?>
</div>
<div class="clearfix"><b>Administrador</b> <?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['admin'];?>
</div>
<div class="clearfix"><b>Miembros</b> <?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['membersnum'];?>
</div>
</div>
</div>
<div class="box">
<div class="t">Solicitudes</div>
<div id="goGDM"><?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['solicitudes']) {?>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsGrupo']->value['solicitudes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
<div class="list hidden" id="soDMG<?php echo $_smarty_tpl->tpl_vars['m']->value['idregistro'];?>
"><div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/60/60/?file=<?php echo $_smarty_tpl->tpl_vars['m']->value['w_avatar'];?>
"></div>
<div class="text floatL"><div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
/">@<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
</a></div><div class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['m']->value['fecha_registro']);?>
</div>
<div><a class="so input_button ibg" data-o='<?php echo $_smarty_tpl->tpl_vars['m']->value['idregistro'];?>
' data-i='1'>Añadir</a> &nbsp; | &nbsp; <a class="so input_button ibr" data-o='<?php echo $_smarty_tpl->tpl_vars['m']->value['idregistro'];?>
' data-i='2'>Rechazar</a></div>
</div></div>
<?php } ?><?php } else { ?><div id="error_flat" class="blue_flat">No hay solicitudes aún.</div><?php }?>
</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['wuser']->value->uid) {?><div class="box">
<div class="t">Agrega miembros</div>
<div>
<input type="text" style="margin: 0 5px 0 0;width: 79%;" class="addusgr" placeholder="Escribe el nombre del usuario"><input type="button" class="bg_green_3d btn color_white" value="Invitar">
</div>
</div><?php }?>

<div class="box">
<div class="t">Ultimos miembros
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['solit']) {?>
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['soli']['estado']==1) {?>
<a class="input_button btn floatR folg" data-o="2">Abandonar</a><?php } else { ?><a class="input_button ibg btn floatR folg" data-o="2" title="Haz click y saldras del grupo">Solicitud enviada</a><?php }?>
<?php } else { ?><a class="input_button ibg btn floatR folg" data-o="1">Unirme</a><?php }?>
</div>
<div><?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['members']) {?>
<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsGrupo']->value['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
<div class="list hidden"><div class="img floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/60/60/?file=<?php echo $_smarty_tpl->tpl_vars['m']->value['w_avatar'];?>
"></div>
<div class="text floatL"><div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
/">@<?php echo $_smarty_tpl->tpl_vars['m']->value['usuario_nombre'];?>
</a></div><div class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['m']->value['fecha_registro']);?>
</div></div></div>
<?php } ?><?php } else { ?><div id="error_flat" class="blue_flat">No hay miembros aún.</div><?php }?>
</div>
</div>

<div class="box">
<div class="t">Grupos relacionados</div>
<div>
<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relacgrups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value) {
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
<div class="list hidden"><div class="img floatL"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['g']->value['wdefined'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['g']->value['avatar'];?>
"></a></div>
<div class="text floatL"><div><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/grupos/<?php echo $_smarty_tpl->tpl_vars['g']->value['wdefined'];?>
/" title="Ir al grupo"><?php echo $_smarty_tpl->tpl_vars['g']->value['nombre'];?>
</a></div><div class="color_gray size11"><?php echo $_smarty_tpl->tpl_vars['g']->value['miembros'];?>
 <?php if ($_smarty_tpl->tpl_vars['g']->value['miembros']<=1) {?>miembro<?php } else { ?>miembros<?php }?></div></div></div>
<?php } ?>
</div>
</div>

</div>
<?php }?>
</div>

<div class="::sttr" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/gru_prf.css"></div>
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['idadmin1']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/grup_ditG.js"></script><?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/grupad.js"></script>
<script type="text/javascript">
var gloGru = {
iten: <?php echo $_smarty_tpl->tpl_vars['tsGrupo']->value['idgrupo'];?>

}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/pub.css"/>
<?php if ($_smarty_tpl->tpl_vars['tsGrupo']->value['solit']&&$_smarty_tpl->tpl_vars['tsGrupo']->value['soli']['estado']==1) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/pub.js"></script><?php }?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/bwort.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/room.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/room.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/bwts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/pubcontents.css">
</div>
</div>
</div><?php }} ?>
