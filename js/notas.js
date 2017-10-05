$("body").bind('copy', function(e){
if(typeof window.getSelection == "undefined") return;
var miblog = document.getElementsByTagName('body')[0];
var seleccionar = window.getSelection();
if (("" + seleccionar).length < 10) return;
var nuevodiv = document.createElement('div');
nuevodiv.style.position = 'absolute';
nuevodiv.style.left = '-99999px';
miblog.appendChild(nuevodiv);
nuevodiv.appendChild(seleccionar.getRangeAt(0).cloneContents());
if (seleccionar.getRangeAt(0).commonAncestorContainer.nodeName == "PRE") {
nuevodiv.innerHTML = "<pre>" + nuevodiv.innerHTML + "</pre>";
}
nuevodiv.innerHTML += "<br/><br/>Artículo original: <a href='"
+ document.location.href + "'>"
+ document.location.href + "</a><br/>&copy; Wortit";
seleccionar.selectAllChildren(nuevodiv);
window.setTimeout(function () { miblog.removeChild(nuevodiv); }, 200);
});