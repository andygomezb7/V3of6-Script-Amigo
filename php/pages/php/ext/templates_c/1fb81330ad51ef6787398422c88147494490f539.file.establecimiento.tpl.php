<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 16:50:46
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\aula_i\establecimiento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2055054592ec6989689-97052420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fb81330ad51ef6787398422c88147494490f539' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\aula_i\\establecimiento.tpl',
      1 => 1415754566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2055054592ec6989689-97052420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54592ec6baeb93_58131162',
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsInfo' => 0,
    'tipo' => 0,
    'ko' => 0,
    'wuser' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54592ec6baeb93_58131162')) {function content_54592ec6baeb93_58131162($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
if (!is_callable('smarty_modifier_pais')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.pais.php';
?><div class="header hidden" style="display: block;">
    <div class="content hidden" style="background: url(<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/968/287/?file=<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_portad']==2) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['user']['p_cabecera'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/port2.jpg<?php }?>) center;">
      <img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/thumb/img/120/120/?file=<?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_img']==2) {?><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['user']['w_avatar'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/avatar/group2.png<?php }?>" class="floatL">
      <div class="info floatL">
       <div class="title"><?php echo $_smarty_tpl->tpl_vars['tipo']->value['brev'];?>
<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_name'];?>

        <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_verifi']=='Verifi_Ok') {?><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/images/icons/truef.png" class="otip" title="Establecimiento verificado"><?php }?>
       </div>
       <div class="descd"><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_mdescription'];?>
</div>
      </div>
  <div class="floatR" style="margin: 7px 7px 0 0;">
  <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['miembro']>=1) {?>
  <a class="input_button hidden">
  <?php } else { ?><a class="adfoul input_button hidden" data-do="<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_id'];?>
" data-ko="4"><?php }?>
  <div class="load floatL dsnone"></div>
  <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['miembro']>=1) {?><div class="adfo1 floatL" style="display: block;">Soy miembro</div>
  <?php } else { ?><div class="adfo1 floatL" style="display: block;">Unirme</div><?php }?>
  </a>
  </div>
    </div>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/css/modo/profile_aula.css">
  </div>

  <div class="content_pa hidden">
   <div class="lcont floatL">
   
      <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">pin</div> &nbsp; Dirección</div>
   <div class="gcontent">
    <?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_location'];?>

   </div>
   </div>

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">sns</div> &nbsp; Actividad</div>
   <div class="gcontent">
    <ol>
      <div class="cono">
        <div class="cono_title">Miembros</div>
    <?php  $_smarty_tpl->tpl_vars['ko'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ko']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsInfo']->value['actividus']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ko']->key => $_smarty_tpl->tpl_vars['ko']->value) {
$_smarty_tpl->tpl_vars['ko']->_loop = true;
?>
    <li><div class="hidden"><div class="floatL"><img src="<?php echo $_smarty_tpl->tpl_vars['ko']->value['w_avatar'];?>
" style="width:32px;height:32px;"/></div><div class="floatL" style="margin: 0 0 0 4px;"><div>@<?php echo $_smarty_tpl->tpl_vars['ko']->value['usuario_nombre'];?>
</div><div class="size11 color_gray">Se unio <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['ko']->value['aul_mem_hace']);?>
</div></div></div></li>
    <?php } ?>
  </div>
    </ol>
   </div>
   </div>
   </div>
   
   <div class="rcont floatL">

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">info</div> &nbsp; Información General</div>
   <div class="gcontent">
    <div class="g"><b>Registrado</b> <?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['tsInfo']->value['aul_hace']);?>
</div>
    <div class="g"><b>Registrado por</b> <a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['user']['usuario_nombre'];?>
">@<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['user']['usuario_nombre'];?>
</a></div>
   </div>
   </div>

    <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_user_admin']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?>
    <div class="gcont">
    <div class="gtitle"><div class="lsf floatL">info</div> &nbsp; Solicitudes</div>
    <div class="gcontent solicit_class">
      <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['solicit']) {?>
    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsInfo']->value['solicit']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
" data-y="2"><i class="lsf">check</i></a>
<a class="qtip" title="Rechazar" data-res="2" data-o="<?php echo $_smarty_tpl->tpl_vars['c']->value['aul_mem_id'];?>
" data-y="2"><i class="lsf">minus</i></a></div>
</div>
</li>
    <?php } ?>
    <?php } else { ?><div id="error_flat">No hay solicitudes aún.</div><?php }?>
    </div>
    </div>
   <?php }?>

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">info</div> &nbsp; Información Personal</div>
   <div class="gcontent">
    <div class="g"><b>Fundaci&oacute;n</b> <span><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_nac_dia'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_nac_mes'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_nac_anio'];?>
</span></div>
    <div class="g"><b>Sexo</b> <?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['user']['user_sexo']==0) {?>Hombre<?php } else { ?>Mujer<?php }?></div>
    <div class="g"><b>Pais</b> <?php echo smarty_modifier_pais($_smarty_tpl->tpl_vars['tsInfo']->value['aul_pais']);?>
</div>
   </div>
   </div>

   <div class="gcont">
   <div class="gtitle"><div class="lsf floatL">alignadjust</div> &nbsp; Descripción personal</div>
   <div class="gcontent">
    <div class="g"><?php echo $_smarty_tpl->tpl_vars['tsInfo']->value['aul_description'];?>
</div>
   </div>
   </div>

<div class="::stylettr" role="sttr">
<div><?php if ($_smarty_tpl->tpl_vars['tsInfo']->value['aul_user_admin']==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?>
<style type="text/css">
.list_acep a{display: inline-block;margin: 0 !important;margin-left: -1px !important;border: 1px solid;border-color: #cdced0 #c5c6c8 #b6b7b9;-webkit-border-radius: 2px;-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0);-webkit-box-sizing: content-box;-webkit-font-smoothing: antialiased;font-size: 14px;position: relative;vertical-align: middle;text-decoration: none;white-space: nowrap;padding: 2px 8px;text-align: -webkit-center;}
.cono .cono_title{display: inline-block;margin: 1px 4px;border-bottom: 1px solid #DDDDDD;width: 100%;padding: 0 0 6px 0;font-weight: bold;color: #7A7A7A;text-shadow: 2px 2px 0px #DDDDDD;font-size: 15px;}
.cono li{padding: 5px 0;border-bottom: 1px solid #DDDDDD;}
</style>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/aul_adclss.js"></script><?php }?></div>
</div>

   </div>
  </div><?php }} ?>
