<?php
    require_once('mainPage.php');
    Class DeliverySpec extends MainPage{
        public function __construct(){
            parent::__construct();
            $this->html .= "
                            <div class='MainPage_Title'>
                                <h1>Pedidos</h1>
                            </div>
                            
                            <div class='Delivery_body'>
                                <div class='Delivery_specific'>
                                    <form name='modDelivery' method='post' action='deliverySpecific.php'>
                                        <div class='Delivery_row'>
                                            <label for='deli_id'>Número de Orden:</label><input type ='text' name='deli_id' id='deli_id' value='AAA-0001'>
                                            <input type='submit' value='Asignarme' name='deli_asing'>
                                        </div>
                                        <div class='Delivery_row'>
                                            <label for='deli_name'>Nombre de Asegurado:</label><input type='text' name='deli_name' id='deli_name' value='Raul Perez'>
                                            <label for='deli_ced'>Cédula:</label><input type='text' name='deli_ced' id='deli_ced' value='8-888-999981'>
                                        </div>

                                        <div class='Delivery_row'>
                                            <label for='deli_state'>Estado:</label>
                                            <select name='deli_state' id='deli_state'>
                                                <option name='preparado' selected>Preparado</option>
                                                <option name='sin_asignar'>Sin Asignar</option>
                                                <option name='pendiente'>Pendiente</option>
                                                <option name='entregado'>Entregado</option>
                                                <option name='entregado+'>Entregado + Confirmado</option>
                                            </select>
                                            <label for='deli_loc'>Ubicación:</label><input type='text' name='deli_loc' id='deli_loc' value='PR-00002'>
                                        </div>

                                        <div class='Delivery_row'>
                                            <label for='deli_worker'>Asignado a:</label><input type='text'name='deli_worker' id='deli_worker' value='Olivia Ramirez'>
                                            <label for='deli_create'>Creado (dd-mm-aaaa):</label><input type='date' name='deli_create' id='deli_create' value='2022-12-12' PLACEHOLDER='yyyy-mm-dd' MIN='1900-01-01' MAX='2050-12-31'>
                                        </div>
                                        
                                        <div class='Delivery_row'>
                                            <label for='deli_cel'>Celular:</label><input name='deli_cel' id='deli_cel' type='telephone' value='6625-3575' placeholder='6000-0000'>
                                            <label for='deli_tel'>Telefono:</label><input name='deli_tel' id='deli_tel' type='telephone' value='395-6869' placeholder='300-0000'>
                                        </div>
                                        <div class='Delivery_row'>
                                            <label for='deli_cel_emer'>Celular de emergencia:</label><input name='deli_cel_emer' id='deli_cel_emer' type='telephone' value='6185-5245' placeholder='6000-0000'>
                                        </div>
                                    

                                        <div class='Delivery_column'>
                                            <p1>Datos del Pedido</p1>
                                            <table id='meds_table' name='meds_table'>
                                                <thead>
                                                    <tr>
                                                        <th>Fila</th>
                                                        <th>Medicamento</th>
                                                        <th>Nombre</th>
                                                        <th>Unidades</th>
                                                        <th>Lote</th>
                                                    </tr>
                                                </thead>
                                            
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type='checkbox' name='row_delivery_med'>
                                                        </td>
                                                        <td>
                                                            <datalist id='deliver_med'>
                                                                <option name='acetaminofen'>Acetaminofen</option>
                                                                <option name='ibuprofeno'>Ibuprofeno</option>
                                                                <option name='antiacido'>Anti Acido</option>
                                                            </datalist>
                                                            <input autoComplete='on' list='deliver_med'>
                                                        </td>
                                                        <td>
                                                            <datalist id='delivery_name_med'>
                                                                <option name='tylenol'>Tylenol</option>
                                                            </datalist>
                                                            <input autoComplete='on' list='delivery_name_med'>
                                                        
                                                        </td>
                                                        <td><input type='number' name ='delivery_cant' placeholder='0'></td>
                                                        <td><input type='search' name ='delivery_lot' placeholder='Lote'></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class='Delivery_row'>
                                                <input type='button' value='Añadir Fila' onclick=addRow('meds_table') />
                                                <input type='button' value='Remover Fila' onclick=deleteRow('meds_table') />
                                            </div>
                                        </div>

                                        <div class='Delivery_column'>
                                            <p1>Recetas Anexadas</p1>

                                            <div class='Delivery_row'>
                                                <input type='file' palceholder='Fotos o archivos PDF'>
                                                <input type='button' value='Añadir Archivo' onclick=addRow('meds_table_recepies') />
                                                <input type='button' value='Remover Archivo' onclick=deleteRow('meds_table_recepies') />
                                            </div>

                                            <table id='meds_table_recepies' name='meds_table_recepies'>
                                                <thead>
                                                    <tr>
                                                        <th>Fila</th>
                                                        <th>Nombre de Archivo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type='checkbox' name='med_recepy_chck'>
                                                        </td>
                                                        <td>
                                                            <a href=''>Receta.jpg</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>

                                        <div class='Delivery_row'>
                                            <p2>Dia de Entrega: Sin especificar</p2>
                                            <input type='submit' name='validate_prepared' value='Preparado'>
                                            <input type='submit' name='validate_deliver' value='Entregar'>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                            ";
        }
    }  
?>