<?php
    require_once('loginPage.php');
    Class Login extends LoginPage{
        public function __construct(){
            parent::__construct();
            $this->html .= "<div class='login_form'>
                                <form name ='login_form' action='index.php' method='POST'>
                                    <input type='text' name='user' placeholder='Cedula'>
                                    <input type='password' name='pass' placeholder='Contraseña'>
                                    <p1>¿Olvidastes tu Contraseña? <a href='changepass.php'>Recuperala!</a></p1>
                                    <input type='submit' name='login_user' value='Ingresar'>
                                    <p1>¿No estas registrado? <a href='register.php'>Registrate!</a></p1>
                                </form>
                            </div>
                            </div>";
        }
    }  
?>