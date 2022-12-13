<?php
    require_once('loginPage.php');
    Class LoginRegister extends LoginPage{
        public function __construct(){
            parent::__construct();
            $this->html .= "<div class='login_form'>
                                <form name='user_register' id='user_register' action='index.php' method='POST'>
                                    <div class='login_form_row'>
                                        <label for='name'>Nombre:</label>
                                        <input type='text' id='name' name='name' placeholder='Nombre'>    
                                    </div>
                                    <div class='login_form_row'>
                                        <label for='lastname'>Apellido:</label>
                                        <input type='text' id='lastname' name='lastname' placeholder='Apellido'>
                                    </div>
                                    <div class='login_form_row'>
                                        <label for='email'>Correo:</label>
                                        <input type='email' id='email' name='email' placeholder='Correo@correo.com'>
                                    </div>
                                    <div class='login_form_row'>
                                        <label for='user_id'>Cédula:</label>
                                        <input type='text' id='user_id' name='user_id' placeholder='Cedula'>
                                    </div>
                                    
                                    <div class='login_form_row'>
                                        <label for='dir'>Dirección:</label>
                                        <textarea id='dir' name='dir' cols='40' rows='5' placeholder='Dirección'></textarea>
                                    </div>
                                    <div class='login_form_row'>
                                        <label for='b_date'>Fecha de Nacimiento:</label>
                                        <input type='date' id='b_date' name='b_date' PLACEHOLDER='yyyy-mm-dd' MIN='1900-01-01' MAX='2050-12-31'>
                                    </div>
                                    
                                    <div class='login_form_row'>
                                        <div class='login_form_row'>
                                            <label for='cphone1'>Celular:</label>
                                            <input type='tel' id ='cphone1' name='cphone1' placeholder='6000-0000'>
                                        </div>
                                        <div class='login_form_row'>
                                            <label for='cphone2'>Teléfono:</label>
                                            <input type='tel' id='cphone2' name='cphone2' placeholder='390-0000'>
                                        </div>
                                    </div>
                                    <div class='login_form_row'>
                                        <label for='cphone3'>Celular de Emergencia:</label>
                                        <input type='tel' id='cphone3' name='cphone3' placeholder='6000-0000'>
                                    </div>
                                    <div class='login_form_row'>
                                            <label for='pass1'>Contraseña:</label>
                                            <input type='password' id='pass1' name='pass1' placeholder='Contraseña'>
                                    </div>
                                    <div class='login_form_row'>
                                            <label for='pass2'>Repetir Contraseña:</label>
                                            <input type='password' id='pass2' name='pass2' placeholder='Repetir Contraseña'>
                                    </div>
                                    
                                    <input type='submit' name='register_user' value='Registrar'></input>
                                    
                                </form>
                                    
                                <form action='index.php' method='POST'>
                                        <input type='submit' value='Regresar'>
                                </form>
                                
                            </div>
                        </div>";
        }
    }  
?>