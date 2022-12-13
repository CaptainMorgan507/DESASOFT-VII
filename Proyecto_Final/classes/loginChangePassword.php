<?php
    require_once('loginPage.php');
    Class LoginChangePass extends LoginPage{
        public function __construct(){
            parent::__construct();
            $this->html .= "<div class='login_form'>
                                <form action='index.php' method='POST'>
                                    <input type='text' name='user' placeholder='Cedula'>
                                    <input type='password' name='pass1' placeholder='Nueva Contraseña'>
                                    <input type='password' name='pass2' placeholder='Repetir Contraseña'>
                                    <input type='submit' name='login_user' value='Cambiar Contraseña'>
                                </form>
                            </div>
                            </div>";
        }
    }  
?>