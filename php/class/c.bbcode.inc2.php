	<?php
    	/*
		parseBBCode($bbcode)
	*/
	function BBcode($bbcode, $type = 'normal'){
	include TS_ROOT.'/ext/bbcode.inc.php';
	$parser =& BBcode::getInstance();
        // CLASS BBCode
        switch($type){
            // NORMAL
            case 'normal':
                // RESTRICTIONS
                $parser->restriction = array('url', 'code', 'quote', 'quotePHPost', 'font', 'size', 'color', 'img', 'b', 'i', 'u', 'align', 'spoiler', 'swf', 'goear', 'hr', 'li', 'meg', 'med', 'put', 'enlace', "table", "tr", "td", "ol", "ul", "s", "notice", "warning", "info", "success", "error");
                // CONVERTIMOS
                $html = $parser->parseString($bbcode);
                //Memes
                $html = $parser->parseMemes($html, 'http://i.imgur.com/');
                // SMILES
                $html = $parser->parseSmiles($html, $this->settings['default'].'/images/smiles/');
                // MENCIONES
                $html = $this->setMenciones($html);
            break;
            // FIRMA
            case 'firma':
                // BBCodes permitidos
                $parser->restriction = array('url', 'font', 'size', 'color', 'img', 'b', 'i', 'u', 'align', 'spoiler');
                // CONVERTIMOS
                $html = $parser->parseString($bbcode);
            break;
			//COMENTARIOS EN BWORTS
			case 'commentsb':
			    // BBCodes permitidos
                $parser->restriction = array('url', 'font', 'img', 'spoiler');
                // CONVERTIMOS
                $html = $parser->parseString($bbcode);
			break;
            // NOTICIAS
            case 'news':
                // BBCodes permitidos
                $parser->restriction = array('url', 'b', 'i', 'u');
                // CONVERTIMOS
                $html = $parser->parseString($bbcode);
                // SMILES
                $html = $parser->parseSmiles($html, $this->settings['default'].'/images/smiles/');                
            break;
            // FILES
            case 'files':
                // RESTRICTIONS
                $parser->restriction = array('url', 'quote', 'size', 'color', 'b', 'i', 'u', 'align');
                // CONVERTIMOS
                $html = $parser->parseString($bbcode);
                // SMILES
                $html = $parser->parseSmiles($html, $this->settings['default'].'/images/smiles/');
                // MENCIONES
                $html = $this->setMenciones($html);
            break; 
			// SOLO SMILES
            case 'smiles':
                $parser->restriction = array('url', 'code', 'quote', 'quotePHPost', 'font', 'size', 'color', 'img', 'b', 'i', 'u', 'align', 'spoiler', 'swf', 'goear', 'hr', 'li', 'php');
                //Memes
                $html = $parser->parseMemes($bbcode, 'http://i.imgur.com/');
                // SMILES
                $html = $parser->parseSmiles($bbcode, $this->settings['default'].'/images/smiles/');
                // MENCIONES
                $html = $this->setMenciones($html);
            break;
        }
        //
        return $html;
	}

    ?>