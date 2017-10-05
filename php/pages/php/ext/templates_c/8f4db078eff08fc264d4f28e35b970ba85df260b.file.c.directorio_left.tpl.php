<?php /* Smarty version Smarty-3.1.19, created on 2017-02-11 15:41:38
         compiled from "/home/babanta/wortit.net/themes/default/comunidades/c.directorio_left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1206427836589f8512305425-75651246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f4db078eff08fc264d4f28e35b970ba85df260b' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/comunidades/c.directorio_left.tpl',
      1 => 1393292048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206427836589f8512305425-75651246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsConfig' => 0,
    'tsDir' => 0,
    'd' => 0,
    'm' => 0,
    'i' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589f851252a601_13432146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589f851252a601_13432146')) {function content_589f851252a601_13432146($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_limit')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.limit.php';
?>
<div class="com_loc_global">
	<ul class="clearfix">
    	<li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/">Foros</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/">Directorio</a></li>
        <?php if ($_smarty_tpl->tpl_vars['tsDir']->value['c_seo']) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
/"><?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_pais'];?>
</a></li>
        <li><?php echo $_smarty_tpl->tpl_vars['tsDir']->value['c_nombre'];?>
</li>
        <?php } elseif ($_smarty_tpl->tpl_vars['tsDir']->value['sub']['sid']>0) {?>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_pais'];?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['sub']['c_seo'];?>
"><?php echo $_smarty_tpl->tpl_vars['tsDir']->value['sub']['c_nombre'];?>
</a></li>
        <li><?php echo $_smarty_tpl->tpl_vars['tsDir']->value['sub']['s_nombre'];?>
</li>
        <?php } else { ?>
        <li><?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_pais'];?>
</li>
        <?php }?>
    </ul>
</div>
<div class="com_dir_result clearfix">
	<?php if ($_smarty_tpl->tpl_vars['tsDir']->value['c_seo']) {?>
    	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsDir']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
        <div class="cdr_item" style="height:26px;">
            <i class="com_icon <?php echo $_smarty_tpl->tpl_vars['tsDir']->value['c_seo'];?>
"></i>
            <a class="nombre" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['c_seo'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['s_seo'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['s_nombre'];?>
</a>
            <span><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</span>
        </div>
        <?php } ?>
    <?php } elseif ($_smarty_tpl->tpl_vars['tsDir']->value['sub']['sid']>0) {?>
    	<div id="com_members_result">
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsDir']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
            <div class="cdr_list clearfix">
                <div class="cdrl_avatar floatL"><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['m']->value['c_nombre_corto'];?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/files/uploads/c_<?php echo $_smarty_tpl->tpl_vars['m']->value['c_id'];?>
.jpg" width="75" height="75" /></a></div>
                <ul class="cdrl_info clearfix floatL">
                    <li><h4><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/<?php echo $_smarty_tpl->tpl_vars['m']->value['c_nombre_corto'];?>
/"><?php echo $_smarty_tpl->tpl_vars['m']->value['c_nombre'];?>
</a></h4></li>
                    <li style="width: 530px;"><?php echo smarty_modifier_limit($_smarty_tpl->tpl_vars['m']->value['c_descripcion'],150);?>
</li>
                    <li>Miembros <strong><?php echo $_smarty_tpl->tpl_vars['m']->value['c_miembros'];?>
</strong> - Temas <strong><?php echo $_smarty_tpl->tpl_vars['m']->value['c_temas'];?>
</strong></li>
                </ul>
            </div>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['tsDir']->value['pages']['pages']>1) {?>
            <div style="margin-top: 10px;" class="clearfix">
            	<?php if ($_smarty_tpl->tpl_vars['tsDir']->value['pages']['prev']) {?><a class="floatL" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['sub']['c_seo'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['sub']['s_seo'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['pages']['prev'];?>
">&laquo; Anterior</a><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tsDir']->value['pages']['pages']>1&&$_smarty_tpl->tpl_vars['tsDir']->value['pages']['pages']>$_smarty_tpl->tpl_vars['tsDir']->value['pages']['current']) {?><a class="floatR" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['sub']['c_seo'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['sub']['s_seo'];?>
/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['pages']['next'];?>
">Siguiente &raquo;</a><?php }?>
            </div>
            <?php }?>
        </div>
    <?php } else { ?>
        <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tsDir']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
        <div class="cdr_item">
            <i class="com_icon <?php echo $_smarty_tpl->tpl_vars['d']->value['c_seo'];?>
"></i>
            <a class="nombre" href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['c_seo'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['c_nombre'];?>
</a>
            <span><?php echo $_smarty_tpl->tpl_vars['d']->value['total'];?>
</span>
            <div class="cdr_subs">
                <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['d']->value['sub_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['i']->value>0) {?>, <?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['direccion_url'];?>
/foro/dir/<?php echo $_smarty_tpl->tpl_vars['tsDir']->value['global_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['c_seo'];?>
/<?php echo $_smarty_tpl->tpl_vars['s']->value['s_seo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['s']->value['total'];?>
 Comunidad<?php if ($_smarty_tpl->tpl_vars['s']->value['total']>1) {?>es<?php }?>"><?php echo $_smarty_tpl->tpl_vars['s']->value['s_nombre'];?>
</a>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    <?php }?>
</div><?php }} ?>
