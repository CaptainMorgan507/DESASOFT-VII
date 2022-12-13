<?php
    require_once('background.php');
    Class LoginPage extends background{
        public function __construct(){
            parent::__construct();
            $this->html .= "<div class='loginPage'>    
                                <img src='img/css_logo.bmp'></img>
                            ";
        }
    }  
?>