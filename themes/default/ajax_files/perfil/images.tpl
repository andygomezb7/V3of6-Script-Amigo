<style type="text/css">
{literal}
.juego{
float: left;
margin: 5px;
width: 146px;
height: 146px;
overflow: hidden;
position: relative;
border-radius: 5px;
}
.juego a #ptitle{
background: rgba(0, 0, 0, 0.39);
text-align: center;
display: block;
width: 146px;
text-shadow: black 0 1px 0;
top: -28px;
color: white;
position: absolute;
z-index: 3;
padding: 5px 3px;
font-size: 10px;
font-family: 'Asap', sans-serif;
opacity: 0;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
}
.juego:hover #ptitle {
top: 0;
opacity: 0.9;
}
.juego a #pimage{
background-size: 146px 146px;
background-repeat: no-repeat;
width: 146px;
height: 146px;
border-radius: 5px;
z-index: 2;
position: relative;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
box-shadow: inset 0 0 0 1px #000,inset 0 -1px 0 rgba(0,0,0,0.2),inset 0 2px 0 rgba(255,255,255,0.2),inset 0 0 0 2px rgba(255,255,255,0.05),0 1px 0 rgba(0,0,0,0.15);
-moz-box-shadow: inset 0 0 0 1px #000,inset 0 -1px 0 rgba(0,0,0,0.2),inset 0 2px 0 rgba(255,255,255,0.2),inset 0 0 0 2px rgba(255,255,255,0.05),0 1px 0 rgba(0,0,0,0.15);
-webkit-box-shadow: inset 0 0 0 1px #000,inset 0 -1px 0 rgba(0,0,0,0.2),inset 0 2px 0 rgba(255,255,255,0.2),inset 0 0 0 2px rgba(255,255,255,0.05),0 1px 0 rgba(0,0,0,0.15);
}
.juego a #play{
background: rgba(0, 0, 0, 0.39);
text-align: center;
display: block;
text-shadow: black 0 1px 0;
bottom: 0px;
color: white;
position: absolute;
z-index: 3;
padding: 5px 3px;
font-size: 10px;
font-family: 'Asap', sans-serif;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
}
.juego a #ploader{
z-index: 1;
left: 0;
margin: auto;
top: 0;
bottom: 0;
right: 0;
display: block;
position: absolute;
}
#avtimages{
overflow: hidden;
border: 1px solid #d8d8d8;
border-radius: 3px;
background: #fff;
padding: 20px 20px;
display: inline-block;
width: 92%;
margin: 9px 0px 0px 0px;
}
{/literal}
</style>

<div id="avtimages">
{foreach from=$st item=m}
<div class="juego">
<a onclick="mydialog.alert('{$m.up_vname}', '<center><img src=\'{$tsConfig.url}/files/arc/co/{$m.up_code}.{$m.up_ftype}\' style=\'max-width: 700px;max-height: 500px;\'/></center>');" target="_blank">
<div id="ptitle">Foto {$m.up_ftype}</div>
<div id="play">{$m.up_date|hace}</div>
<img id="ploader" src="http://i.imgur.com/jeZo4Pm.gif">
<div id="pimage" style="background-image: url('{$tsConfig.url}/thumb/img/146/146/?file={$tsConfig.url}/files/arc/co/{$m.up_code}.{$m.up_ftype}');"></div>
</a>
</div>
{/foreach}
</div>