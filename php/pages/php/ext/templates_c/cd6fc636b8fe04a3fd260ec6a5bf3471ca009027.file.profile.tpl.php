<?php /* Smarty version Smarty-3.1.19, created on 2014-11-02 21:11:19
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\aula_i\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:308455456f257487ab2-51578282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd6fc636b8fe04a3fd260ec6a5bf3471ca009027' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\aula_i\\profile.tpl',
      1 => 1412122842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308455456f257487ab2-51578282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsInfo' => 0,
    'info' => 0,
    'tipo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5456f2578d24d6_84072055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5456f2578d24d6_84072055')) {function content_5456f2578d24d6_84072055($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
if (!is_callable('smarty_modifier_pais')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.pais.php';
?><div class="header hidden" style="display: block;">
    <div class="content hidden" style="background: url(<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/968/287/?file=<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_portad']==2) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['p_cabecera'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/port2.jpg<?php }?>) center;">
      <img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/120/120/?file=<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_img']==2) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['w_avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group2.png<?php }?>" class="floatL">
      <div class="info floatL">
       <div class="title"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['brev'];?>
<?php if ($_smarty_tpl->tpl_vars['info']->value['name_original']&&$_smarty_tpl->tpl_vars['info']->value['ap_original']) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['name_original'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['ap_original'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['info']->value['usuario_nombre'];?>
<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_verifi']=='Verifi_Ok') {?><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/truef.png" class="otip" title="<?php echo $_smarty_tpl->tpl_vars['tipo']->value['name'];?>
 verificado"><?php }?>
       </div>
       <div class="descd"><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_mdescription'];?>
</div>
      </div>
    </div>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/profile_aula.css">
  </div>

  <div class="content_pa hidden">
   <div class="lcont floatL">
   <div class="gcont">
   <div class="gtitle">Publicaciones</div>
   <div class="gcontent"></div>
   </div>
   </div>
   
   <div class="rcont floatL">

   <div class="gcont">
   <div class="gtitle">Información General</div>
   <div class="gcontent">
    <div class="g"><b>Registrado</b> <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_hace']);?>
</div>
   </div>
   </div>

   <div class="gcont">
   <div class="gtitle">Información Personal</div>
   <div class="gcontent">
    <div class="g"><b>Nacimiento</b> <span><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_nac_dia'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_nac_mes'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_nac_anio'];?>
</span></div>
    <div class="g"><b>Sexo</b> <?php if ($_smarty_tpl->tpl_vars['info']->value['user_sexo']==0) {?>Hombre<?php } else { ?>Mujer<?php }?></div>
    <div class="g"><b>Pais</b> <?php echo smarty_modifier_pais($_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_pais']);?>
</div>
   </div>
   </div>

   <div class="gcont">
   <div class="gtitle">Descripción personal</div>
   <div class="gcontent">
    <div class="g"><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_mem_description'];?>
</div>
   </div>
   </div>

   </div>
  </div><?php }} ?>
