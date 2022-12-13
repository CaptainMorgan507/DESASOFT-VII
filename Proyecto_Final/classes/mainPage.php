<?php
    require_once('background.php');
    Class MainPage extends background{
        public function __construct(){
            parent::__construct();
            $this->html .= "<div class='MainPage_MenuBar'>
                                <div class='MainPage_Menu_Left'>
                                    <a href='mainpage.php'>Medicamentos</a>
                                    <a href='deliveriesPage.php'>Pedidos</a>
                                </div>
                                <div class='MainPage_Menu_Right'>
                                <a href='index.php?'>Salir</a>
                            </div>
                        </div>";
        }
    }  
?>