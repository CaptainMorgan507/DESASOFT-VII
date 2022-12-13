<?php
    require_once('mainPage.php');
    Class MedicineSpec extends MainPage{
        public function __construct($medtype){
            parent::__construct();
            $this->html .= "
                            
                            <div class='MainPage_Title'>
                                <h1>Medicamentos</h1>
                            </div>
                            ";
            if(strcmp($medtype,"search")==0){
                $this->searchMed();
            }
            elseif(strcmp($medtype,"create")==0){
                $this->newMed();
            }
        }

        public function searchMed(){
            $this->html.="<div class='Medic_body'>
                        <div class='Medic_specific'>
                            <form name='modMedic' method='post' action='mainpage.php'>
                                <div class='Medic_row'>
                                    <label for='med_id'>Id:</label><input type ='text' name='med_id' id='med_id' value='TLN-001'>
                                </div>
                                <div class='Medic_row'>
                                    <label for='med_name'>Nombre:</label><input type='text' name='med_name' id='med_name' value='Tylenol'>
                                    <label for='med_type'>Medicamento:</label><input type='text' name='med_type' id='med_type' value='Parecetamol'>
                                </div>

                                <div class='Medic_row'>
                                    <label for='med_state'>Estado:</label><input type='text' name='med_state' id='med_state' value='En Existencia'>
                                    <label for='med_loc'>Ubicación:</label><input type='text' name='med_loc' id='med_loc' value='AA-01'>
                                </div>

                                <div class='Medic_row'>
                                    <label for='med_lot'>Lote:</label><input type='text'name='med_lot' id='med_lot' value='LTO-0000015268'>
                                    <label for='med_arrive'>LLegado:</label><input type='date' name='med_arrive' id='med_arrive' value='2022-11-24' PLACEHOLDER='yyyy-mm-dd' MIN='1900-01-01' MAX='2050-12-31'>
                                </div>
                                
                                <div class='Medic_row'>
                                    <label for='med_exp'>Fecha de Expiración:</label><input type='date' name='med_exp' id='med_exp' value='2023-03-13' PLACEHOLDER='yyyy-mm-dd' MIN='1900-01-01' MAX='2050-12-31'>
                                </div>
                                <div class='Medic_row'>
                                    <label for='med_avail'>Unidades Disponibles:</label><input type='numeric' value='250'>
                                </div>

                                <div class='Medic_column'>
                                    <p1>Datos de Almacenista</p1>
                                    <p2>Ingresado por: Carlos Montenegro</p2>
                                    <p2>Última Revisión de Inventario (aaaa-mm-dd): 2022-12-11</p2>
                                    <p2>Revisado por: Carlos Montenegro</p2>
                                </div>

                                <div class='Medic_row'>
                                    <label for='med_actual'>Inventario Actual:</label><input type='numeric' name='med_actual' id='med_actual' value='350'>
                                    <input type='submit' name='validate_invt' value='Validar Inventario'>
                                </div>
                            </form>
                        </div> 
                    </div>";  
        }

        public function newMed(){
            $this->html.="<div class='Medic_body'>
                        <div class='Medic_specific'>
                            <form name='modMedic' method='post' action='mainpage.php'>
                                <div class='Medic_row'>
                                    <label for='med_id'>Id:</label><input type ='text' name='med_id' id='med_id'>
                                </div>
                                <div class='Medic_row'>
                                    <label for='med_name'>Nombre:</label><input type='text' name='med_name' id='med_name' >
                                    <label for='med_type'>Medicamento:</label><input type='text' name='med_type' id='med_type' >
                                </div>

                                <div class='Medic_row'>
                                    <label for='med_state'>Estado:</label><input type='text' name='med_state' id='med_state'>
                                    <label for='med_loc'>Ubicación:</label><input type='text' name='med_loc' id='med_loc'>
                                </div>

                                <div class='Medic_row'>
                                    <label for='med_lot'>Lote:</label><input type='text'name='med_lot' id='med_lot'>
                                    <label for='med_arrive'>LLegado:</label><input type='date' name='med_arrive' id='med_arrive' PLACEHOLDER='yyyy-mm-dd' MIN='1900-01-01' MAX='2050-12-31'>
                                </div>
                                
                                <div class='Medic_row'>
                                    <label for='med_exp'>Fecha de Expiración:</label><input type='date' name='med_exp' id='med_exp' PLACEHOLDER='yyyy-mm-dd' MIN='1900-01-01' MAX='2050-12-31'>
                                </div>
                                <div class='Medic_row'>
                                    <label for='med_avail'>Unidades Disponibles:</label><input type='numeric'>
                                </div>
                                

                                <div class='Medic_row'>
                                    <input type='submit' name='create_invt' value='Crear en Inventario'>
                                </div>
                            </form>
                        </div> 
                    </div>";  
        }
    }  
?>