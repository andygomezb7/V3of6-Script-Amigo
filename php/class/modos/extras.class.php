<?php  if ( ! defined('TS_HEADER')) exit('No se permite el acceso directo ala web');
/**
 * Modelo para el control de los usuarios
 *
 * @name    c.user.php
 * @author  Wortit Developers
 */
class tsExtras{

		// INSTANCIA DE LA CLASE
	public static function &getInstance(){
		static $instance;

		if( is_null($instance) ){
			$instance = new tsExtras();
    	}
		return $instance;
	}

function colorearcode($Texto, $type){
   $Texto = str_replace('    ', '    ', $Texto); // Re-emplazo tabuladores
    $TotalCaracteres = strlen($Texto);
    $TextoColoreado = "<span class='Codigo_Rosa'>";
    $Estado = ""; // Puede ser : "String1", "String2" y "ComentarioML"
    $DentroEstilo = false;
for ($i = 0; $i < $TotalCaracteres; $i++){
if($type == 'CSS'){
/* ------ COLOREAR CSS ----- */
switch($Estado){
case "" :
if ($Texto[$i] == "{"){ $TextoColoreado .= "{</span><span class='Codigo_AzulOscuro'>"; $DentroEstilo = true; }
else if ($Texto[$i] == "}"){ $TextoColoreado .= "</span><span class='Codigo_Rosa'>}"; $DentroEstilo = false; }
else if ($Texto[$i] == "'"){ $Estado = "String1"; $TextoColoreado .= "<span class='Codigo_Verde'>'"; }
else if ($Texto[$i] == '"'){ $Estado = "String2"; $TextoColoreado .= '<span class="Codigo_Verde">"'; }
else if ($Texto[$i] == "/" && $Texto[$i + 1] == "*"){ $Estado = "ComentarioML"; $TextoColoreado .= "<span class='Codigo_Gris'>/*"; $i ++; }
else if ($Texto[$i] == ":" && $DentroEstilo == true){ $TextoColoreado .= "<span class='Codigo_Rosa'>:</span><span class='Codigo_Azul'>"; }
else if ($Texto[$i] == ";"){ $TextoColoreado .= "</span><span class='Codigo_Rosa'>;</span>"; }
else { $TextoColoreado .= $Texto[$i]; }
break;
case "String1" : 
if($Texto[$i] == "'"){ $Estado = ""; $TextoColoreado .= "'</span>"; }
else{ $TextoColoreado.= $Texto[$i]; } break;
case "String2" : 
if($Texto[$i] == '"'){ $Estado = ""; $TextoColoreado .= '"</span>'; } else { $TextoColoreado.= $Texto[$i]; }
break;
case "ComentarioML": 
if ($Texto[$i] == "*" && $Texto[$i + 1] == "/"){ $Estado = ""; $TextoColoreado .= "*/</span>"; $i ++; }
else { $TextoColoreado.= $Texto[$i]; }
break;
}
/* ------ END; COLOREAR CSS ----- */
}elseif($type == 'HTML'){
/* ------ COLOREAR HTML ----- */
switch ($Estado) {
            case "" : // Sin estado
                if ($Texto[$i] == "<") { // Posible etiqueta abierta
                    if (substr($Texto, $i, 7) == "<script")  { // JavaScript
                        $TextoColoreado .= $PalabraActual;
                        $PalabraActual = "<span class='Codigo_Marron'><script";
                        $Estado = "JavaScript_Inicio"; 
                        $i += 6;
                    }
                    else if (substr($Texto, $i, 6) == "<style")  { // CSS
                        $TextoColoreado .= $PalabraActual;
                        $PalabraActual = "<span class='Codigo_Lila'><style";
                        $Estado = "CSS_Inicio";
                        $i += 5;
                    }
                    else if (substr($Texto, $i, 5) == "<?php")  { // PHP
                        $TextoColoreado .= $PalabraActual;
                        $PalabraActual = "<?php ";
                        $Estado = "PHP";
                        $i += 5;
                    }
                    else if (substr($Texto, $i, 4) == "<!--")  { // Comentario
                        $TextoColoreado .= $PalabraActual;
                        $PalabraActual = "<span class='Codigo_Gris'><!--";
                        $Estado = "Comentario";
                        $i += 4;
                    }
                    else { // Otras etiquetas
                        $TextoColoreado .= $PalabraActual;
                        $PalabraActual = "<";
                        $Estado = "Etiqueta";
                        $InicioEtiqueta = $i + 1;
                    }
                }
                else {
                    $PalabraActual .= $Texto[$i];
                }
                break;
                          // Estado : String con comillas simples dentro de una etiqueta
            case "Etiqueta_Str1" :
                if (_FinString1($Texto, $i) == true) {
                    $PalabraActual .= "'</span>";
                    $Estado = "Etiqueta"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : String con comillas dobles dentro de una etiqueta
            case "Etiqueta_Str2" :
                if (_FinString2($Texto, $i) == true) {
                    $PalabraActual .= '"</span>';
                    $Estado = "Etiqueta"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : dentro de una etiqueta
            case "Etiqueta" : 
                if ($Texto[$i] == ">") { // Final de la etiqueta
                    $Color = _BuscarEtiqueta(substr($Texto, $InicioEtiqueta, $i - $InicioEtiqueta));
                    $TextoColoreado .= "<span class='".$Color."'>".$PalabraActual."></span>";
                    $PalabraActual = "";
                    $Estado = ""; 
                }
                else if ($Texto[$i] == "<") { // Estabamos en una etiqueta falsa
                    $TextoColoreado .= $PalabraActual;
                    $PalabraActual = "<";
                    $InicioEtiqueta = $i + 1;
                }
                else if ($Texto[$i] == "s") { // miramos si es el atributo style
                    if (substr($Texto, $i, 5) == "style") {
                        while ($Texto[$i] != "'" && $Texto[$i] != '"') $PalabraActual .= $Texto[$i ++];
                        if ($Texto[$i] == "'")      $Estado = "Estilo_Str1";
                        else if ($Texto[$i] == '"') $Estado = "Estilo_Str2";
                        $PalabraActual .= "<span class='Codigo_Azul'>".$Texto[$i ++];
                        $InicioEstilo = $i;
                    }
                    else $PalabraActual .= $Texto[$i];
                }
                else if ($Texto[$i] == "'") { // String con comillas simples dentro de la etiqueta
                    $PalabraActual .= "<span class='Codigo_Azul'>'";
                    $Estado = "Etiqueta_Str1"; 
                }
                else if ($Texto[$i] == '"') { // String con comillas dobles dentro de la etiqueta
                    $PalabraActual .= '<span class="Codigo_Azul">"';
                    $Estado = "Etiqueta_Str2"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : inicio del atributo style encapsulado por comillas simples
            case "Estilo_Str1" :
                if (_FinString1($Texto, $i) == true) {
                    $PalabraActual .= PintarEstiloCSS(substr($Texto, $InicioEstilo, $i - $InicioEstilo))."'</span>";
                    $Estado = "Etiqueta";
                }
                break;
            // Estado : inicio del atributo style encapsulado por comillas dobles
            case "Estilo_Str2" :
                if (_FinString2($Texto, $i) == true) {
                    $PalabraActual .= PintarEstiloCSS(substr($Texto, $InicioEstilo, $i - $InicioEstilo)).'"</span>';
                    $Estado = "Etiqueta";
                }
                break;
                           // Estado : inicio de un texto de un atributo dentro de una etiqueta script con comillas simples
            case "JavaScript_Str1" :
                if (_FinString1($Texto, $i) == true) {
                    $PalabraActual .= "'</span>";
                    $Estado = "JavaScript_Inicio"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : inicio de un texto de un atributo dentro de una etiqueta script con comillas dobles
            case "JavaScript_Str2" :
                if (_FinString2($Texto, $i) == true) {
                    $PalabraActual .= '"</span>';
                    $Estado = "JavaScript_Inicio"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : dentro de una etiqueta script
            case "JavaScript_Inicio" : 
                if ($Texto[$i] == ">") { // Final de una etiqueta script
                    $TextoColoreado .= $PalabraActual."></span>";
                    $PalabraActual = "";
                    $Estado = "JavaScript_Fin"; 
                }
                else if ($Texto[$i] == "'") { // String dentro de una etiqueta script con comillas simples
                    $PalabraActual .= "<span class='Codigo_Azul'>'";
                    $Estado = "JavaScript_Str1"; 
                }
                else if ($Texto[$i] == '"') { // String dentro de una etiqueta script con comillas dobles
                    $PalabraActual .= '<span class="Codigo_Azul">"';
                    $Estado = "JavaScript_Str2"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : se ha encontrado el final de una etiqueta script
            case "JavaScript_Fin" :
                if (substr($Texto, $i, 9) == "</script>") { // Comprobamos que sea la etiqueta de cierre
                    if (strlen($PalabraActual) > 1) $TextoColoreado .= PintarJavaScript($PalabraActual);
                    else                            $TextoColoreado .= $PalabraActual;
                    $TextoColoreado .= "<span class='Codigo_Marron'></script></span>";
                    $PalabraActual = "";
                    $Estado = "";
                    $i += 8;
                }
                else $PalabraActual .= $Texto[$i];                        
                break;
                           // Estado : string dentro de una etiqueta style con comillas simples
            case "CSS_Str1" :
                if (_FinString1($Texto, $i) == true) {
                    $PalabraActual .= "'</span>";
                    $Estado = "CSS_Inicio"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : string dentro de una etiqueta style con comillas dobles
            case "CSS_Str2" :
                if (_FinString2($Texto, $i) == true) {
                    $PalabraActual .= '"</span>';
                    $Estado = "CSS_Inicio"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : etiqueta style inicial
            case "CSS_Inicio" : 
                if ($Texto[$i] == ">") { // Final de la etiqueta style
                    $TextoColoreado .= $PalabraActual."></span>";
                    $PalabraActual = "";
                    $Estado = "CSS_Fin"; 
                }
                else if ($Texto[$i] == "'") { // String con comillas simples dentro de la etiqueta style
                    $PalabraActual .= "<span class='Codigo_Verde'>'";
                    $Estado = "CSS_Str1"; 
                }
                else if ($Texto[$i] == '"') { // String con comillas dobles dentro de la etiqueta style
                    $PalabraActual .= '<span class="Codigo_Verde">"';
                    $Estado = "CSS_Str2"; 
                }
                else $PalabraActual .= $Texto[$i];
                break;    
            // Estado : etiqueta style de cierre                    
            case "CSS_Fin" :
                if (substr($Texto, $i, 8) == "</style>") { 
                    $TextoColoreado .= PintarEstilosCSS($PalabraActual);
                    $TextoColoreado .= "<span class='Codigo_Lila'></style></span>";
                    $PalabraActual = "";
                    $Estado = "";
                    $i += 8;
                }
                else $PalabraActual .= $Texto[$i];                        
                break;
                           // Estado : Comentario HTML (puede ser multilinea)
            case "Comentario" : 
                if ($Texto[$i] == ">" && $Texto[$i - 1] == "-"  && $Texto[$i - 2] == "-") {
                    $PalabraActual .= "></span>";
                    $Estado = "";
                }
                else if ($Texto[$i] == "<") $PalabraActual .= "<";
                else if ($Texto[$i] == ">") $PalabraActual .= ">";
                else $PalabraActual .= $Texto[$i];
                break;
            // Estado : dentro de un código php                    
            case "PHP" : 
                if ($Texto[$i] == ">" && $Texto[$i - 1] == "?") {
                    $TextoColoreado .= PintarPHP($PalabraActual.">");
                    $PalabraActual = "";
                    $Estado = ""; 
                }
                else $PalabraActual .= $Texto[$i];
                break;                        
        }
    $TextoColoreado .= $PalabraActual;
/* ------ END; COLOREAR HTML ----- */
}else{}
}
$TextoColoreado .= "</span>";
return $TextoColoreado;
}

}
?>