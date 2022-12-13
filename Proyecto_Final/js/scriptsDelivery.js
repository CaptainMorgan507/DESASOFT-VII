function addRow(tableID) {
        /* var myHtmlContent = `<td>
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
                             <td><input type='search' name ='delivery_lot' placeholder='Lote'></td>`;
         var tableRef = document.getElementById(tableID).getElementsByTagName('tbody')[0];

                     var newRow = tableRef.insertRow(tableRef.rows.length);
         newRow.innerHTML = myHtmlContent;*/

         
         var table = document.getElementById(tableID);

         var rowCount = table.rows.length;
         var row = table.insertRow(rowCount);

         var colCount = table.rows[0].cells.length;

         for(var i=0; i<colCount; i++) {

             var newcell	= row.insertCell(i);

             newcell.innerHTML = table.rows[1].cells[i].innerHTML;
             //alert(newcell.childNodes);
             /*switch(newcell.childNodes[0].type) {
                 case "text":
                         newcell.childNodes[0].value = "";
                         break;
                 case "checkbox":
                         newcell.childNodes[0].checked = false;
                         break;
                 case "select-one":
                         newcell.childNodes[0].selectedIndex = 0;
                         break;
             }*/
         }
                     
             }

     function deleteRow(tableID) {
                     try {
                     var table = document.getElementById(tableID);
                     var rowCount = table.rows.length;

                     for(var i=1; i<rowCount; i++) {
                             var row = table.rows[i];
                             var chkbox = row.cells[0].childNodes[1];
             
                             if(null != chkbox && true == chkbox.checked) {
                 
                                     if(rowCount <= 1) {
                                             alert("Cannot delete all the rows.");
                                             break;
                                     }
                                     table.deleteRow(i);
                                     rowCount--;
                                     i--;
                             }
                     }
                     }catch(e) {
                             alert(e);
                     }
             }