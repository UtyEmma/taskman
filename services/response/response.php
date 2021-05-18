<?php

namespace Services\Response;

use Services\Requests\Client;

class Response {

    static $cache = 'bootstrap/cache';
    static $blocks = [];
    
    static function view(string $page, array $data = []){
        Client::url() != '/' ? $url = str_replace('/', '', Client::url()) : $url = $page;
        if ($page === $url) {
            self::getFileContents($page, $data);
        }
    }

    static function getFileContents($page, $data){
        $cachedFile = self::$cache.'/'.$page.'.php';
        $contents = file_get_contents('src/views/'.$page.'.html');
        $content = self::compileCode($contents, $data);
        file_put_contents($cachedFile, $content);
        require ($cachedFile);
    }

    static function compileCode($code, $data){
        $code = self::compilePhp($code);
        $code = self::compileVariables($code, $data);
        $code = self::complieEchos($code);
        $code = self::compileEscapedEchos($code);
        return $code;
    }

    static function compilePhp($contents){
        return preg_replace('~\{%\s*(.+?)\s*\%}~is', '<?php $1 ?>', $contents);
    }

    static function complieEchos($contents){
        return preg_replace('~\{{\s*(.+?)\s*\}}~is', '<?php echo $1 ?>', $contents);
    }

    static function compileEscapedEchos($code) {
		return preg_replace('~\{{{\s*(.+?)\s*\}}}~is', '<?php echo htmlentities($1, ENT_QUOTES, \'UTF-8\') ?>', $code);
	}

    static function compileBlock($code) {
		preg_match_all('/{% ?block ?(.*?) ?%}(.*?){% ?endblock ?%}/is', $code, $matches, PREG_SET_ORDER);
		foreach ($matches as $value) {
			if (!array_key_exists($value[1], self::$blocks)) self::$blocks[$value[1]] = '';
			if (strpos($value[2], '@parent') === false) {
				self::$blocks[$value[1]] = $value[2];
			} else {
				self::$blocks[$value[1]] = str_replace('@parent', self::$blocks[$value[1]], $value[2]);
			}
			$code = str_replace($value[0], '', $code);
		}
		return $code;
	}

    static function compileVariables($code, $data){
        foreach ($data as $key => $value) {         
           $code = preg_replace('/{{'.$key.'}}/', $value, $code);
        }
        return $code;
    }

    static function replaceVariables($code, $key, $value){
        return preg_replace('/{{'.$key.'}}/', $value, $code);
    }

    static function json($value){
        return print_r(json_encode($value));
    }


}