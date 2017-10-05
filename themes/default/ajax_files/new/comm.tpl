1:{foreach from=$comm item=c}
<div class="hidden cO">
<div class="floatL HdR"><img src="{$tsConfig.url}/thumb/img/62/62/?file={$c.w_avatar}"></div>
<div class="floatL CoNt">
<div class="UsR">{if $c.name_original && $c.ap_original}{$c.name_original} {$c.ap_original}{else}@{$c.usuario_nombre}{/if} <div class="size11 color_gray">{$c.hace|hace}</div></div> 
<div class="TxR">
 <span>{$c.text}</span>
</div>
</div>
<div class="floatL LikBtn">
<a class="floatL likCOm" data-curl="pos" data-obj='{$c.id}'><span>{$c.likes}</span><img src="{$tsConfig.url}/images/icons/bw/like.png"></a>
<a class="floatL likCOm" data-curl="neg" data-obj='{$c.id}'><span>{$c.dislikes}</span><img src="{$tsConfig.url}/images/icons/bw/dislike.png"></a>
</div>
</div>
{/foreach}
<di role="::sttr">
<di>
<script type="text/javascript" src="{$tsConfig.url}/js/modo/not_cmActs.js"></script>
</di>
</di>