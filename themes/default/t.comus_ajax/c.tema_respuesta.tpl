<div class="com_coment_resp clearfix" id="coment_id_{$newCom.4}">
        	<ul class="ccr_options clearfix">
                <li><a href="#" onclick="com.del_respuesta({$newCom.4});return false;" class="qtip" title="Borrar comentario"><i class="com_icon icon_del"></i></a></li>
            </ul>
            <div class="ctcf_avatar">
                <a href="{$tsConfig.direccion_url}/{$u.usuario_nombre}">
                    <img style="width: 50px; height: 50px;" src="{$u.w_avatar}" />
                </a>
            </div>
            <div class="ctcf_detalles">
                <div class="ctcf_info">@<a href="{$tsConfig.direccion_url}/{$u.usuario_nombre}">{$u.usuario_nombre}</a><span>{$newCom.3|hace}</span></div>
                <div class="ctcf_body">{$newCom.0|nl2br}</div>
            </div>
        </div>
<div id="add_new_com"></div>