<?php /* Smarty version Smarty-3.1.19, created on 2014-11-24 16:31:31
         compiled from "C:\xampp\htdocs\w\themes\default\modulos\admin_i\modactividad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250365473aff1d1cef8-33313741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '239b2746a19604c868b8d156e44c8a8a2e7ed57f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\w\\themes\\default\\modulos\\admin_i\\modactividad.tpl',
      1 => 1416868288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250365473aff1d1cef8-33313741',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5473aff1e11133_32727634',
  'variables' => 
  array (
    'tsConfig' => 0,
    'act' => 0,
    'ad' => 0,
    'id' => 0,
    'ac' => 0,
    'tsUserID' => 0,
    'wuser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5473aff1e11133_32727634')) {function content_5473aff1e11133_32727634($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include 'C:\\xampp\\htdocs\\w\\php\\libs\\smarty\\plugins\\modifier.hace.php';
?><h2 class="title">Actividad de los moderadores</h2>
<p>En esta parte de la administración de <?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['name'];?>
 puedes administrar los reportes que se hacen en la parte inferior de la pagina.</p>
<br><br>
        <?php if ($_smarty_tpl->tpl_vars['act']->value['total']>0) {?>
        <div id="last-activity" class="last-activity">
            <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['act']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['ad']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['ad']->value['data']) {?>
            <div id="last-activity-date-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="date-sep" active="true">
                <h3><?php echo $_smarty_tpl->tpl_vars['ad']->value['title'];?>
</h3>
                <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
                <div class="sep">
                    <div class="ac_cont">
                        <?php if ($_smarty_tpl->tpl_vars['ac']->value['style']!='') {?><span class="monac_icons ma_<?php echo $_smarty_tpl->tpl_vars['ac']->value['style'];?>
"></span><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['ac']->value['ltext'];?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['tsUserID']->value==$_smarty_tpl->tpl_vars['wuser']->value->uid) {?><span class="remove dsnone"><a onclick="actividad.borrar(<?php echo $_smarty_tpl->tpl_vars['ac']->value['id'];?>
, this); return false;">x</a></span><?php }?>
                    </div>
                    <span class="time"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['ac']->value['date']);?>
</span>
                </div>
                <?php } ?>
            </div>
            <?php }?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['act']->value['total']>0&&$_smarty_tpl->tpl_vars['act']->value['total']>=25) {?>
            <h3 id="last-activity-view-more">
                <a onclick="actividad.cargar(<?php echo $_smarty_tpl->tpl_vars['tsUserID']->value;?>
,'more', 0); return false;">Ver m&aacute;s actividad</a>
            </h3>
            <?php }?>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/act_prf.js"></script>
            <div id="total_acts" val="<?php echo $_smarty_tpl->tpl_vars['act']->value['total'];?>
"></div>
        </div>
        <?php } else { ?>
        <div class="emptyData">Este usuario no tiene actividad.</div>
        <?php }?>
        <div class="::sttr" role="sttr">
        	<div>
<style type="text/css">
#last-activity{} #perfil_actividad .title-w{margin: 5px 0 1px 16px;} #last-activity .date-sep{} #last-activity .date-sep h3{background: none repeat scroll 0 0 #EEEEEE;border-bottom: 1px solid #CCCCCC;color: #FF6600;font-size: 13px;font-weight: bold;margin: 0;padding: 8px;} #last-activity .date-sep .sep{background: none repeat scroll 0 0 #FFFFFF !important;border-bottom: 1px dotted #CCCCCC;color: #333333;font-size: 12px;padding: 8px;position: relative;} #last-activity .date-sep .sep .ac_cont{overflow: hidden;height: 16px;width: 585px;} #last-activity .date-sep .sep .time{background: none repeat scroll 0 0 #FFFFFF;color: #999999;display: block;font-size: 11px;padding: 5px 5px 5px 10px;position: absolute;right: 0;top: 3px;}
</style>
        	</div>
        </div><?php }} ?>
