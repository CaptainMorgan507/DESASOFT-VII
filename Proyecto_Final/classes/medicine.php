<?php
    require_once('mainPage.php');
    Class Medicines extends MainPage{
        public function __construct(){
            parent::__construct();
            $this->html .= "
                            <div class='MainPage_Title'>
                                <h1>Medicamentos</h1>
                            </div>
                           
                            <div class='Medic_body'>
                                
                                <div class='Medic_Filter'>
                                    <form>
                                        <label for ='filter'>Filtro:</label>
                                        <select name='filter' id='filter'>
                                            <option value='nombre'>Nombre</option>
                                            <option value='medicamento'>Medicamento</option>
                                            <option value='ubicacion'>Ubicación</option>    
                                        </select>
                                        <input type='text' name='data' placeholder='Campo'>
                                        <input type='submit' name='getfilter' value='Buscar'>
                                    </form>
                                </div> 
                                <table class='Medic_table'>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Medicamento</th>
                                            <th>Unidades</th>
                                            <th>Ubicación</th>
                                        </tr>
                                    </thead>    
                                    <tbody>
                                        <tr>
                                            <td><a href='medicine.php'>Tylenol</a></td>
                                            <td>Acetaminofen</td>
                                            <td>250</td>
                                            <td>AA-01</td>
                                        </tr>
                                        <tr>
                                            <td><a href='medicine.php'>Panadol</a></td>
                                            <td>Acetaminofen</td>
                                            <td>250</td>
                                            <td>AA-02</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <div class='Medic_Footer'>
                                    <form method='get' action='mainpage.php'>
                                        <label for='cant'>Mostrar:</label>
                                        <input type='numeric' name='cant' id='cant' placeholder='10'>
                                        <input type='submit' value='Ver'>
                                    </form>
                                    <div class='Medic_Footer_nav'>
                                        <a href='mainpage.php'>0</a>
                                        <p1>10</p1>
                                        <a href='mainpage.php'>20</a>
                                    </div>
                                </div>

                                <div class='Medic_new'>
                                    <form action='createMed.php' method='POST' name='new_medic_entry'>
                                        <input type='submit' name='medic_create_new' value='Crear Nueva entrada'>
                                    </form>
                                </div>
                            </div>
                            ";
        }
    }  
?>