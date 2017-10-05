<?php /* Smarty version Smarty-3.1.19, created on 2016-12-26 14:59:36
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\codigo_i\repositorio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2855453f4f34c4b41-21094267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53c8e58a1c35510b6303bec67423e464ab74c0c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\codigo_i\\repositorio.tpl',
      1 => 1415476658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2855453f4f34c4b41-21094267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5453f4f35f5e17_69341051',
  'variables' => 
  array (
    'tsICode' => 0,
    'codepage' => 0,
    'tsArchivesCode' => 0,
    'a' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5453f4f35f5e17_69341051')) {function content_5453f4f35f5e17_69341051($_smarty_tpl) {?><div class="hrdCnfposnDlCARN SDKF_skek">
<div class="rspos_headr">
<div class="h1_Hdr_Onchange"><h2><?php echo $_smarty_tpl->tpl_vars['tsICode']->value['uc_name'];?>
</h2></div>
<div class="rspn_Hdr_OnChoge"><div class="lLii"><a onclick="cdg.arch.add('<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
');" class="bg_green_3d btn color_white">¡SUBIR ARCHIVO!</a></div>
</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['tsArchivesCode']->value) {?>
<table width="97%" cellpadding="0" cellspacing="0" border="0" class="table" style="margin-bottom: 11px;">
<thead>
<th>SL</th>
<th>Nombre</th>
<th>Tamaño</th>
<th>Tipo de archivo</th>
<th>Ultima edición</th>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsArchivesCode']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
<tr>
<td><i class="icons i32 qtip" title="Opciones..." onclick="mydialog.alert('Edicición De archivo #<?php echo $_smarty_tpl->tpl_vars['a']->value['uc_a_ident'];?>
', '<a href='#'>Editar</a><br /><a href='#'>Borrar</a>');"></i></td>
<td><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/int/codigo/p/archivo-<?php echo $_smarty_tpl->tpl_vars['a']->value['uc_g_ident'];?>
.cw"><?php echo $_smarty_tpl->tpl_vars['a']->value['uc_a_name'];?>
</a></td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['uc_a_tamano'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['uc_a_tipo'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['a']->value['uc_a_edicion'];?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
<div id="error_flat">No haz subido ningun archivo aun, <a onclick="cdg.arch.add('<?php echo $_smarty_tpl->tpl_vars['codepage']->value;?>
');">¡Sube un ahora!</a></div>
<?php }?>
<div class="::stylesheets::stolesheen" role="sttr">
<div><div></div><div><div><div><div><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/rpositrostyl.css"></div></div></div><div></div></div></div>
</div>
</div><?php }} ?>
