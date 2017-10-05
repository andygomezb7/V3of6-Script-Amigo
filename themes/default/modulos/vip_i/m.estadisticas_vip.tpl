
<div id="est-vip">
<h3>Estad&iacute;sticas Vip</h3>
<ul>
{foreach from=$tsEstvu_p key=i item=v}
<li><br/><span><img style="position:absolute;margin-left:-30px;" src="{$tsConfig.default}/images/static/options/icons/cats/users.png"></img><b>{$v.total}</b> Usuarios Vip</span></li>
{/foreach}
{foreach from=$tsRanvu_p key=i item=r}
<li><br/><span><img style="position:absolute;margin-left:-30px;" src="{$tsConfig.default}/images/static/options/icons/cats/Tecnologia.png"></img><b>{$r.total}</b> Rangos Vip</span></li>
{/foreach}<br/>
{foreach from=$tsEstvp_p key=i item=p}
<li><br/><span><img style="position:absolute;margin-left:-30px;" src="{$tsConfig.default}/images/static/options/icons/cats/note.png"></img><b>{$p.total}</b> Notas Vip</span></li>
{/foreach}
{foreach from=$tsComvp_p key=i item=c}
<li><br/><span style="margin-left:60px;"><img style="position:absolute;margin-left:-30px;" src="{$tsConfig.default}/images/static/options/icons/cats/comments.png"></img><b>{$c.total}</b> Comentarios Vip</span></li>
{/foreach}
</ul>

</div>