<?php
    require_once('mainPage.php');
    Class Deliveries extends MainPage{
        public function __construct(){
            parent::__construct();
            $this->html .= "                            
                            <div class='MainPage_Title'>
                                <h1>Pedidos</h1>
                            </div>
                            
                            <div class='Delivery_body'>
                                <div class='Delivery_Filter'>
                                    <form>
                                        <label for ='filter'>Filtro:</label>
                                        <select name='filter' id='filter'>
                                            <option value='orden'>Numero de Orden</option>
                                            <option value='estado'>Estado de Orden</option>
                                            <option value='asegurado'>Ubicación</option>
                                            <option value='cedula'>Cedula</option>    
                                        </select>
                                        <input type='text' name='data' placeholder='Campo'>
                                        <input type='submit' name='getfilter' value='Buscar'>
                                    </form>
                                </div>  
                                <table class='Delivery_table'>
                                    <thead>
                                        <tr>
                                            <th>Orden</th>
                                            <th>Cedula</th>
                                            <th>Asegurado</th>
                                            <th>Estado</th>
                                        </tr>
                                    </thead>    
                                    <tbody> 
                                        <tr>
                                            <td><a href='deliverySpecific.php'>AAA-0001</a></td>
                                            <td>8-888-999981</td>
                                            <td>Raul Peréz</td>
                                            <td>Preparado</td>
                                        </tr>
                                        <tr>
                                            <td><a href='deliverySpecific.php'>AAA-0002</a></td>
                                            <td>7-777-88872</td>
                                            <td>Monica Garrido</td>
                                            <td>Pendiente</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <div class='Delivery_Footer'>
                                    <form method='get' action='mainpage.php'>
                                        <label for='cant'>Mostrar:</label>
                                        <input type='numeric' name='cant' id='cant' placeholder='10'>
                                        <input type='submit' value='Ver'>
                                    </form>
                                    <div class='Delivery_Footer_nav'>
                                        <a href='mainpage.php'>0</a>
                                        <p1>10</p1>
                                        <a href='mainpage.php'>20</a>
                                    </div>
                                </div>

                                <div class='Delivery_new'>
                                    <form name ='new_delivery_entry' action='createDelivery.php'>
                                        <input type='submit' value='Crear Pedido'>
                                    </form>
                                </div>
                            </div>
                            ";
        }
    }  
?>