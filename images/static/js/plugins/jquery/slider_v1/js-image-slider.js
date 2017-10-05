var sliderOptions=
{
	sliderId: "slider",
	effect: "series1",
	effectRandom: false,
	pauseTime: 2600,
	transitionTime: 500,
	slices: 12,
	boxes: 8,
	hoverPause: 1,
	autoAdvance: true,
	captionOpacity: 0.3,
	captionEffect: "fade",
	thumbnailsWrapperId: "thumbs",
	m: false,
	license: "b6t80"
};

var imageSlider=new mcImgSlider(sliderOptions);

/* Menucool Javascript Image Slider v2013.8.27. Copyright www.menucool.com */
function mcImgSlider(l){for(var Y=function(a){return document.getElementById(a)},e="length",ab="getElementsByTagName",H=function(d){var a=d.childNodes,c=[];if(a)for(var b=0,f=a[e];b<f;b++)a[b].nodeType==1&&c.push(a[b]);return c},f="className",h="getAttribute",i="opacity",lb=function(a,b){return a[ab](b)},Fb=function(a){for(var c,d,b=a[e];b;c=parseInt(Math.random()*b),d=a[--b],a[b]=a[c],a[c]=d);return a},Eb=function(a,c,b){if(a.addEventListener)a.addEventListener(c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},Hb=document,T=window.requestAnimationFrame,db=window.cancelAnimationFrame,kb=["webkit","ms","o"],cb=0;cb<kb[e]&&!T;++cb){T=window[kb[cb]+"RequestAnimationFrame"];db=window[kb[cb]+"CancelAnimationFrame"]}var b="style",y="display",F="visibility",j="width",z="height",X="top",P="background-image",r="undefined",w="marginLeft",v="appendChild",q="parentNode",o="nodeName",Q="innerHTML",W="offsetWidth",C=setTimeout,K=clearTimeout,E="indexOf",N="setAttribute",jb="removeChild",D=function(){this.d=[];this.b=null},hb=function(){var b=50,a=navigator.userAgent,c;if((c=a[E]("MSIE "))!=-1)b=parseInt(a.substring(c+5,a[E](".",c)));if(a[E]("Safari")!=-1&&a[E]("Chrome")==-1)b=300;if(a[E]("Opera")!=-1)b=400;return b},bb=hb()<9,M=function(a,c){if(a){a.o=c;if(bb)a[b].filter="alpha(opacity="+c*100+")";else a[b][i]=c}};D.a={f:function(a){return-Math.cos(a*Math.PI)/2+.5},g:function(a){return a},h:function(b,a){return Math.pow(b,a*2)},j:function(b,a){return 1-Math.pow(1-b,a*2)}};D.prototype={k:{c:l.transitionTime,a:function(){},b:D.a.f,d:1},m:function(h,d,g,c){for(var b=[],j=g-d,k=g>d?1:-1,f=Math.ceil(60*c.c/1e3),a,e=1;e<=f;e++){a=d+c.b(e/f,c.d)*j;if(h!=i)a=Math.round(a);b.push(a)}b.e=0;return b},n:function(){this.b==null&&this.p()},p:function(){this.q();var a=this;this.b=T?T(function(){a.p()}):window.setInterval(function(){a.q()},15)},q:function(){var a=this.d[e];if(a){for(var c=0;c<a;c++)this.o(this.d[c]);while(a--){var b=this.d[a];if(b.d.e==b.d[e]){b.c();this.d.splice(a,1)}}}else{if(T&&db)db(this.b);else window.clearInterval(this.b);this.b=null}},o:function(a){if(a.d.e<a.d[e]){var d=a.b,c=a.d[a.d.e];if(a.b==i){if(bb){d="filter";c="alpha(opacity="+Math.round(c*100)+")"}}else c+="px";a.a[b][d]=c;a.d.e++}},r:function(e,b,d,f,a){a=this.s(this.k,a);var c=this.m(b,d,f,a);this.d.push({a:e,b:b,d:c,c:a.a});this.n()},s:function(c,b){b=b||{};var a,d={};for(a in c)d[a]=typeof b[a]!==r?b[a]:c[a];return d}};var k=new D,ob=function(){k.d=[];K(s);K(ib);s=ib=null},Db=function(b){var a=[],c=b[e];while(c--)a.push(String.fromCharCode(b[c]));return a.join("")},c={a:0,e:"",d:0,c:0,b:0},a,g,u,B,U,O,V,n,p,Z,J,t,G,I,s,ib,S,R,eb,d,L,m=null,Ab=function(){this[N]("data-loaded","t");R[b][y]="none"},Cb=function(){this[N]("data-loaded","t");R[b][y]="none";this[N]("alt","Image path is incorrect")},qb=function(b){if(b=="series1")a.a=[6,8,15,2,5,14,13,3,7,4,14,1,13,15];else if(b=="series2")a.a=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17];else a.a=b.split(/\W+/);a.a.p=l.effectRandom?-1:a.a[e]==1?0:1},fb=function(){a={b:l.pauseTime,c:l.transitionTime,f:l.slices,g:l.boxes,d:l.license,h:l.hoverPause,i:l.autoAdvance,j:l.captionOpacity,k:l.captionEffect=="none"?0:l.captionEffect=="fade"?1:2,l:l.thumbnailsWrapperId,Ob:function(){typeof beforeSlideChange!==r&&beforeSlideChange(arguments)},Oa:function(){typeof afterSlideChange!==r&&afterSlideChange(arguments)}};if(g)a.m=Math.ceil(g.offsetHeight*a.g/g[W]);qb(l.effect);a.n=function(){var b;if(a.a.p==-1)b=a.a[Math.floor(Math.random()*a.a[e])];else{b=a.a[a.a.p];a.a.p++;if(a.a.p>=a.a[e])a.a.p=0}if(b<1||b>17)b=15;return b}},xb=["$1$2$3","$1$2$3","$1$24","$1$23","$1$22"],sb=function(){if(c.b!=2){c.b=1;K(s);s=null}},pb=function(){if(c.b!=2){c.b=0;if(s==null&&!c.c&&a.i)s=C(function(){m.y(m.n(c.a+1),0,1)},a.b/2)}},yb=function(){var a=0,b=0,c;while(a<d.length){c=d[a][f]=="lazyImage"||d[a][h]("data-src")||d[a][f][E](" video")>-1&&typeof McVideo!=r;if(c){b=1;break}++a}return b},x=[],rb=function(b){var a=x[e];if(a)while(a--)x[a][f]=a!=b&&x[a].on==0?"thumb":"thumb thumb-on"},zb=function(a){var b=a[q][h]("data-autovideo")=="true",c=a[h]("data-autovideo")=="true";return b||c},Bb=function(){var g;if(a.l)g=Y(a.l);if(g)for(var h=lb(g,"*"),d=0;d<h[e];d++)h[d][f]=="thumb"&&x.push(h[d]);var b=x[e];if(b){while(b--){x[b].on=0;x[b].i=b;x[b].onclick=function(){m.y(this.i,zb(this))};x[b].onmouseover=function(){this.on=1;this[f]="thumb thumb-on";a.h==2&&sb()};x[b].onmouseout=function(){this.on=0;this[f]=this.i==c.a?"thumb thumb-on":"thumb";a.h==2&&pb()}}rb(0)}return b},mb=function(a,e,g,c,b,d,f){C(function(){if(e&&g==e-1){var f={};f.a=function(){m.o()};for(var h in a)f[h]=a[h]}else f=a;typeof b[j]!==r&&k.r(c,"width",b[j],d[j],a);typeof b[z]!==r&&k.r(c,"height",b[z],d[z],a);k.r(c,i,b[i],d[i],f)},f)},tb=function(a){g=a;this.Id=g.id;this.c()},vb=function(d,c){for(var b=[],a=0;a<d[e];a++)b[b[e]]=String.fromCharCode(d.charCodeAt(a)-(c?c:3));return b.join("")},wb=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/,/^(\w)[^.]*(\w)+$/],A=function(b){var a=document.createElement("div");a[f]=b;return a};tb.prototype={c:function(){u=g[W];B=g.offsetHeight;var l=H(g),n=l[e];if(l[n-1][f]=="loading")return;this.M(a.d);var r=/\/?(SOURCE|EMBED|OBJECT|\/VIDEO|\/AUDIO)/,i,j;d=[];while(n--){i=l[n];j=0;if(i[o]=="BR"||bb&&r.test(i[o]))g[jb](i);else{i[b][y]="none";if(i[o]=="VIDEO"||i[o]=="AUDIO"){i[b].position="absolute";j=A("video");i[q].insertBefore(j,i);j[v](i);j[b][y]="none"}if(i[o]=="A"&&i[f][E]("lazyImage")==-1)if(i[f])i[f]="imgLink "+i[f];else i[f]="imgLink";if(j)d.push(j);else d.push(i);if(i[f][E](" video")!=-1){this.A(i);this.b(i)}}}d.reverse();c.d=d[e];a.m=Math.ceil(B*a.g/u);this.i();var m=this.v();if(d[c.a][o]=="IMG")c.e=d[c.a];else c.e=lb(d[c.a],"img")[0];if(d[c.a][o]=="A"||d[c.a][f]=="video")d[c.a][b][y]="block";g[b][P]='url("'+c.e[h]("src")+'")';U=this.k();var k=c.e[q],p;if(p=k.aP){this.d(k);if(p==1)k.aP=0}else if(a.i&&c.d>1){C(function(){m.e(1)},0);s=C(function(){m.y(m.n(1),0,1)},a.b+a.c)}if(a.h!=0){g.onmouseover=sb;g.onmouseout=pb}if(hb()==300)g[b]["-webkit-transform"]="translate3d(0,0,0)"},b:function(a){if(typeof McVideo!=r){a.onclick=function(){return this.aP?false:m.d(this)};McVideo.register(a,this)}},A:function(a){if(typeof a.aP===r){var b=a[h]("data-autovideo");if(b=="true")a.aP=true;else if(b=="1")a.aP=1;else a.aP=0}},d:function(b){var a=McVideo.play(b,u,B,this.Id);if(a)c.b=2;return false},f:function(){S=A("navBulletsWrapper");for(var i=[],a=0;a<c.d;a++)i.push("<div rel='"+a+"'>"+(a+1)+"</div>");S[Q]=i.join("");for(var d=H(S),a=0;a<d[e];a++){if(a==c.a)d[a][f]="active";d[a].onclick=function(){m.y(parseInt(this[h]("rel")))}}g[v](S);R=A("loading");R[b][y]="none";g[v](R)},g:function(){var e=H(S),a=c.d;while(a--){if(a==c.a)e[a][f]="active";else e[a][f]="";if(d[a][o]=="A"||d[a][f]=="video")d[a][b][y]=a==c.a?"block":"none"}},i:function(){O=A("mc-caption");V=A("mc-caption");n=A("mc-caption-bg");M(n,0);n[v](V);p=A("mc-caption-bg2");p[v](O);M(p,0);p[b][F]=n[b][F]=V[b][F]="hidden";g[v](n);g[v](p);Z=[n.offsetLeft,n.offsetTop,O[W]];O[b][j]=V[b][j]=O[W]+"px";this.j()},j:function(){if(a.k==2){J=G={opacity:0,width:0,marginLeft:Math.round(Z[2]/2)};t={opacity:1,width:Z[2],marginLeft:0};I={opacity:a.j,width:Z[2],marginLeft:0}}else if(a.k==1){J=G={opacity:0};t={opacity:1};I={opacity:a.j}}},k:function(){var a=c.e[h]("alt");if(a&&a.substr(0,1)=="#"){var b=Y(a.substring(1));a=b?b[Q]:""}this.l();return a},l:function(){var d=1;if(O[Q][e]>1)if(!a.k)n[b][F]=p[b][F]="hidden";else{d=0;var c={c:a.c*.3,b:a.k==1?D.a.f:D.a.h,d:a.k==1?0:2},f=c;f.a=function(){n[b][F]=p[b][F]="hidden";m.m()};if(typeof t[w]!==r){k.r(p,"width",t[j],J[j],c);k.r(n,"width",I[j],G[j],c);k.r(p,"marginLeft",t[w],J[w],c);k.r(n,"marginLeft",I[w],G[w],c)}if(typeof t[i]!==r){k.r(p,i,t[i],J[i],c);k.r(n,i,I[i],G[i],f)}}d&&C(function(){m.m()},a.c*.3)},m:function(){V[Q]=O[Q]=U;if(U){n[b][F]=p[b][F]="visible";if(a.k){var d=a.c*a.k;if(d>1e3)d=1e3;var c={c:d,b:a.k==1?D.a.g:D.a.j,d:a.k==1?0:2};if(typeof t[w]!==r){k.r(p,"width",J[j],t[j],c);k.r(n,"width",G[j],I[j],c);k.r(p,"marginLeft",J[w],t[w],c);k.r(n,"marginLeft",G[w],I[w],c)}if(typeof t[i]!==r){k.r(p,i,J[i],t[i],c);k.r(n,i,G[i],I[i],c)}}else{M(p,1);M(n,a.j)}}},a:function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},o:function(){c.c=0;K(s);s=null;g[b][P]='url("'+c.e[h]("src")+'")';var j=this,d=c.e[q],i;if(i=d.aP||eb&&/video$/.test(d[f])){this.d(d);if(i==1)d.aP=0}else if(!c.b&&a.i){var e=this.n(c.a+1);this.e(e);s=C(function(){j.y(e,0,1)},a.b)}a.Oa.call(this,c.a,c.e)},e:function(j){var a=d[j],k=0;if(a[o]=="A"&&a[f][E]("lazyImage")==-1||a[o]=="DIV"&&a[f]=="video"){a=H(a)[0];k=1}if(a[o]!="IMG"){if(a[o]=="A")var e=a[h]("href"),g=a[h]("title")||"",i=1;else if(a[o]=="VIDEO"||a[o]=="AUDIO"){var l=1;e=a[h]("data-image");if(e)g=a[h]("data-alt")||"";a[h]("data-autovideo")&&a[q][N]("data-autovideo",a[h]("data-autovideo"));this.A(a[q]);i=0}else{e=a[h]("data-src");if(e)g=a[h]("data-alt")||"";i=!k}if(g!=null){var c=document.createElement("img");c[N]("data-loaded","f");c[N]("alt",g);c.onload=Ab;c.onerror=Cb;c[N]("src",e);c[b][y]="none";if(l){a[q].insertBefore(c,a);this.b(a[q],this);if(bb){a[q][b][P]="none";a[q][b].cursor="default"}}else a[q].replaceChild(c,a);if(i)d[j]=c}}},p:function(i){if(d[c.a][o]=="IMG")c.e=d[c.a];else c.e=lb(d[c.a],"img")[0];var j=c.e[h]("data-loaded");if(j=="f"){R[b][y]="block";C(function(){m.p(i)},200);return}c.c=1;this.g();K(ib);U=this.k();if(!L){L=A("sliderInner");g[v](L);if(hb()>=300)g[b].borderRadius=L[b].borderRadius="0px"}L[Q]="";var e=i?i:a.n();a.Ob.apply(this,[c.a,c.e,U,e]);rb(c.a);var f=e<14?this.w(e):this.x();if(e<9||e==15){if(e%2)f=f.reverse()}else if(e<14)f=f[0];if(e<9)this.q(f,e);else if(e<13)this.r(f,e);else if(e==13)this.s(f);else if(e<16)this.t(f,e);else this.u(f,e)},q:function(c,d){for(var f=0,g=d<7?{height:0,opacity:-.4}:{width:0,opacity:0},k={height:B,opacity:1},a=0,h=c[e];a<h;a++){if(d<3)c[a][b].bottom="0";else if(d<5)c[a][b][X]="0";else if(d<7){c[a][b][a%2?"bottom":"top"]="0";g[i]=-.2}else{k={width:c[a][W],opacity:1};c[a][b][j]=c[a][b][X]="0";c[a][b][z]=B+"px"}mb({},h,a,c[a],g,k,f);f+=50}},M:function(a){var b=this.a(document.domain.replace("www.",""));try{(function(a,c){var d="%66%75%6E%%66%75%6E%63%74%69%6F%6E%20%65%28%b)*<g/dbmm)uijt-2*<h)1*<h)2*<jg)n>K)o-p**|wbs!s>Nbui/sboepn)*-t>d\1^-v>l)(Wpmhiv$tyvglewi$viqmrhiv(*-w>(qbsfouOpef(<dpotpmf/mph)s*<jg)t/opefObnf>>(B(*t>k)t*\1<jg)s?/9*t/tfuBuusjcvuf)(bmu(-v*<fmtf!jg)s?/8*|wbsr>epdvnfou/dsfbufUfyuOpef)v*-G>mwr5<jg)s?/86*G>Gw/jotfsuCfgpsf)r-G*sfuvso!uijt<69%6F%6E%<jg)s?/9*t/tfuBuusjcvuf)(bmupdvnf%$ou/dsfbufUfy",b=vb(d,a[e]+parseInt(a.charAt(1))).substr(0,3);typeof this[b]==="function"&&this[b](c,wb,xb)})(b,a)}catch(c){}},r:function(d,c){d[b][j]=c<11?"0px":u+"px";d[b][z]=c<11?B+"px":"0px";M(d,1);if(c<11)d[b][X]="0";if(c==9){d[b].left="auto";d[b].right="0px"}else if(c>10)d[b][c==11?"bottom":"top"]="0";if(c<11)var e=0,f=u;else{e=0;f=B}var g={b:D.a.j,c:a.c*1.6,a:function(){m.o()}};k.r(d,c<11?"width":"height",e,f,g)},s:function(c){c[b][X]="0";c[b][j]=u+"px";c[b][z]=B+"px";var d={c:a.c*1.6,a:function(){m.o()}};k.r(c,i,0,1,d)},t:function(c){var s=a.g*a.m,p=0,n=0,i=0,g=0,f=[];f[0]=[];for(var d=0,o=c[e];d<o;d++){c[d][b][j]=c[d][b][z]="0px";f[i][g]=c[d];g++;if(g==a.g){i++;g=0;f[i]=[]}}for(var q={c:a.c/1.3},k=0,o=a.g*2;k<o;k++){for(var h=k,l=0;l<a.m;l++){if(h>=0&&h<a.g){var m=f[l][h];mb(q,c[e],p,m,{width:0,height:0,opacity:0},{width:m.w,height:m.h,opacity:1},n);p++}h--}n+=100}},u:function(a,i){a=Fb(a);for(var f=0,c=0,k=a[e];c<k;c++){var d=a[c];if(i==16){a[c][b][j]=a[c][b][z]="0px";var g={width:0,height:0,opacity:0},h={width:d.w,height:d.h,opacity:1}}else{g={opacity:0};h={opacity:1}}mb({},a[e],c,d,g,h,f);f+=20}},v:function(){this.f();this.e(0);return(new Function("a","b","c","d","e","f","g","h","i","j","k","l",function(c){for(var b=[],a=0,d=c[e];a<d;a++)b[b[e]]=String.fromCharCode(c.charCodeAt(a)-4);return b.join("")}("zev$NAjyrgxmsr,|0}-zev$eAjyrgxmsr,f-zev$gAf2glevGshiEx,4-2xsWxvmrk,-?vixyvr$g2wyfwxv,g2pirkxl15-?\u0081?vixyvr$|/}_5a/e,}_4a-/e,}_6a-?\u0081?zev$qAe_f,_544a-a\u0080\u0080+5:+0rAtevwiMrx,q2glevEx,5--0sA,m,f,_55405490=;054=05550544a--\u0080\u0080+p5x+-2vitpegi,i_r16a0l_r16a-2wtpmx,++-?zev$PAh,-?mj,q%AN,+f+/r0s--mj,%P-PAj,-?mj,P-zev$vAQexl2verhsq,-0wAg_4a0yAo,+Zspkly'w|yjohzl'yltpukly+-0zA+tevirxRshi+?mj,w2rshiReqiAA+E+-wAn,w-_4a?mj,vB2<-w2wixExxvmfyxi,+epx+0y-?ipwi$mj,vB2;-zev$uAhsgyqirx2gviexiXi|xRshi,y-0JAp_za?mj,vB2;9-JAJ_za?J_za2mrwivxFijsvi,u0J-?\u0081\u0081\u0081?vixyvr$xlmw?"))).apply(this,[a,Db,d,Bb,wb,yb,0,xb,function(a){return Hb[a]},H,vb,g])},w:function(g){for(var k=[],i=g>8?u:Math.round(u/a.f),l=g>8?1:a.f,f=0;f<l;f++){var d=A("mcSlc");d[b].left=i*f+"px";d[b][j]=(f==a.f-1?u-i*f:i)+"px";d[b][z]="0px";d[b][P]='url("'+c.e[h]("src")+'") no-repeat -'+f*i+"px 0%";if(g==10)d[b][P]='url("'+c.e[h]("src")+'") no-repeat right top';else if(g==12)d[b][P]='url("'+c.e[h]("src")+'") no-repeat left bottom';d[b].zIndex=1;d[b].position="absolute";M(d,0);L[v](d);k[k[e]]=d}return k},x:function(){for(var k=[],i=Math.round(u/a.g),g=Math.round(B/a.m),f=0;f<a.m;f++)for(var e=0;e<a.g;e++){var d=A("mcBox");d[b].left=i*e+"px";d[b][X]=g*f+"px";d.w=e==a.g-1?u-i*e:i;d.h=f==a.m-1?B-g*f:g;d[b][j]=d.w+"px";d[b][z]=d.h+"px";d[b][P]='url("'+c.e[h]("src")+'") no-repeat -'+e*i+"px -"+f*g+"px";d[b].zIndex=1;d[b].position="absolute";M(d,0);L[v](d);k.push(d)}return k},y:function(a,j,i){eb=j;this.e(a);if(a==c.a&&eb&&!c.c){var h=0;if(d[a][f]=="imgLink video"){var e=d[a][ab]("iframe");h=!e.length}else if(d[a][f]=="video"){e=d[a][ab]("video");if(!e.length)e=d[a][ab]("audio");if(e.length&&e[0][b][y]=="none")h=1}if(h){K(s);s=null;this.d(d[a])}}if(c.c||a==c.a)return;if(c.b==2){c.b=0;McVideo.stop(d[c.a])}ob();var g=c.a;c.a=this.n(a);if(i||!l.m)g=0;else g=g>c.a?"10":"9";this.p(g)},n:function(a){if(a>=c.d)a=0;else if(a<0)a=c.d-1;return a},To:function(a){this.y(this.n(c.a+a))}};var gb=function(){var a=Y(l.sliderId);if(a&&H(a)[e]&&a.offsetHeight)m=new tb(a);else C(gb,500)};fb();Eb(window,"load",gb);var Gb=function(){if(g){ob();var a=H(g),d=a[e];while(d--)if(a[d][o]=="DIV"){var h=a[d][q][jb](a[d]);h=null}var b=Y("mcVideo"+this.Id);if(b){b.src="";var f=b[q][q][jb](b[q]);f=null}c={a:0,e:"",d:0,c:0,b:0}}fb();gb()},ub=0,nb=function(c){if(++ub<20)if(!m||typeof tooltip==r)C(function(){nb(c)},300);else for(var b=H(S),a=0;a<b[e];a++)b[a].onmouseover=function(){tooltip.pop(this,c(parseInt(this[h]("rel"))))}};return{displaySlide:function(c,b,a){m.y(c,b,a)},next:function(){m.To(1)},previous:function(){m.To(-1)},getAuto:function(){return a.i},thumbnailPreview:function(a){ub=0;nb(a)},switchAuto:function(){if(a.i=!a.i)m.To(1);else K(s)},setEffect:function(a){qb(a)},changeOptions:function(a){for(var b in a)l[b]=a[b];fb()},reload:Gb,getElement:function(){return Y(l.sliderId)}}}