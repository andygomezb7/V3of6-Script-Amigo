<?php /* Smarty version Smarty-3.1.19, created on 2014-12-11 18:33:51
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\aula_i\class.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11285545998aa319756-18184355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39f10b005ccd84048d73098712b67b0aa7afc8ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\aula_i\\class.tpl',
      1 => 1418344420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11285545998aa319756-18184355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545998aa40d991_68209261',
  'variables' => 
  array (
    'tsInfo' => 0,
    'miembro' => 0,
    'iseXcht' => 0,
    'tsConfig' => 0,
    'datofedkkfto' => 0,
    'IsaDM' => 0,
    'solicit' => 0,
    'c' => 0,
    'memebersultclas' => 0,
    'aui' => 0,
    'au' => 0,
    'visitclassudw' => 0,
    'wuser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545998aa40d991_68209261')) {function content_545998aa40d991_68209261($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><div class="aul_cls_hrd">
<div class="aul_cls_cnt">
<div class="aul_cls_ttl"><b>Clase</b> <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_kind_name'];?>

  <div class="floatR" style="margin: -7px -6px 0 0;">
  <?php if ($_smarty_tpl->tpl_vars['miembro']->value>=1) {?>
  <a class="input_button hidden">
  <?php } else { ?>
  <a class="adfoul input_button hidden" data-do="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_kin_id'];?>
" data-ko="3">
  <?php }?>
  <div class="load floatL dsnone"></div>
  <?php if ($_smarty_tpl->tpl_vars['miembro']->value>=1) {?><div class="adfo1 floatL" style="display: block;">Soy miembro</div><?php } else { ?><div class="adfo1 floatL" style="display: block;">Unirme</div><?php }?>
  </a>
  </div>
</div>
<div class="aul_cls_cnns">
<div class="aul_cls_hardr">

<div class="aul_co_d" style="width: 73%;">
<div class="aul_co_d_t">Chat</div>
<div class="aul_co_d_c" style="height: 90%;width: 100%;"><?php if ($_smarty_tpl->tpl_vars['iseXcht']->value>=1&&$_smarty_tpl->tpl_vars['iseXcht']->value) {?>
<iframe frameborder="0" seamless="seamless" scrolling="no" width="100%" height="100%" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/chat/ver-<?php echo $_smarty_tpl->tpl_vars['datofedkkfto']->value['u_c_id'];?>
/?dkKlxL=xKoLEk1RL1xE2Fl&dkKlxLH=213px" style="height: 100%;border: 0;"></iframe>
<?php } else { ?><center><a class="btn_green btn color_white gNrChtGO" data-o="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_kin_id'];?>
">Generar chat</a></center><?php }?></div>
</div>

<?php if ($_smarty_tpl->tpl_vars['IsaDM']->value==1) {?>
<div class="aul_co_d" style="width: 23%;margin: 5px 0px 5px 6px;">
<div class="aul_co_d_t">Solicitudes</div>
<div class="aul_co_d_c solicit_class">
	<?php if ($_smarty_tpl->tpl_vars['solicit']->value) {?>
<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['solicit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
<li class="hidden" id="reg_<?php echo $_smarty_tpl->tpl_vars['c']->value['aul_mem_id'];?>
_mem" style="padding: 5px 0px;border-bottom: 1px solid #DDDDDD;">
	<div class="clearfix dsnone" id="error_flat"></div>
<div class="floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['w_avatar'];?>
" style="width:32px;height:32px;"></div>
<div class="floatL" style="display: inline-block;width: 82%;">
<div class="floatL" style="margin: 0px 7px 1px 4px;"><?php echo $_smarty_tpl->tpl_vars['c']->value['usuario_nombre'];?>

<div class="size11 color_gray"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['c']->value['aul_mem_hace']);?>
</div></div>
<div class="list_acep dodpetead floatR">
<a class="qtip" title="Aceptar" data-res="1" data-o="<?php echo $_smarty_tpl->tpl_vars['c']->value['aul_mem_id'];?>
" data-y="1"><i class="lsf">check</i></a>
<a class="qtip" title="Rechazar" data-res="2" data-o="<?php echo $_smarty_tpl->tpl_vars['c']->value['aul_mem_id'];?>
" data-y="1"><i class="lsf">minus</i></a></div>
</div>
</li>
<?php } ?>
<?php } else { ?><div id="error_flat">No hay solicitudes aún.</div><?php }?>
</div>
</div>
<?php } else { ?>
<div class="aul_co_d" style="width: 23%;margin: 5px 0px 5px 6px;">
<div class="aul_co_d_t">Intereses</div>
<div class="aul_co_d_c solicit_class">
<div id="error_flat">Te puede interesar esto.</div>
</div>
</div>
<?php }?>

</div>
<div class="aul_cls_footr">
<div class="aul_co_d" style="width: 76%;margin: 5px 5px 5px 6px;">
<div class="aul_co_d_t">Miembros de la clase</div>
<div class="aul_co_d_c" style="overflow-y:auto;overflow-x:hidden;">
<?php if ($_smarty_tpl->tpl_vars['memebersultclas']->value) {?>
<?php  $_smarty_tpl->tpl_vars['au'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['au']->_loop = false;
 $_smarty_tpl->tpl_vars['aui'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['memebersultclas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['au']->key => $_smarty_tpl->tpl_vars['au']->value) {
$_smarty_tpl->tpl_vars['au']->_loop = true;
 $_smarty_tpl->tpl_vars['aui']->value = $_smarty_tpl->tpl_vars['au']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['aui']->value<12) {?><div class="clearfix hidden">
<div class="floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/64/64/?file=<?php echo $_smarty_tpl->tpl_vars['au']->value['w_avatar'];?>
" style="width: 64px;height: 64px;"></div>
<div class="floatL" style="margin: 0 0 0 8px;">
<div style="margin: 4px 0 0 0;"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['au']->value['usuario_nombre'];?>
/" <?php if ($_smarty_tpl->tpl_vars['au']->value['usuario_id']==$_smarty_tpl->tpl_vars['tsInfo']->value['aul_kind_user']) {?>title="Creador de la clase"<?php }?>><b style="font-size: 16px;<?php if ($_smarty_tpl->tpl_vars['au']->value['usuario_id']==$_smarty_tpl->tpl_vars['tsInfo']->value['aul_kind_user']) {?>color:red;<?php }?>">@<?php echo $_smarty_tpl->tpl_vars['au']->value['usuario_nombre'];?>
</b></a></div>
<div class="color_gray size11"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['au']->value['aul_mem_hace']);?>
</div></div>
</div><?php } else { ?><div style="margin:0 0 0 4px;"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['au']->value['usuario_nombre'];?>
/" class="qtip" title="Se unio: <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['au']->value['aul_mem_hace']);?>
<?php if ($_smarty_tpl->tpl_vars['au']->value['usuario_id']==$_smarty_tpl->tpl_vars['tsInfo']->value['aul_kind_user']) {?> Y es el creador de la clase<?php }?>"><b style="font-size: 16px;<?php if ($_smarty_tpl->tpl_vars['au']->value['usuario_id']==$_smarty_tpl->tpl_vars['tsInfo']->value['aul_kind_user']) {?>color:red;<?php }?>">@<?php echo $_smarty_tpl->tpl_vars['au']->value['usuario_nombre'];?>
</b></a></div><?php }?>
<?php } ?>
<?php } else { ?><div id="error_flat">No hay miembros aún.</div><?php }?>
</div>
</div>

<div class="aul_streaming_prnpl floatL"><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_kind_state']==2) {?><h1 class="live">LIVE</h1><?php } else { ?><h1>NO LIVE</h1><?php }?></div>
</div>
</div>
</div>
<div class="::style::where" role="sttr">
<div>
<?php if ($_smarty_tpl->tpl_vars['IsaDM']->value==1) {?>
<ins></ins>
<?php if ($_smarty_tpl->tpl_vars['iseXcht']->value<=0) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/cht/GnrChtInH.js"></script><?php }?><?php }?>
<?php if ($_smarty_tpl->tpl_vars['visitclassudw']->value<=23) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/ttr/aul_cls_h.js"></script><?php }?>
<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_kind_user']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/aul_adclss.js"></script><?php }?>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/aul_cls_cs.css">
</div>
</div>
</div><?php }} ?>
