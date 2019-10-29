<?php

class View {
    function __construct() {

    }

    public function render($name, $showData = [], $no_include){
            extract($showData, EXTR_OVERWRITE);
            if(isset($no_include) && $no_include){
                require "view/".$name.".php";
            } else {
                require "view/layout/header.php";
                require "view/".$name.".php";
                require "view/layout/footer.php";
            }
    }
}