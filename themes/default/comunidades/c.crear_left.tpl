{if $tsDato.c_estado == 1}<div class="com_bigmsj_red">El foro est&aacute; suspendido, para eliminarlo permanentemente ve a la administraci&oacute;n</div>{/if}
<div class="add_com">
    <h2>{if $tsAction == 'editar'}Editar{else}Nuevo{/if} foro</h2>
    <div class="item_form clearfix">
        <label>Nombre</label>
        <input type="text" name="nombre" class="required input_text" onKeyPress="hideError(this);" tabindex="1" value="{$tsDato.c_nombre}" />
    </div>
    <div class="item_form clearfix">
        <label>Nombre corto</label>
        <input type="text" name="ncorto" class="required input_text" tabindex="2" value="{$tsDato.c_nombre_corto}" {if $tsDato.c_nombre_corto}disabled="disabled"{/if} />
        <small class="mg-lt">{if $tsDato.c_nombre_corto}El nombre corto es &uacute;nico y no se puede modificar{else}S&oacute;lo se permiten letras en min&uacute;scula, n&uacute;meros y guiones medios (-)<br />El nombre corto no se podr&aacute; modificar en el fut&uacute;ro.{/if}</small>
    </div>
    <div class="item_form clearfix">
        <label>Categor&iacute;a</label>
        <select name="categoria" id="ShowCats" class="required" onChange="com.subcat()" tabindex="3">
            <option value="0">Selecciona una categor&iacute;a</option>
            {foreach from=$tsCats item=c}
            <option value="{$c.cid}" {if $tsDato.c_categoria == $c.cid}selected="selected"{/if}>{$c.c_nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="item_form clearfix">
        <label>Sub-categor&iacute;a</label>
        <select name="subcategoria" id="ShowSubcats" class="required" tabindex="4" {if $tsAction == 'crear'}disabled="disabled"{/if}>
            <option value="0">Seleccina una subcategor&iacute;a</option>
            {foreach from=$tsSubcats item=s}
            <option value="{$s.sid}" {if $tsDato.c_sub_categoria == $s.sid}selected="selected"{/if}>{$s.s_nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="item_form clearfix">
        <label>Pa&iacute;s</label>
        <select name="pais" class="required" onChange="hideError($(this))" tabindex="5">
            <option value="0">Selecciona un pa&iacute;s</option>
            {foreach from=$tsPaises key=code item=pais}
            <option value="{$code}" {if $tsDato.c_pais == $code}selected="selected"{/if}>{$pais}</option>
            {/foreach}
        </select>
    </div>
    <div class="item_form clearfix">
        <label>Descripci&oacute;n</label>
        <textarea class="required input_text" style="resize: none;" name="descripcion" tabindex="6" datatype="text" dataname="Descripcion">{$tsDato.c_descripcion}</textarea>
    </div>
    <div class="item_form clearfix">
        <div class="floatL">		
            <label>Acceso</label>
            <div class="option clearfix">
                <input name="acceso" type="radio" class="radio" value="1" checked="" tabindex="7" {if $tsDato.c_acceso == 1}checked="checked"{/if}>
                <p class="floatL"><strong>Todos</strong> Todas las personas que visitan {$tsConfig.titulo} podr&aacute;n acceder a tu foro. (Recomendado)</p>
            </div>
            <div class="option mg-lt clearfix">
                <input name="acceso" type="radio" value="2" {if $tsDato.c_acceso == 2}checked="checked"{/if}>
                <p class="floatL"><strong>S&oacute;lo usuarios registrados</strong> El acceso a tu foro estar&aacute; restringida &uacute;nicamente para los usuarios que se han registrado en {$tsconfig.titulo}</p>           
            </div>			
        </div>
    </div>
    <div class="item_form clearfix">
        <div class="floatL">					
            <label>Permisos</label>									
            <div class="option clearfix">
                <input name="permisos" type="radio" value="3" checked="" tabindex="8" {if $tsDato.c_permisos == 3}checked="checked"{/if}>
                <p class="floatL"><strong>Posteador</strong> Los usuarios al ingresar en tu foro podr&aacute;n comentar y crear temas.</p>	
            </div>
            <div class="option mg-lt clearfix">
                <input name="permisos" type="radio" value="2" {if $tsDato.c_permisos == 2}checked="checked"{/if}>
                <p class="floatL"><strong>Comentador</strong> Los usuarios al participar en tu  foro s&oacute;lo podr&aacute;n comentar pero no estar&aacute;n habilitados para crear nuevos temas.</p>	
            </div>
            <div class="option mg-lt clearfix">
                <input name="permisos" type="radio" value="1" {if $tsDato.c_permisos == 1}checked="checked"{/if}>
                <p class="floatL"><strong>Visitante</strong> Los usuarios al participar en tu foro no podr&aacute;n comentar ni tampoco crear temas.</p>
            </div>
        </div>
        <div class="item_form_nota option mg-lt clearfix">
            <strong>Nota:</strong> La opci&oacute;n seleccionada le asignar&aacute; autom&aacute;ticamente el mismo rango a todos los usuarios que ingresan a tu foro, sin embargo, podr&aacute;s posteriormente modificarlo para cada uno de los participantes.
        </div>
    </div>
    {if $tsAction == 'editar' && $tsDato.c_autor != $_SESSION}
    <div class="item_form clearfix">
        <label>Raz&oacute;n</label>
        <input type="text" class="required input_text" name="causa" tabindex="9" />
        <small class="mg-lt">Si has modificado el contenido de esta foro ingresa la raz&oacute;n por la cual lo modificaste.</small>
    </div>
    {/if}
    <div class="item_form clearfix">
        <input type="button" class="input_button" value="{if $tsAction == 'crear'}Crear foro{else}Guardar cambios{/if}" onClick="com.crear_foro()" />
    </div>
</div>