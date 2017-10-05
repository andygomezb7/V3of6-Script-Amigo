<div class="com_new_box">
    <div class="com_box_title clearfix"><h2>&Uacute;ltimos miembros</h2></div>
    <div class="clearfix">
        {foreach from=$tsUltimos item=a}
        <a href="{$tsConfig.direccion_url}/{$a.usuario_nombre}" title="Ir al perfil de {$a.usuario_nombre}" alt="Ir al perfil de {$a.usuario_nombre}" class="floatL hovercard" uid="{$a.m_user}" style="margin-right:1px;margin-bottom:1px;"><img src="{$a.w_avatar}" width="35" height="35" /></a>
        {/foreach}
    </div>
</div>