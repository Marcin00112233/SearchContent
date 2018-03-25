<?php
/**
 * @author Łukasz Socha <kontakt@lukasz-socha.pl>
 * @version: 1.0
 * @license <a class="vglnk" href="http://www.gnu.org/copyleft/lesser.html" rel="nofollow"><span>http</span><span>://</span><span>www</span><span>.</span><span>gnu</span><span>.</span><span>org</span><span>/</span><span>copyleft</span><span>/</span><span>lesser</span><span>.</span><span>html</span></a>
 */
 
/**
 * This class includes methods for controllers.
 *
 * @abstract
 */
abstract class Controller{
	
	 public function redirect($url) {
        header("location: ".$url);
    }
 
   
     public function loadView($name, $path='view/') {
        $path=$path.$name.'.php';
        $name=$name.'View';
        try {
            if(is_file($path)) {
                require $path;
                $ob=new $name();
            } else {
                throw new Exception('Can not open view '.$name.' in: '.$path);
            }
        }
        catch(Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
        return $ob;
    }
	
    public function loadModel($name, $path='model/') {
        $path=$path.$name.'.php';
        $name=$name.'Model';
        try {
            if(is_file($path)) {
                require $path;
                $ob=new $name();
            } else {
                throw new Exception('Can not open model '.$name.' in: '.$path);
            }
        }
        catch(Exception $e) {
            echo $e->getMessage().'<br />
                File: '.$e->getFile().'<br />
                Code line: '.$e->getLine().'<br />
                Trace: '.$e->getTraceAsString();
            exit;
        }
        return $ob;
    }
}