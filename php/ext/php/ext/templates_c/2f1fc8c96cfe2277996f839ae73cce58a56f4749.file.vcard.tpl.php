<?php /* Smarty version Smarty-3.1.19, created on 2014-09-15 21:36:23
         compiled from "C:\xampp\htdocs\w\themes\default\ajax_files\live\vcard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71175417afb4ec82e7-41007658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f1fc8c96cfe2277996f839ae73cce58a56f4749' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\ajax_files\\live\\vcard.tpl',
      1 => 1410838503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71175417afb4ec82e7-41007658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5417afb544aa23_29813788',
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsData' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5417afb544aa23_29813788')) {function content_5417afb544aa23_29813788($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_posnum')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.posnum.php';
?><div class="hovercard-inner">
	<div class="wort-info">  
		<div style="z-index: 500;position: absolute;">
		<div style="margin: 8px 0px -24px 62px;z-index: 520;"><a style="color:#FFFFFF;text-shadow: 0 0 3px rgba(0,0,0,0.8);-webkit-text-shadow: 0 0 3px rgba(0,0,0,0.8);-moz-text-shadow: 0 0 3px rgba(0,0,0,0.8);z-index: 520;font-weight: bold;" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/perfil/<?php echo $_smarty_tpl->tpl_vars['tsData']->value['usuario_nombre'];?>
"><?php echo $_smarty_tpl->tpl_vars['tsData']->value['usuario_nombre'];?>
</a>
<?php if ($_smarty_tpl->tpl_vars['tsData']->value['verifi']==1) {?><a class="vctip" title="Página Verificada"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/icons/truef.png" style="width:15px;height:15px;" /></a><?php }?>
		</div>
		<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsData']->value['usuario_nombre'];?>
" class="profile-pic"><img style="padding:1px;margin: 0px 5px -20px 5px;padding:1px!important;border:1px solid rgb(236, 236, 236)!important;" src="<?php echo $_smarty_tpl->tpl_vars['tsData']->value['avatar'];?>
" class="avatar" /></a>
		</div>
		
        <img src="<?php if ($_smarty_tpl->tpl_vars['tsData']->value['p_cabecera']==null) {?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/images/avatar/port.jpg<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsData']->value['p_cabecera'];?>
<?php }?>" style="height: 86px;width: 280px;overflow: hidden;">
		<div class="ifo-date">
        <div style="font-weight: normal;width: 92%;clear: both;padding: 0px 3px 0px 3px;overflow: hidden;">

		<div class="tat">
        <span><img title="" style="margin: 3px 5px 4px 0;" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['default'];?>
/images/flags/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['tsData']->value['pais'], 'UTF-8');?>
.png" class="vctip"/></span><br>
        <strong><?php echo $_smarty_tpl->tpl_vars['tsData']->value['stats']['r_name'];?>
</strong>
        </div>

		<div class="tat">
        <span><?php echo smarty_modifier_posnum($_smarty_tpl->tpl_vars['tsData']->value['stats']['user_posts']);?>
</span><br>
        <strong>Noticias</strong>
        </div>

			<div class="tat" style="width: 85px !important;border: none;">
<span><?php echo smarty_modifier_posnum($_smarty_tpl->tpl_vars['tsData']->value['stats']['user_seguidores']);?>
</span><br>
<strong>Interacciones</strong>
</div>

			</div>
		</div>
	</div>
	<div class="more-more">
		<a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsData']->value['usuario_nombre'];?>
">M&aacute;s Informaci&oacute;n</a>	
	</div>
	<div class="view-x"></div>
</div><?php }} ?>
