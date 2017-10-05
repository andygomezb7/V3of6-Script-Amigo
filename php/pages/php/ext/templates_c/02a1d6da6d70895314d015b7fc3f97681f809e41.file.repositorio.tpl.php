<?php /* Smarty version Smarty-3.1.19, created on 2017-03-08 00:22:34
         compiled from "/home/babanta/wortit.net/themes/default/modulos/codigo_i/repositorio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134506639658bfa32a2ea252-20576404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a1d6da6d70895314d015b7fc3f97681f809e41' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/modulos/codigo_i/repositorio.tpl',
      1 => 1415473058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134506639658bfa32a2ea252-20576404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsICode' => 0,
    'codepage' => 0,
    'tsArchivesCode' => 0,
    'a' => 0,
    'tsConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58bfa32a3fb3e9_78920865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfa32a3fb3e9_78920865')) {function content_58bfa32a3fb3e9_78920865($_smarty_tpl) {?><div class="hrdCnfposnDlCARN SDKF_skek">
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
