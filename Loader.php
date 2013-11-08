<?php
class Loader{
    public static function load(){
        $files = scandir('lib');
        foreach($files as $file){
            if ($file != '.' && $file !='..'){
                $arr = explode('.',$file);
                if($arr[count($arr) - 1] =="php")
                    require_once('lib/'.$file);
            }
        }
    }
}