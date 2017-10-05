<?php /* Smarty version Smarty-3.1.19, created on 2017-02-05 03:04:08
         compiled from "/home/babanta/wortit.net/themes/default/ajax_files/perfil/actividad.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13453465125896ea880c10f9-97025821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '411c82c7fc7eb436e5391c46f3d547c627c9b761' => 
    array (
      0 => '/home/babanta/wortit.net/themes/default/ajax_files/perfil/actividad.tpl',
      1 => 1416614676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13453465125896ea880c10f9-97025821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tsDo' => 0,
    'tsUsername' => 0,
    'tsActividad' => 0,
    'ad' => 0,
    'id' => 0,
    'ac' => 0,
    'tsUserID' => 0,
    'wuser' => 0,
    'tsConfig' => 0,
    '_SESSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5896ea881a8b28_55080572',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5896ea881a8b28_55080572')) {function content_5896ea881a8b28_55080572($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_hace')) include '/home/babanta/wortit.net/php/libs/smarty/plugins/modifier.hace.php';
?><?php if ($_smarty_tpl->tpl_vars['tsDo']->value=='') {?>
<div id="perfil_actividad" status="activo">
    <div class="widget big-info clearfix">
        <div class="title-w clearfix"><h3>&Uacute;ltima actividad de <?php echo $_smarty_tpl->tpl_vars['tsUsername']->value;?>
</h3></div>
        
        <?php if ($_smarty_tpl->tpl_vars['tsActividad']->value['total']>0) {?>
        <div id="last-activity" class="last-activity">
            <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsActividad']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
            <?php if ($_smarty_tpl->tpl_vars['tsActividad']->value['total']>0&&$_smarty_tpl->tpl_vars['tsActividad']->value['total']>=25) {?>
            <h3 id="last-activity-view-more">
                <a onclick="actividad.cargar(<?php echo $_smarty_tpl->tpl_vars['tsUserID']->value;?>
,'more', 0); return false;">Ver m&aacute;s actividad</a>
            </h3>
            <?php }?>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/act_prf.js"></script>
            <div id="total_acts" val="<?php echo $_smarty_tpl->tpl_vars['tsActividad']->value['total'];?>
"></div>
        </div>
        <?php } else { ?>
        <div class="emptyData">Este usuario no tiene actividad.</div>
        <?php }?>
    </div>
</div>
<?php } else { ?>
            <?php  $_smarty_tpl->tpl_vars['ad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ad']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tsActividad']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ad']->key => $_smarty_tpl->tpl_vars['ad']->value) {
$_smarty_tpl->tpl_vars['ad']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['ad']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['ad']->value['data']) {?>
            <div id="more-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" nid="last-activity-date-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="date-sep" active="false">
                <h3 style="display:none"><?php echo $_smarty_tpl->tpl_vars['ad']->value['title'];?>
</h3>
                <?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
?>
                <div class="sep">
                    <div class="ac_content">
                        <?php if ($_smarty_tpl->tpl_vars['ac']->value['style']!='') {?><span class="monac_icons ma_<?php echo $_smarty_tpl->tpl_vars['ac']->value['style'];?>
"></span><?php }?>
                        <?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['ac']->value['ltext'];?>
</a>
                        <?php if ($_smarty_tpl->tpl_vars['tsUserID']->value==$_smarty_tpl->tpl_vars['_SESSION']->value) {?><span class="remove"><a onclick="actividad.borrar(<?php echo $_smarty_tpl->tpl_vars['ac']->value['id'];?>
, this); return false;">x</a></span><?php }?>
                    </div>
                    <span class="time"><?php echo smarty_modifier_hace($_smarty_tpl->tpl_vars['ac']->value['date']);?>
</span>
                </div>
                <?php } ?>
            </div>
            <?php }?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['tsActividad']->value['total']>0&&$_smarty_tpl->tpl_vars['tsActividad']->value['total']>=25) {?>
            <h3 id="last-activity-view-more">
                <a onclick="actividad.cargar(<?php echo $_smarty_tpl->tpl_vars['tsUserID']->value;?>
,'more', 0); return false;">Ver m&aacute;s actividad</a>
            </h3>
            <?php }?>
            <div id="total_acts" val="<?php echo $_smarty_tpl->tpl_vars['tsActividad']->value['total'];?>
"></div>
            <div id="jsdump">
            <script type="text/javascript">
            // 
            $(function(){
                /*
                    EL SIGUIENTE CODIGO SIRBE PARA NO MOSTRAR LOS SEPARADORES DE FECHA POR SI YA ESTAN,
                    ESTO FUE HECHO ASI PARA EVITAR MAS CONSULTAS AL SERVIDOR... 
                */
                var ac_dates = new Array('today', 'yesterday', 'month', 'old');
                for(var i = 0; i < ac_dates.length; i++){
                    var obj_name = 'last-activity-date-' + ac_dates[i];
                    var obj = $('#' + obj_name);
                    // MORE
                    var m_name = 'more-' + ac_dates[i];
                    var mobj = $('#' + m_name);
                    // ACTIVO
                    var active = obj.attr('active');
                    // VALIDAMOS
                    if(typeof active == 'undefined'){
                        //
                        var new_id = $(mobj).attr('nid');
                        $(mobj).attr('id',new_id);
                        $(mobj).find('h3').show();
                        $(mobj).removeAttr('nid').attr('active','true');
                        
                    } else {
                        $(mobj).find('h3').remove();
                        var html = $(mobj).html();
                        $(obj).append(html)
                        $(mobj).remove();
                    }
                }
                // ME AUTO ELIMINO
                $('#jsdump').remove();
            });
            // 
            </script>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['tsConfig']->value['url'];?>
/js/modo/act_prf.js"></script>
            </div>
<?php }?><?php }} ?>
