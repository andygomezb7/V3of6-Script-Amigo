<?php /* Smarty version Smarty-3.1.19, created on 2014-12-10 21:05:53
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\aula_i\home_logged.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304025457d84e895445-90129840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c80768e27575492144e9297baf0a2babc515a10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\aula_i\\home_logged.tpl',
      1 => 1418266313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304025457d84e895445-90129840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5457d84e90f569_79322035',
  'variables' => 
  array (
    'aula' => 0,
    'u' => 0,
    'ultVisit' => 0,
    's' => 0,
    'tsConfig' => 0,
    'memin' => 0,
    'c' => 0,
    'clsesHm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5457d84e90f569_79322035')) {function content_5457d84e90f569_79322035($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="aul_home_l">
<div class="aul_headr">
<a class="vctip floatL" title="Mi Foto de perfil"><img style="width:62px;height:62px;" src="<?php echo $_smarty_tpl->tpl_vars['aula']->value['member']['img'];?>
"></a>
<div class="aul_info floatL"><span class="floatL"><?php echo $_smarty_tpl->tpl_vars['u']->value['name'];?>
</span> <span class="floatL" style="margin: 3px 4px 0px 7px;"><i class="spe"></i></span> <span class="floatL"><?php echo $_smarty_tpl->tpl_vars['aula']->value['member']['tipo'];?>
</span> <div class="floatR"><a class="btn_green color_white btn adDclS ssLR">Crear clase</a> <?php if ($_smarty_tpl->tpl_vars['aula']->value['member']['aul_mem_type']==2) {?><a class="btn_green color_white btn adDsTlbcmt">Registrar establecimiento</a><?php }?> </div></div>
</div>
<div class="aul_con hidden">

<div class="conte_au">
<div class="ttl_au">Ultimas visitas <div class="floatR"><?php echo $_smarty_tpl->tpl_vars['ultVisit']->value['num'];?>
</div></div>
<div class="cnt_au">
<ol class="h">
<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ultVisit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['s']->value['type']==49) {?>
<li title="El inicio de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Aula" alt="El inicio de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Aula"><span>Inicio &nbsp;</span> <span class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['s']->value['v_hace']);?>
</span></li>
<?php } elseif ($_smarty_tpl->tpl_vars['s']->value['type']=='51') {?>
<?php if ($_smarty_tpl->tpl_vars['s']->value['u_v']==$_smarty_tpl->tpl_vars['u']->value['usuario_id']) {?>
<li title="Tu perfil en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Aula" alt="Tu perfil en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Aula"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/60/60/?file=<?php echo $_smarty_tpl->tpl_vars['s']->value['avt'];?>
" class="width16 floatL"/> <span>&nbsp; Tu Perfil &nbsp;</span> <span class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['s']->value['v_hace']);?>
</span></li>
<?php } else { ?>
<li title="Su perfil en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Aula" alt="Tu perfil en <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 Aula"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/60/60/?file=<?php echo $_smarty_tpl->tpl_vars['s']->value['avt'];?>
" class="width16 floatL"/> &nbsp; <span>Perfil de <?php echo $_smarty_tpl->tpl_vars['s']->value['user'];?>
 &nbsp;</span> <span class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['s']->value['v_hace']);?>
</span></li>
<?php }?>
<?php }?>
<?php } ?>
</ol>
	</div>
</div>

<div class="conte_au" style="width: 75%;">
<div class="ttl_au">Eres miembro en:</div>
<div class="cnt_au">
<?php if ($_smarty_tpl->tpl_vars['memin']->value) {?>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memin']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<li class="clearfix" style="margin: 5px 0px;">
<div class="floatL"><img src="<?php if ($_smarty_tpl->tpl_vars['c']->value['aul_img']==2) {?><?php echo $_smarty_tpl->tpl_vars['c']->value['user']['w_avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group.png<?php }?>" style="width:32px;height:32px;"/></div>
<div class="floatL" style="margin: 0 0 0 4px;">
<h1><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/aula/<?php echo $_smarty_tpl->tpl_vars['c']->value['aul_key'];?>
/"><?php echo $_smarty_tpl->tpl_vars['c']->value['aul_name'];?>
</a></h1>
<span class="color_gray color_white">Creada <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['c']->value['aul_hace']);?>
 | Registrado por @<?php echo $_smarty_tpl->tpl_vars['c']->value['user']['usuario_nombre'];?>
</span></div>
</li>
<?php } ?>
<?php } else { ?>
<div id="error_flat">No eres miembro aun en ningun establecimiento o clase.</div>
<?php }?>
</div>
</div>

<div class="conte_au" style="width: 75%;">
<div class="ttl_au">Tus clases</div>
<div class="cnt_au">
<?php if ($_smarty_tpl->tpl_vars['clsesHm']->value) {?>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clsesHm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<li class="clearfix" style="margin: 5px 0px;">
<div class="floatL"><img src="<?php if ($_smarty_tpl->tpl_vars['c']->value['aul_kind_img']==2) {?><?php echo $_smarty_tpl->tpl_vars['c']->value['user']['w_avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group.png<?php }?>" style="width:32px;height:32px;"/></div>
<div class="floatL" style="margin: 0 0 0 4px;">
<h1><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/aula/<?php echo $_smarty_tpl->tpl_vars['c']->value['aul_kind_key'];?>
.0c"><?php echo $_smarty_tpl->tpl_vars['c']->value['aul_kind_name'];?>
</a></h1>
<span class="color_gray color_white">Creada <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['c']->value['aul_kind_hace']);?>
 | Registrada por @<?php echo $_smarty_tpl->tpl_vars['c']->value['user']['usuario_nombre'];?>
</span></div>
</li>
<?php } ?>
<?php } else { ?>
<div id="error_flat">No eres miembro aun en ningun establecimiento o clase.</div>
<?php }?>
</div>
</div>

</div>
<div class="::role=stylesheets::" role="sttr">
<div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/aula_member.css">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/ttr/aula_h.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/aulAdcLs.js"></script>
<?php if ($_smarty_tpl->tpl_vars['aula']->value['member']['aul_mem_type']==2) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/AdDsTblCmnt.js"></script><?php }?>
</div>
</div>
</div><?php }} ?>
