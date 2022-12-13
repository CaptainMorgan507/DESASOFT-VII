<?php

    Class Background{
        protected $html;

        public function __construct(){
            $this->html= "<div class='top_logo'>
                                        <div class='top_logo_title'>
                                            <h1>Caja del Seguro Social</h1>
                                        </div>
                                        <div class='top_logo_image'>
                                            <img src='img/Logo_gobierno.bmp'></img>
                                        </div>        

                          </div>";
        }

        public function __toString(){
            return $this->html;
        }
    }

?> 