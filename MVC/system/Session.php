<?php
class Session{
    public function init(){
        session_start();
    }
    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }
    public static function get($key){
        if (isset($key)){
            return @$_SESSION[$key]; # @ et error@ antesume
        }
    }
    public function destroy(){
        session_destroy();
    }
}