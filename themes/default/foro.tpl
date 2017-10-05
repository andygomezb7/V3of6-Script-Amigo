{include file='includes/main_header.tpl'}
	<script type="text/javascript">
    // {literal}
    var global_com = {
    // {/literal}
        comid:'{$tsCom.c_id}',
        temaid:'{$tsTema.t_id}',
    // {literal}
    };
    // {/literal}
    </script>		 
	<!--- <body style="{if $tsCom.c_id}background-color: {$tsCom.c_back_color};{else}background-color: #525252;{/if}background-repeat: {if $tsCom.c_back_repeat}repeat{else}no-repeat{/if};"> ------>
    {if $tsTema.t_estado == 1}
    <div class="com_bigmsj_red">Este tema est&aacute; eliminado</div>
    {/if}
    
    {if $tsAction == 'newhome'}
       <!------ <div class="com_left"> {include file='comunidades/c.inicio_left.tpl'} </div> <div class="com_right">          {include file='comunidades/c.inicio_center.tpl'} </div> ------>
    {include file='comunidades/c.home.tpl'}
    {elseif $tsAction == '' || $tsAction == 'home'}
    {include file='comunidades/c.inicio_left.tpl'}
    {include file='comunidades/c.inicio_center.tpl'}
    {include file='comunidades/c.home_right.tpl'}
    {elseif $tsAction == 'crear' || $tsAction == 'editar'}  
{if $_SESSION}	
		<form action="" method="post" id="add_new_com" enctype="multipart/form-data">
            <div class="com_left">
            	{include file='comunidades/c.crear_left.tpl'}
            </div>
            <div class="com_right">
            	{include file='comunidades/c.crear_right.tpl'}
            </div>
        </form>
		{else}
		{include file='t.session.tpl'}
		{/if}
    {elseif $tsAction == 'agregar' || $tsAction == 'editar-tema'}
	{if $_SESSION}
    	{include file='comunidades/c.agregar_tema.tpl'}
		{else}
		{include file='t.session.tpl'}
		{/if}
    {elseif $tsAction == 'tema'}
    	<div class="com_left" style="float: right !important;border-left: 1px solid #CCCCCC;">
            <div style="display:none;">{include file='comunidades/c.com_info.tpl'}</div>
            {include file='comunidades/c.tema_cuerpo.tpl'}
            {include file='comunidades/c.tema_comentarios.tpl'}
        </div>
        <div class="com_right" style="float: right !important;padding: 3px;margin-right: 21px;">
        	{include file='comunidades/c.tema_autor.tpl'}
        </div>
    {elseif $tsAction == 'mis-foros'}
    	<div class="com_left">
            {include file='comunidades/c.mis-comunidades_left.tpl'}
        </div>
        <div class="com_right">
        </div>
    {elseif $tsAction == 'miembros'}
    	<div class="com_left">
            {include file='comunidades/c.miembros_left.tpl'}
        </div>
        <div class="com_right">
        	{include file='comunidades/c.miembros_right.tpl'}
        </div>
    {elseif $tsAction == 'dir'}
    	<div class="com_left">
	    	{include file='comunidades/c.directorio_left.tpl'}
        </div>
        <div class="com_right">
	    	{include file='comunidades/c.directorio_right.tpl'}
        </div>
    {elseif $tsAction == 'mod-history'}
	    {include file='comunidades/c.historial.tpl'}
    {elseif $tsAction == 'com-mod-history'}
	    {include file='comunidades/c.com_historial.tpl'}
    {elseif $tsAction == 'buscar'}
        <div class="com_left">
            {include file='comunidades/c.buscar_left.tpl'}
        </div>
        <div class="com_right">
            {include file='comunidades/c.buscar_right.tpl'}
        </div>
	{elseif $tsAction == 'favoritos'}
    	{if $tsFavoritos.data}
        <div class="com_left">
            {include file='comunidades/c.favoritos_left.tpl'}
        </div>
        <div class="com_right">
            {include file='comunidades/c.favoritos_right.tpl'}
        </div>
        {else}
        <div class="com_bigmsj_blue">No has agregado temas a tus favoritos a&uacute;n</div>
        <br>
        {/if}
    {elseif $tsAction == 'borradores'}
    	{if $tsBorradores.data}
        <div class="com_left">
            {include file='comunidades/c.borradores_left.tpl'}
        </div>
        <div class="com_right">
            {include file='comunidades/c.borradores_right.tpl'}
        </div>
        {else}
        <div class="com_bigmsj_blue">No tienes ning&uacute;n borrador a&uacute;n</div>
        <br>
        {/if}
    {else}
        <div class="com_left">
            {include file='comunidades/c.com_info.tpl'}
            {include file='comunidades/c.com_temas.tpl'}
        </div>
        <div class="com_right">
        	{include file='comunidades/c.com_right.tpl'}
        </div>
    {/if}

	<div style="width: 72%; float: right;" id="DNFakdqwok">
<script>
{literal}
(adsbygoogle = window.adsbygoogle || []).push({});
{/literal}
</script>
	</div>
{include file='includes/main_footer.tpl'}